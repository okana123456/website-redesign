<?php
$rrdaMetaPixelId = '';
$rrdaMetaPixelConfig = __DIR__ . '/meta-pixel-config.php';

if (is_file($rrdaMetaPixelConfig)) {
    include $rrdaMetaPixelConfig;
}

if (defined('RRDA_META_PIXEL_ID')) {
    $rrdaMetaPixelId = RRDA_META_PIXEL_ID;
}

$rrdaEnvPixelId = getenv('RRDA_META_PIXEL_ID');
if (!$rrdaMetaPixelId && $rrdaEnvPixelId) {
    $rrdaMetaPixelId = $rrdaEnvPixelId;
}

$rrdaMetaPixelId = trim((string) $rrdaMetaPixelId);
if (!preg_match('/^\d{6,30}$/', $rrdaMetaPixelId)) {
    return;
}

$rrdaPixelJson = json_encode($rrdaMetaPixelId, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT);
?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', <?php echo $rrdaPixelJson; ?>);
fbq('track', 'PageView');
window.rrdaMetaPixelReady = true;
</script>
<!-- End Meta Pixel Code -->
