<?php
/**
 * Plugin Name: Tabaix Amazon Click Event
 * Description: Sends a GA4 event named "amazon_click" whenever a visitor clicks an outbound Amazon affiliate link, so the click can be used as a Key Event (conversion) in Google Analytics. Tiny, dependency-free, no data stored.
 * Version: 1.0.0
 * Author: Tabaix
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_footer', 'tabaix_amazon_click_event_script', 99);

function tabaix_amazon_click_event_script()
{
    ?>
<script>
(function () {
    document.addEventListener('click', function (e) {
        var a = e.target && e.target.closest ? e.target.closest('a[href]') : null;
        if (!a) { return; }
        var href = a.getAttribute('href') || '';
        if (!/(amazon\.|amzn\.)/i.test(href)) { return; }
        if (typeof gtag !== 'function') { return; }
        var url;
        try { url = new URL(href, window.location.href); } catch (err) { return; }
        gtag('event', 'amazon_click', {
            link_url: url.href,
            link_domain: url.hostname,
            page_path: window.location.pathname
        });
    }, true);
})();
</script>
    <?php
}
