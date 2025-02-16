<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <?php include 'includes/assets.php'; ?>

</head>
<body>
    <?php include 'includes/nav.php'; ?>
    
    <main>
        <?php include "$page.php"; ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>


</body>
</html>
