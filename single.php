<?php get_header(); ?>

<main>

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

<article>

<h1><?php the_title(); ?></h1>

<p><?php the_date(); ?></p>

<div>
<?php the_content(); ?>
</div>

<nav>

<p><?php previous_post_link(); ?></p>

<p><?php next_post_link(); ?></p>

</nav>

</article>

<?php endwhile; ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>