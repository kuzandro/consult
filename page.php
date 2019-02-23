<?php get_header(); ?>


<div class="content">                
<?php get_sidebar(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post">
	<div class="info">
<h2><?php the_title(); ?></h2>
<?php the_content(''); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>