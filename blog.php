<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog – Rudder Research & Data Analytics</title>
  <?php include '_head.php'?>

  <!-- Quill Editor -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <style>
    body { padding-top: 6rem; }
    .blog-item { cursor: pointer; }
    .avatar {
      width:32px; height:32px; border-radius:50%; color:#fff;
      display:inline-flex; align-items:center; justify-content:center;
      font-weight:bold; margin-right:8px;
    }
    #adminPanel { display:none; margin-bottom:2rem; }
    #clearArchive { font-size:.9rem; }
  </style>
</head>
<body>

 <div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                    <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <!-- 
                     We added a new div for the date/time. 
                     Adjust styling (border, padding, etc.) as you prefer. 
                -->
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0">
                            <i class="fa fa-envelope-open me-2"></i>
                            admin@rudderdatanalytics.co.ke
                        </p>
                    </div>
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0">
                            <i class="fa fa-phone-alt me-2"></i>
                            +254792719505
                        </p>
                    </div>
                    <!-- NEW: Date/Time Section -->
                    <div class="py-2">
                        <p class="m-0" id="currentDateTime"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
</div>

<!-- JavaScript to update date & time -->
<script>
  function updateDateTime() {
    const now = new Date();

    // Format components with leading zeros if needed
    const day = String(now.getDate()).padStart(2, '0');
    const month = String(now.getMonth() + 1).padStart(2, '0'); // months are 0-based
    const year = now.getFullYear();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    // e.g. "DD/MM/YYYY HH:MM:SS"
    const formatted = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;

    // Update the text of our HTML element
    document.getElementById('currentDateTime').textContent = formatted;
  }

  // Update date/time once at page load
  updateDateTime();
  // Update every second
  setInterval(updateDateTime, 1000);
