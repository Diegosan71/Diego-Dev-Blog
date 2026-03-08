<?php get_header(); ?>

<main>

<div class="container">

<h2>Últimos posts</h2>

<div class="posts-grid">

<?php
if ( have_posts() ) {

while ( have_posts() ) {

the_post();
?>

<article class="post-card">

<h3 class="post-title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h3>

<p class="post-excerpt">
<?php the_excerpt(); ?>
</p>

<a class="read-more" href="<?php the_permalink(); ?>">
Leer más →
</a>

</article>

<?php
}
}
?>

</div>


<h2 class="api-title">Posts desde API</h2>

<div class="api-grid">

<?php

$posts_api = obtener_posts_api();

if($posts_api){

foreach($posts_api as $post){
?>

<div class="api-card">

<h3><?php echo esc_html($post->title); ?></h3>

<p><?php echo esc_html($post->body); ?></p>

</div>

<?php
}
}
?>

</div>

</div>

</main>

<?php get_footer(); ?>