<?php
// Define the base path
$basePath = 'assets/';

// CSS Files
$cssFiles = [
    'css/bootstrap-grid.css',
    'css/bootstrap-grid.css.map',
    'css/bootstrap-grid.min.css',
    'css/bootstrap-grid.min.css.map',
    'css/bootstrap-grid.rtl.css',
    'css/bootstrap-grid.rtl.css.map',
    'css/bootstrap-grid.rtl.min.css',
    'css/bootstrap-grid.rtl.min.css.map',
    'css/bootstrap-reboot.css',
    'css/bootstrap-reboot.css.map',
    'css/bootstrap-reboot.min.css',
    'css/bootstrap-reboot.min.css.map',
    'css/bootstrap-reboot.rtl.css',
    'css/bootstrap-reboot.rtl.css.map',
    'css/bootstrap-reboot.rtl.min.css',
    'css/bootstrap-reboot.rtl.min.css.map',
    'css/bootstrap-utilities.css',
    'css/bootstrap-utilities.css.map',
    'css/bootstrap-utilities.min.css',
    'css/bootstrap-utilities.min.css.map',
    'css/bootstrap-utilities.rtl.css',
    'css/bootstrap-utilities.rtl.css.map',
    'css/bootstrap-utilities.rtl.min.css',
    'css/bootstrap-utilities.rtl.min.css.map',
    'css/bootstrap.css',
    'css/bootstrap.css.map',
    'css/bootstrap.min.css',
    'css/bootstrap.min.css.map',
    'css/bootstrap.rtl.css',
    'css/bootstrap.rtl.css.map',
    'css/bootstrap.rtl.min.css',
    'css/bootstrap.rtl.min.css.map',
    'css/nav.css',
    'css/style.css'
];

// JS Files
$jsFiles = [
    'js/bootstrap.bundle.js',
    'js/bootstrap.bundle.js.map',
    'js/bootstrap.bundle.min.js',
    'js/bootstrap.bundle.min.js.map',
    'js/bootstrap.esm.js',
    'js/bootstrap.esm.js.map',
    'js/bootstrap.esm.min.js',
    'js/bootstrap.esm.min.js.map',
    'js/bootstrap.js',
    'js/bootstrap.js.map',
    'js/bootstrap.min.js',
    'js/bootstrap.min.js.map',
    'js/script.js'
];

?>

<!-- CSS Includes -->
<?php foreach ($cssFiles as $css): ?>
    <link rel="stylesheet" href="<?php echo $basePath . $css; ?>">
<?php endforeach; ?>

<!-- JS Includes -->
<?php foreach ($jsFiles as $js): ?>
    <script src="<?php echo $basePath . $js; ?>" defer></script>
<?php endforeach; ?>
