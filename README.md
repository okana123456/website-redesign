# Website Redesign

Clean working copy for the Rudder Research & Data Analytics website.

## Private files not stored in Git

Create these directly in cPanel after deployment:

- `mail-config.php`, copied from `mail-config.example.php`

## Careers assessment

The careers page verifies each applicant's email, generates a timed numerical assessment and unlocks the CV form only after a passing score. Attempt records are created automatically in `rrda-career-data` one directory above `public_html`, keeping assessment answers and applicant status outside the public website.
- `api/config.php`, copied from `api/config.example.php`

Do not commit real passwords, database credentials, backups, cache folders, or zip files.

## cPanel deployment

The `.cpanel.yml` file copies the top-level website files to:

`/home/rudderdatanalyti/public_html/`

Review that path in cPanel before pressing **Deploy HEAD Commit**.

## Mystery shopping editorial calendar

The file `_mystery_shopping_posts.php` contains 30 sector-specific articles scheduled daily from 27 September to 26 October 2026. The blog only exposes posts whose Nairobi publish date has arrived.

The 15 optimized WebP covers are stored in `img/blog/mystery-shopping`. Blog pages include pagination, article structured data, breadcrumb structured data, related reading and image sitemap entries. Older mass-generated location variants remain reachable but are marked `noindex` and excluded from the blog sitemap.
