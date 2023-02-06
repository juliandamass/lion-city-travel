<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

get_header();
?>

	<section id="primary" class="pt-10 pb-20">
		<main id="main">

    <div class="max-w-6xl px-4 mx-auto">
      <?php if ( have_posts() ) : ?>

        <?php if (get_post_type() === 'tours') : ?>

          <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold">Our Tour Packages</h2>
            <?php
            // $categories = get_the_category();
            // var_dump($categories);
            // echo $categories[0]->name;
            ?>
          </div>

          <div class="grid grid-cols-4 gap-6 mb-10">
            <?php
            // Start the Loop.
            while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content/content', 'tours' );

              // End the loop.
            endwhile;
            ?>
          </div>

          <div>
            <?php
            // Previous/next page navigation.
            lion_city_travel_the_posts_navigation();
            ?>
          </div>

        <?php else :?>

          <header class="page-header">
            <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
          </header><!-- .page-header -->

          <?php
          // Start the Loop.
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'excerpt' );

            // End the loop.
          endwhile;

          // Previous/next page navigation.
          lion_city_travel_the_posts_navigation();
          ?>

        <?php endif; ?>

<?php
      else :

        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content/content', 'none' );

      endif;
      ?>
    </div>

		</main>
	</section>

<?php
get_footer();
