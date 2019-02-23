<?php get_header(); ?>


<div class="content">                
<?php get_sidebar(); ?>

<?php if (have_posts()) : ?>
<div class="title1">
	<h2>Результаты поиска "<?php the_search_query(); ?>"</h2>
</div>	
<?php while (have_posts()) : the_post(); ?>

<div class="post">
<div class="post_img"><?php the_post_thumbnail(array( 200,200 ), array( 'class' => 'alignleft' )); ?></div>
<div class="info">
<h2><a href="<?php the_permalink(); ?>" class="main"><?php the_title(); ?></a></h2>
<div class="post_text"><?php the_excerpt(); ?></div>
<span class="rm"><a href="<?php the_permalink(); ?>">Читать далее...</a></span>
<ul class="post_info">
<li>Дата: <?php the_time('jS F Y'); ?></li>
<li>Категория: <?php the_category(', '); ?></li>
</ul>
</div>
</div>
<?php endwhile; ?>
<?php else : ?>

<div class="title1">
<h2>Ничего не найдено</h2>
</div>
<div class="nothing">
Извините, по вашему запросу ничего не найдено. <a href="<?php echo get_option('home'); ?>">Вернуться на главную страницу</a></div>
<?php endif; ?>

    
 </div>   
<?php get_footer(); ?>