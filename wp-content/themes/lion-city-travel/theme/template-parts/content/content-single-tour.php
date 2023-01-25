<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur est voluptatibus fuga. Assumenda nisi harum adipisci explicabo iste quo, quaerat cupiditate, fugiat suscipit quae porro sint qui praesentium libero dicta.

	<?php lion_city_travel_post_thumbnail(); ?>

	<div class="entry-content prose">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'lion-city-travel' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'lion-city-travel' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lion_city_travel_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
