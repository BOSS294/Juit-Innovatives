<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us – Juit Donations</title>
<meta name="description" content="Learn about Juit Donations’ mission, vision, and values. Discover how we empower communities through transparent, impactful giving, and meet the team driving our cause forward.">
<meta name="keywords" content="Juit Donations, about us, mission, vision, charity platform, transparency, community impact">
<meta name="author" content="Juit Innovatives Team">

<!-- Open Graph / Facebook -->
<meta property="og:title" content="About Us – Juit Donations">
<meta property="og:description" content="Discover the mission and vision behind Juit Donations. We build trust through transparency and measurable impact in communities worldwide.">
<meta property="og:image" content="https://juitinitiatives.online/path-to-about-us-image.jpg">
<meta property="og:url" content="https://juitinitiatives.online/about-us.php">
<meta property="og:type" content="website">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About Us – Juit Donations">
<meta name="twitter:description" content="Find out who we are, what drives us, and how Juit Donations is making a difference in communities around the globe.">
<meta name="twitter:image" content="https://juitinitiatives.online/path-to-about-us-image.jpg">

<!-- Schema.org Structured Data for WebSite -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Juit Donations",
  "url": "https://juitinitiatives.online",
  "description": "Juit Donations is a transparent charity platform empowering communities through impactful financial, food, cloth, and book donations.",
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
  "name": "Juit Donations",
  "url": "https://juitinitiatives.online",
  "logo": "https://juitinitiatives.online/path-to-logo.png",
  "description": "Our mission is to facilitate transparent, scalable giving across food, cloth, money, and book donations, driving sustainable community development.",
  "sameAs": [
    "https://www.facebook.com/yourpage",
    "https://www.twitter.com/yourprofile",
    "https://www.instagram.com/yourprofile"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-234-567-890",
    "contactType": "Customer Service",
    "areaServed": "IN"
  }
}
</script>
</head>
<body>
    <?php include '../../Resources/nav.php'; ?>
    <?php include '../Contents/about-us.php'; ?>
    <?php include '../../Resources/footer.php'; ?>

    <script src="https://juitinitiatives.online/Assets/Resources/toaster.js"></script>

</body>
</html>