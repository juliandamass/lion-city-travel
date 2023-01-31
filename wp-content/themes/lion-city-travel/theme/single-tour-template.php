<?php
/*
 * Template Name: Single Tour Template
 * Template Post Type: tours
 */
?>

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lion_City_Travel
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="relative">
      <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/placeholder.jpg'; ?>" class="w-full h-[520px] object-cover" alt="Image">
      <div class="absolute top-0 left-0 w-full h-full bg-black/40">
        <div class="flex items-end container px-4 mx-auto w-full h-full">
          <div class="grid grid-cols-6 gap-8">
            <div class="col-span-4 flex items-end pb-8">
              <p class="text-3xl text-white font-bold leading-snug">5D Hanoi with 1N Cruise in Halong Bay (Private Tour) TR-634 SIN-HDY 1325-1355 PHATTHALUNG- HATYAI >CENTARA</p>
            </div>
            <div class="col-span-2 flex items-end">
              <div class="w-full bg-primary/70 p-8 border-2 border-transparent rounded-t-lg text-center">
                <p class="text-white font-medium mb-2">Start From</p>
                <p class="text-5xl text-white font-bold">S$ <?php echo get_field('price') ? get_field('price') : '-'; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

		<div class="container px-4 mx-auto pb-16">
      <div class="grid grid-cols-6 gap-8">
        <div class="col-span-4 py-8">
          <?php
          while ( have_posts() ) :
            the_post();

				    get_template_part( 'template-parts/content/content', 'single-tour' );

          endwhile;
          ?>
        </div>

        <div class="col-span-2 space-y-8">
          <div class="form-enquiry w-full bg-neutral-50 p-8 border-2 border-t-0 rounded-b-lg border-neutral-200 space-y-6">
            <div>
              <p class="mb-2 block whitespace-nowrap text-neutral-500">Availability</p>
              <div class="flex items-center space-x-2">
                <i class="uil uil-calendar-alt"></i>
                <p class="text-sm"><?php echo get_field('availability') ? get_field('availability') : '-'; ?></p>
              </div>
            </div>
            <div>
              <div class="hidden"></div>
              <?php echo do_shortcode('[contact-form-7 id="78" title="Enquiry"]'); ?>
            </div>
          </div>

          <div class="w-full px-8 py-6 bg-neutral-800 text-white rounded-lg overflow-hidden">
            <h3 class="text-xl font-bold mb-4">Why Book With Us?</h3>
            <div class="flex flex-col divide-y divide-white/50 -my-2">
              <div class="flex items-center py-2 space-x-2">
                <i class="uil uil-usd-circle"></i>
                <p>No-hassle best price guarantee</p>
              </div>
              <div class="flex items-center py-2 space-x-2">
                <i class="uil uil-headphones-alt"></i>
                <p>Customer care available</p>
              </div>
              <div class="flex items-center py-2 space-x-2">
                <i class="uil uil-star"></i>
                <p>Hand-picked Tours & Activities</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	</main>

<?php
get_footer();
