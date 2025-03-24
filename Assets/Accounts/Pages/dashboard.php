<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: https://juitinitiatives.online/login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juit Innovatives - Dashboard</title>
    <meta name="description" content="Welcome to your Dashboard on Juit Innovatives – manage your donations, view your profile, and update your account details on our transparent charity platform.">
    <meta name="keywords" content="Juit Innovatives, dashboard, charity, donation, user profile, account management, transparent donations">
    <meta name="author" content="Juit Innovatives Team">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Juit Innovatives - Dashboard">
    <meta property="og:description" content="Access your Dashboard on Juit Innovatives to manage your profile, donations, and account settings. Experience transparency in charity like never before.">
    <meta property="og:image" content="https://yourwebsite.com/path-to-dashboard-image.jpg">
    <meta property="og:url" content="https://juitinitiatives.online/dashboard">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Juit Innovatives - Dashboard">
    <meta name="twitter:description" content="Manage your donations, view your profile, and update your account details on Juit Innovatives. Your transparent charity dashboard awaits.">
    <meta name="twitter:image" content="https://yourwebsite.com/path-to-dashboard-image.jpg">


</head>
<body>
    <?php include '../../Resources/nav.php'; ?>
    <?php include '../Contents/JI_dashboard.php'; ?>
    <?php include '../../Resources/footer.php'; ?>

    <script src="https://juitinitiatives.online/Assets/Resources/toaster.js"></script>
</body>
</html>