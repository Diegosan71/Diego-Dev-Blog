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
<a href="<?php echo home_url(); ?>">Inicio</a>
<a href="<?php echo home_url('/sobre-mi'); ?>">Sobre Mi</a>
<a href="<?php echo home_url('/contacto'); ?>">Contacto</a>
</nav>

</div>

</header>