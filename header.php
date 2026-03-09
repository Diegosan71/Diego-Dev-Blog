<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Diego Dev Blog</title>
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">

<div class="container">

<h1 class="logo">Diego Dev Blog</h1>

<nav>

<?php
wp_nav_menu(array(
'theme_location' => 'menu-principal'
));
?>

</nav>

</div>

</header>