<?php
/*
Template Name: Wide Page
*/
?>
<?php get_header(); ?>
<div class="span-24 first last">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php include (THEMELIB . '/apps/multimedia.php'); ?>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<div class="clear"></div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Modifier cette entr&eacute;e.', '<p>', '</p>'); ?>
<?php get_footer(); ?>