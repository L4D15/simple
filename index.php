<!-- Load Header -->
<?php get_header(); ?>

<div id="main">
	<div id="content">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				get_template_part( 'content', get_post_format() );

				echo "<div class='divisor'></div>";
			endwhile;
		else:
			
				get_template_part( 'content', 'none');

		endif;
		?>
	</div>
	<?php get_footer(); ?>