<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Money - Juit Innovatives</title>
    <meta name="description" content="Donate money and support essential services. Your financial contribution helps provide critical resources to those in need.">
    <meta name="keywords" content="Juit Innovatives, donate money, charity, donation, financial donation">
    <meta name="author" content="Juit Innovatives Team">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Donate Money - Juit Innovatives">
    <meta property="og:description" content="Donate money and support essential services. Your financial contribution helps provide critical resources to those in need.">
    <meta property="og:image" content="https://juitinitiatives.online/path-to-money-donation-image.jpg">
    <meta property="og:url" content="https://juitinitiatives.online/donate-money.php">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Donate Money - Juit Innovatives">
    <meta name="twitter:description" content="Help support essential services by donating money. Your financial contribution can make a huge difference!">
    <meta name="twitter:image" content="https://juitinitiatives.online/path-to-money-donation-image.jpg">

    <!-- Schema.org Structured Data for WebSite -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Juit Innovatives",
    "url": "https://juitinitiatives.online",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://juitinitiatives.online/search?query={search_term_string}",
        "query-input": "required name=search_term_string"
    }
    }
    </script>

    <!-- Schema.org Structured Data for Organization -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Juit Innovatives",
    "url": "https://juitinitiatives.online",
    "logo": "https://juitinitiatives.online/path-to-logo.png",
    "sameAs": [
        "https://www.facebook.com/yourpage",
        "https://www.twitter.com/yourprofile",
        "https://www.instagram.com/yourprofile"
    ],
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-234-567-890",
        "contactType": "customer service"
    }
    }
    </script>

</head>
<body>
    <?php include '../../Resources/nav.php'; ?>
    <?php include '../Contents/donate-money.php'; ?>
    <?php include '../../Resources/footer.php'; ?>

    <script src="https://juitinitiatives.online/Assets/Resources/toaster.js"></script>

</body>
</html>