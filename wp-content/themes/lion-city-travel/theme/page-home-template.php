<?php /* Template Name: Page Home Template */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

get_header();
?>

	<main id="primary">

    <div class="overflow-hidden">
      <?php echo do_shortcode('[metaslider id="16"]'); ?>
    </div>

		<div class="max-w-6xl px-4 mx-auto">
      <div class="py-16 space-y-16">
        <div class="w-full">
          <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold">Top Tour Packages</h2>
          </div>
          <div class="max-w-5xl mx-auto">

            <?php
            if ( function_exists('wpp_get_mostpopular') ) {
                /* Get up to the top 5 commented posts from the last 7 days */
                $tops = wpp_get_mostpopular(array(
                    'post_type' => 'tours',
                    'limit'     => 3,
                    'range'     => 'all',
                    'order_by'  => 'views',
                    'wpp_start' => '<div class="grid grid-cols-3 gap-6">',
                    'wpp_end'   => '</div>',
                    'thumbnail_width' => 500,
                    'thumbnail_height' => 500,
                    'stats_category' => 1,
                    'post_html' => '
                    <div class="popular-container w-full rounded-lg overflow-hidden group">
                      <a href="{url}">
                        <div class="relative">
                          <img src="{thumb_url}" class="popular-image w-full object-cover group-hover:scale-110 transition-all" alt="Post Image" />
                          <div class="absolute top-0 left-0 flex items-end w-full h-full">
                            <div class="w-full p-4 pt-16 bg-gradient-to-t from-black/80 via-black/80 text-white font-medium">
                              <div class="inline-block bg-primary px-3 py-1 rounded-full text-white text-xs font-bold mb-2">{text_category}</div>
                              <p class="font-bold text-lg leading-tight mb-6">{text_title}</p>
                              <p class="text-sm whitespace-nowrap mb-1">Start From</p>
                              <p class="text-4xl font-bold whitespace-nowrap">S$ {price}</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    '
                ));
            }
            ?>

          </div>
        </div>

        <div class="w-full">
          <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold">Our Tour Packages</h2>
          </div>
          <?php
            $tours = get_posts(array(
              'post_type'   =>  'tours',
              'numberposts' => 8,
              'orderby'     => 'date',
              'order'       => 'DESC',
            ));
          ?>
          <div class="grid grid-cols-4 gap-6">
            <?php
              foreach ( $tours as $tour ) {
                ?>
                <div class="w-full bg-white rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] hover:shadow-[0_1px_4px_1px_rgba(0,0,0,0.15)] transition-all overflow-hidden">
                  <a href="<?php echo get_post_permalink($tour->ID); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($tour->ID) ? get_the_post_thumbnail_url($tour->ID) : get_template_directory_uri() . '/images/placeholder.jpg'; ?>" class="w-full h-60 object-cover" alt="Post Image">
                    <div class="p-4 space-y-2">
                      <p class="font-bold text-lg leading-tight"><?php echo $tour->post_title ?></p>
                      <div>
                        <p class="text-sm text-neutral-500 whitespace-nowrap">Availability</p>
                        <div class="flex items-center space-x-2">
                          <i class="uil uil-calendar-alt"></i>
                          <p class="text-sm"><?php echo get_field('availability', $tour->ID) ? get_field('availability', $tour->ID) : '-'; ?></p>
                        </div>
                      </div>
                      <div class="flex items-end justify-between space-x-4">
                        <div>
                          <p class="text-sm text-neutral-500 whitespace-nowrap">Start From</p>
                          <p class="text-2xl text-primary font-bold whitespace-nowrap">S$ <?php echo get_field('price', $tour->ID) ? get_field('price', $tour->ID) : '-'; ?></p>
                        </div>
                        <button type="button" class="px-4 py-1 bg-primary border border-primary text-white font-medium rounded-lg">See Details</button>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
            ?>
          </div>
          <div class="text-center mt-10">
            <a href="<?php echo get_site_url(); ?>/category/destination" class="px-6 py-2 bg-white hover:bg-primary border-2 border-primary text-primary hover:text-white text-xl font-medium rounded-lg transition-all">View All Tour Packages</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full py-10 bg-gray-100">
		  <div class="max-w-6xl px-4 mx-auto">
        <div class="mb-10 text-center">
          <h2 class="text-4xl font-bold">Top Destinations</h2>
        </div>
      </div>
      <div class="grid grid-cols-4">
        <?php
          $categories = get_categories(array(
            'parent'  => 8,
            'orderby' => 'count',
            'order'   => 'DESC',
            'number'  => 4,
          ));

          foreach ( $categories as $category ) {
            ?>
            <div class="w-full overflow-hidden group">
              <div class="relative">
                <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="w-full h-[200px] object-cover group-hover:scale-110 transition-all" alt="Post Image">
                <div class="absolute top-0 left-0 flex items-end w-full h-full bg-black/50 text-white p-6">
                  <div class="w-full">
                    <div class="flex items-center space-x-2">
                      <i class="uil uil-map-marker text-xl"></i>
                      <p class="text-white text-xl font-medium"><?php echo $category->cat_name?></p>
                    </div>
                    <div class="flex items-center space-x-2">
                      <i class="uil uil-map text-xl"></i>
                      <p class="text-white font-medium"><?php echo $category->count ?> tours</p>
                    </div>
                    <div class="mt-2">
                      <a href="<?php echo get_category_link($category->term_id) ?>" class="px-3 py-0.5 bg-primary border border-primary text-white text-sm font-medium rounded-lg">View All Tours</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        ?>
      </div>
    </div>
	</main>

<?php
get_footer();
