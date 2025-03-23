<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: https://juitinitiatives.online/dashboard");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juit Innovatives - Registration</title>
    <meta name="description" content="Register with Juit Innovatives – join our transparent charity platform for donating food, money, and clothes.">
    <meta name="keywords" content="Juit Innovatives, charity, donation, register, registration, sign up, food donation, money donation, clothes donation, create account, admin panel">
    <meta name="author" content="Juit Innovatives Team">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Juit Innovatives - Registration">
    <meta property="og:description" content="Create your account on Juit Innovatives – the platform dedicated to transparent charity donations.">
    <meta property="og:image" content="https://yourwebsite.com/path-to-image.jpg">
    <meta property="og:url" content="https://yourwebsite.com/register">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Juit Innovatives - Registration">
    <meta name="twitter:description" content="Sign up for Juit Innovatives – the transparent charity platform for donating food, money, and clothes.">
    <meta name="twitter:image" content="https://yourwebsite.com/path-to-image.jpg">

</head>
<body>
    <?php include '../../Resources/nav.php'; ?>
    <?php include '../Contents/JI_registeration.php'; ?>

    <script src="https://juitinitiatives.online/Assets/Resources/toaster.js"></script>
</body>
</html>