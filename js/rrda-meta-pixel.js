(function () {
    function canTrack() {
        return typeof window.fbq === "function" && window.rrdaMetaPixelReady === true;
    }

    function track(eventName, params) {
        if (!canTrack()) {
            return;
        }

        window.fbq("track", eventName, params || {});
    }

    function trackCustom(eventName, params) {
        if (!canTrack()) {
            return;
        }

        window.fbq("trackCustom", eventName, params || {});
    }

    function pageCategory() {
        var path = window.location.pathname.toLowerCase();

        if (path.indexOf("blog") !== -1) return "Blog";
        if (path.indexOf("jobs") !== -1 || path.indexOf("career") !== -1) return "Careers";
        if (path.indexOf("data") !== -1 || path.indexOf("best-") !== -1 || path.indexOf("ranking") !== -1) return "Data";
        if (path.indexOf("contact") !== -1) return "Contact";
        if (path.indexOf("services") !== -1 || path.indexOf("system") !== -1 || path.indexOf("research") !== -1) return "Services";

        return "Website";
    }

    document.addEventListener("DOMContentLoaded", function () {
        var category = pageCategory();

        if (category !== "Website") {
            track("ViewContent", {
                content_name: document.title || category,
                content_category: category
            });
        }

        document.addEventListener("submit", function (event) {
            var form = event.target;
            if (!form || !form.tagName || form.tagName.toLowerCase() !== "form") {
                return;
            }

            var action = (form.getAttribute("action") || "").toLowerCase();
            var formId = (form.getAttribute("id") || "").toLowerCase();

            if (action.indexOf("sendjob") !== -1 || formId.indexOf("job") !== -1 || formId.indexOf("career") !== -1) {
                track("Lead", { content_name: "Careers application", content_category: "Careers" });
                track("SubmitApplication", { content_name: "Careers application" });
                return;
            }

            if (action.indexOf("sendmail") !== -1 || action.indexOf("sendquote") !== -1 || category === "Contact") {
                track("Lead", { content_name: "Website enquiry", content_category: "Contact" });
                return;
            }

            if (action.indexOf("subscribe") !== -1) {
                track("Subscribe", { content_name: "Newsletter signup" });
            }
        }, true);

        document.addEventListener("click", function (event) {
            var link = event.target.closest ? event.target.closest("a") : null;
            if (!link) {
                return;
            }

            var href = (link.getAttribute("href") || "").toLowerCase();
            var label = (link.textContent || "").trim().replace(/\s+/g, " ").slice(0, 80);

            if (href.indexOf("mailto:") === 0 || href.indexOf("tel:") === 0 || href.indexOf("wa.me") !== -1 || href.indexOf("whatsapp") !== -1) {
                track("Contact", { content_name: label || "Contact link", content_category: category });
                return;
            }

            if (href.indexOf("contact.php") !== -1 || label.toLowerCase().indexOf("quote") !== -1 || label.toLowerCase().indexOf("question") !== -1) {
                track("Lead", { content_name: label || "Lead click", content_category: category });
                return;
            }

            if (href.indexOf("jobs.php") !== -1 || href.indexOf("career") !== -1) {
                trackCustom("CareerInterest", { content_name: label || "Careers click" });
                return;
            }

            if (href.indexOf("data") !== -1 || href.indexOf("best-") !== -1 || href.indexOf("ranking") !== -1) {
                trackCustom("DataProductInterest", { content_name: label || "Data page click" });
            }
        }, true);
    });
})();