</script>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 fixed-top">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class=" text-uppercase text-primary"></i>Rudder Research & Data Analytics</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="services.php" class="nav-item nav-link">Service</a>
                <a href="blog.php" class="nav-item nav-link active">BLOG</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid bg-dark p-5" style="margin-top:0px;">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-4 text-white">Blog Grid</h1>
        <a href="index.html" class="text-white">Home</a>
        <i class="far fa-square text-primary px-2"></i>
        <a href="blog.html" class="text-white">Blog Grid</a>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Blog Section Start -->
  <div class="container-fluid py-6 px-5">
    <div class="row g-5">

      <!-- Main Column -->
      <div class="col-lg-8">

        <!-- Search & New Post -->
        <div class="row mb-4">
          <div class="col-md-8">
            <input id="searchBox" type="text" class="form-control" placeholder="Search posts…">
          </div>
          <div class="col-md-4 text-end">
            <button class="btn btn-success" id="newPostBtn">New Post (Admin)</button>
          </div>
        </div>

        <!-- Admin Panel -->
        <div id="adminPanel" class="bg-light p-4 border rounded mb-4">
          <h4>Create New Blog Post</h4>
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input id="postTitle" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Image</label>
            <input id="postImage" type="file" accept="image/*" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Content</label>
            <div id="editor" style="height:200px; background:#fff;"></div>
          </div>
          <button class="btn btn-primary" id="savePostBtn">Post</button>
        </div>

        <!-- Posts Grid -->
        <div id="postsOverview" class="row g-4"></div>

        <!-- Pagination -->
        <nav>
          <ul class="pagination my-4 justify-content-center">
            <li class="page-item"><a class="page-link" href="#" id="prevPage">&laquo; Prev</a></li>
            <li class="page-item"><a class="page-link" href="#" id="nextPage">Next &raquo;</a></li>
          </ul>
        </nav>

        <!-- Detail View -->
        <div id="postDetail" class="mt-5" style="display:none;">
          <button class="btn btn-link mb-3" id="backToList">&lsaquo; Back to Posts</button>
          <h2 id="detailTitle"></h2>
          <p class="text-muted" id="detailDate"></p>
          <img id="detailImage" class="img-fluid mb-3" alt="">
          <div id="detailContent" class="mb-4"></div>
          <hr>
          <h5>Comments</h5>
          <div id="commentsList" class="mb-3"></div>
          <div class="mb-3">
            <input id="commentName" class="form-control mb-2" placeholder="Your name (optional)">
            <textarea id="commentText" class="form-control" rows="2" placeholder="Your comment"></textarea>
          </div>
          <button class="btn btn-primary" id="saveCommentBtn">Submit Comment</button>
        </div>

      </div>
      <!-- Main Column End -->

      <!-- Sidebar -->
      <div class="col-lg-4">

        <!-- Recent Posts Widget -->
        <div class="mb-5">
          <h2 class="mb-4">Recent Posts</h2>
          <ul id="recentPostsList" class="list-unstyled"></ul>
        </div>

        <!-- Archives Widget -->
        <div class="mb-5">
          <h2 class="mb-4">Archives</h2>
          <div id="archivesList" class="list-unstyled"></div>
        </div>

        <!-- Tag Cloud -->
        <div class="mb-5">
          <h2 class="mb-4">Tag Cloud</h2>
          <div id="tagCloud" class="d-flex flex-wrap m-n1"></div>
        </div>

      </div>
      <!-- Sidebar End -->

    </div>
  </div>
  <!-- Blog Section End -->

  <!-- Admin Login Modal -->
  <div class="modal fade" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><h5>Admin Login</h5></div>
        <div class="modal-body">
          <input id="loginUser" class="form-control mb-2" placeholder="Username">
          <input id="loginPass" type="password" class="form-control mb-2" placeholder="Password">
          <div id="loginError" class="text-danger" style="display:none;">Invalid credentials</div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" id="doLogin">Login</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
   <?php include '_footer.php'?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
    <i class="bi bi-arrow-up"></i>
  </a>

  <!-- JS Libraries -->
  <?php include '_scripts.php'?>
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <!-- Blog Logic -->
  <script>
  (async ()=>{
    const API = '/api';
    let page=0, perPage=4, quill, archiveFilter=null;

    const fmt = ms => new Date(ms).toLocaleString();
    const monthYear = dStr=>{
      const d=new Date(dStr);
      const m=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'][d.getMonth()];
      return m+' '+d.getFullYear();
    };
    const randColor = ()=>'#'+(Math.random()*0xFFFFFF<<0).toString(16).padStart(6,'0');

    // API
    async function apiGetPosts(){
      const r=await fetch(`${API}/api_get_posts.php`);
      return r.ok?r.json():[];
    }
    async function apiLogin(u,p){
      const r=await fetch(`${API}/api_login.php`,{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify({username:u,password:p})
      });
      if(!r.ok) throw 0;
      const j=await r.json();
      if(!j.success) throw 0;
    }
    async function apiSavePost(post){
      await fetch(`${API}/api_save_post.php`,{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify(post)
      });
    }
    async function apiGetComments(id){
      const r=await fetch(`${API}/api_get_comments.php?post_id=${id}`);
      return r.ok?r.json():[];
    }
    async function apiSaveComment(c){
      await fetch(`${API}/api_save_comments.php`,{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify(c)
      });
    }

    // Render grid
    async function renderGrid(){
      const all=await apiGetPosts();
      const q=document.getElementById('searchBox').value.toLowerCase();
      const filtered=all.filter(p=>{
        const matchText=!q
            ||p.title.toLowerCase().includes(q)
            ||p.excerpt.toLowerCase().includes(q);
        const matchArchive=!archiveFilter
            || monthYear(p.created_at)===archiveFilter;
        return matchText&&matchArchive;
      });

      // Posts
      const container=document.getElementById('postsOverview');
      container.innerHTML='';
      filtered.slice(page*perPage,page*perPage+perPage)
        .forEach(p=>{
          const col=document.createElement('div');
          col.className='col-md-6';
          col.innerHTML=`
            <div class="card blog-item">
              <img src="${p.image}" class="card-img-top" style="max-height:200px;object-fit:cover">
              <div class="card-body">
                <h5 class="card-title">${p.title}</h5>
                <p class="text-muted small">${fmt(p.created_at)}</p>
                <p class="card-text">${p.excerpt}</p>
              </div>
            </div>`;
          col.querySelector('.blog-item').onclick=_=>showDetail(p.id);
          container.appendChild(col);
        });

      renderSidebar(all,filtered);
    }

    // Detail view
    async function showDetail(id){
      const posts=await apiGetPosts();
      const p=posts.find(x=>x.id==id);
      document.getElementById('postsOverview').style.display='none';
      document.getElementById('postDetail').style.display='block';
      document.getElementById('detailTitle').textContent=p.title;
      document.getElementById('detailDate').textContent=fmt(p.created_at);
      document.getElementById('detailImage').src=p.image;
      document.getElementById('detailContent').innerHTML=p.content;
      renderComments(id);
    }
    document.getElementById('backToList').onclick=_=>{
      document.getElementById('postDetail').style.display='none';
      document.getElementById('postsOverview').style.display='flex';
    };

    // Comments
    async function renderComments(pid){
      const cmts=await apiGetComments(pid);
      const list=document.getElementById('commentsList');
      list.innerHTML='';
      cmts.forEach(c=>{
        const d=document.createElement('div');
        d.className='d-flex mb-3';
        d.innerHTML=`
          <div class="avatar" style="background:${randColor()}">${(c.name||'A')[0]}</div>
          <div>
            <strong>${c.name}</strong> <small class="text-muted">${fmt(c.created_at)}</small>
            <p>${c.text}</p>
          </div>`;
        list.appendChild(d);
      });
    }
    document.getElementById('saveCommentBtn').onclick=async ()=>{
      const name=document.getElementById('commentName').value.trim()||'Anon';
      const text=document.getElementById('commentText').value.trim();
      if(!text) return alert('Enter comment');
      const pid=(await apiGetPosts())
        .find(p=>p.title===document.getElementById('detailTitle').textContent).id;
      await apiSaveComment({post_id:pid,name,text});
      document.getElementById('commentText').value='';
      renderComments(pid);
    };

    // Sidebar: recent, archives, tags
    async function renderSidebar(all,filtered){
      // Recent 5
      const rec=document.getElementById('recentPostsList');
      rec.innerHTML='';
      filtered.slice(0,5).forEach(p=>{
        const li=document.createElement('li');
        li.className='mb-2';
        li.innerHTML=`
          <i class="bi bi-file-earmark-post-fill text-primary me-2"></i>
          <a href="#" data-id="${p.id}">${p.title}</a>`;
        li.querySelector('a').onclick=e=>{
          e.preventDefault(); showDetail(p.id);
        };
        rec.appendChild(li);
      });

      // Archives
      const yrs=new Set();
      all.forEach(p=>yrs.add(monthYear(p.created_at)));
      const arr=Array.from(yrs).sort((a,b)=>{
        const [ma,ya]=a.split(' '), [mb,yb]=b.split(' ');
        const da=new Date(`${ma} 1, ${ya}`), db=new Date(`${mb} 1, ${yb}`);
        return db - da;
      });
      const arch=document.getElementById('archivesList');
      arch.innerHTML='';
      if(archiveFilter){
        const clear=document.createElement('a');
        clear.href='#'; clear.id='clearArchive';
        clear.textContent='Show all posts';
        clear.onclick=e=>{
          e.preventDefault();
          archiveFilter=null; page=0; renderGrid();
        };
        arch.appendChild(clear);
      }
      arr.forEach(yr=>{
        const a=document.createElement('div');
        a.innerHTML=`
          <i class="bi bi-calendar-event text-primary me-2"></i>
          <a href="#" data-yr="${yr}">${yr}</a>`;
        a.querySelector('a').onclick=e=>{
          e.preventDefault();
          archiveFilter=yr; page=0; renderGrid();
        };
        arch.appendChild(a);
      });

      // Tag Cloud (static)
      const tags=['Data Analysis','Machine Learning','Business Intelligence','Cybersecurity','Logistics'];
      const tc=document.getElementById('tagCloud');
      tc.innerHTML='';
      tags.forEach(t=>{
        const btn=document.createElement('a');
        btn.href='#'; btn.className='btn btn-secondary m-1';
        btn.innerHTML=`<i class="bi bi-hash me-1"></i>${t}`;
        btn.onclick=e=>{
          e.preventDefault();
          document.getElementById('searchBox').value=t.toLowerCase();
          archiveFilter=null; page=0; renderGrid();
        };
        tc.appendChild(btn);
      });
    }

    // Pagination & search
    document.getElementById('prevPage').onclick=e=>{
      e.preventDefault(); if(page>0)page--; renderGrid();
    };
    document.getElementById('nextPage').onclick=e=>{
      e.preventDefault(); page++; renderGrid();
    };
    document.getElementById('searchBox').oninput=_=>{
      page=0; renderGrid();
    };

    // Admin login & posting
    const loginModal=new bootstrap.Modal(document.getElementById('loginModal'));
    document.getElementById('newPostBtn').onclick=_=>loginModal.show();
    document.getElementById('doLogin').onclick=async ()=>{
      try {
        await apiLogin(
          document.getElementById('loginUser').value,
          document.getElementById('loginPass').value
        );
        loginModal.hide();
        document.getElementById('loginError').style.display='none';
        document.getElementById('adminPanel').style.display='block';
      } catch {
        document.getElementById('loginError').style.display='block';
      }
    };

    // Quill & save post
    quill=new Quill('#editor',{theme:'snow'});
    document.getElementById('savePostBtn').onclick=async ()=>{
      const title=document.getElementById('postTitle').value.trim();
      const file=document.getElementById('postImage').files[0];
      const content=quill.root.innerHTML;
      if(!title||!file||!quill.getText().trim()) return alert('All fields required');
      const r=new FileReader();
      r.onload=async ()=>{
        await apiSavePost({title,image:r.result,content});
        document.getElementById('postTitle').value='';
        document.getElementById('postImage').value='';
        quill.setText('');
        renderGrid();
      };
      r.readAsDataURL(file);
    };

    // Initial render
    renderGrid();
  })();
  </script>
</body>
</html>
