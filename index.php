<!-- Load Header -->
<?php get_header(); ?>

<div id="main">
	<div id="content">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post(); ?>
				<h2><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></h2>
				<small>Posted on <?php the_time('F jS, Y') ?></small>
				<p><?php the_content(__('(more...)')); ?></p>
				<div class="divisor"></div>
			<?php endwhile;
		else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php
		endif;?>
	</div>
	<?php get_footer(); ?>