<?php get_header(); ?>


<div class="content">                
<?php get_sidebar(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="single_post">
<div class="post_img_single"><?php the_post_thumbnail(array( 200,200 ), array( 'class' => 'alignleft' )); ?></div>
<div class="single_info">
<h2><?php the_title(); ?></h2>
<?php the_content(''); ?>
</div>
<div class="single_data">
Дата: <?php the_time('jS F Y'); ?> &emsp; Категория: <?php the_category(', '); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>