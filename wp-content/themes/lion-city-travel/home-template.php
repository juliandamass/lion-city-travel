<?php /* Template Name: Home Template */ ?>

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

		<div class="container px-4 mx-auto">
      <div class="py-16 space-y-16">
        <div class="w-full">
          <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold">Top Tour Packages</h2>
          </div>
          <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-3 gap-6">
              <div class="w-full rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] overflow-hidden group">
                <a href="#">
                  <div class="relative">
                    <img src="https://singatour.com/wp-content/uploads/2023/01/Royal-Palace-Cruise-Halong.jpg" class="w-full h-[450px] object-cover group-hover:scale-110 transition-all" alt="Post Image">
                    <div class="absolute top-0 left-0 flex items-end w-full h-full">
                      <div class="p-4 pt-16 bg-gradient-to-t from-black/80 via-black/80 text-white font-medium">
                        <div class="inline-block bg-primary px-3 py-1 rounded-full text-white text-xs font-bold mb-2">Thailand</div>
                        <p class="font-bold text-lg leading-tight mb-6">5D Hanoi with 1N Cruise in Halong Bay (Private Tour)</p>
                        <p class="text-sm whitespace-nowrap mb-1">Start From</p>
                        <p class="text-4xl font-bold whitespace-nowrap">S$ 828</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-full rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] overflow-hidden group">
                <a href="#">
                  <div class="relative">
                    <img src="https://singatour.com/wp-content/uploads/2023/01/Royal-Palace-Cruise-Halong.jpg" class="w-full h-[450px] object-cover group-hover:scale-110 transition-all" alt="Post Image">
                    <div class="absolute top-0 left-0 flex items-end w-full h-full">
                      <div class="p-4 pt-16 bg-gradient-to-t from-black/80 via-black/80 text-white font-medium">
                        <div class="inline-block bg-primary px-3 py-1 rounded-full text-white text-xs font-bold mb-2">Thailand</div>
                        <p class="font-bold text-lg leading-tight mb-6">5D Hanoi with 1N Cruise in Halong Bay (Private Tour)</p>
                        <p class="text-sm whitespace-nowrap mb-1">Start From</p>
                        <p class="text-4xl font-bold whitespace-nowrap">S$ 828</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-full rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] overflow-hidden group">
                <a href="#">
                  <div class="relative">
                    <img src="https://singatour.com/wp-content/uploads/2023/01/Royal-Palace-Cruise-Halong.jpg" class="w-full h-[450px] object-cover group-hover:scale-110 transition-all" alt="Post Image">
                    <div class="absolute top-0 left-0 flex items-end w-full h-full">
                      <div class="p-4 pt-16 bg-gradient-to-t from-black/80 via-black/80 text-white font-medium">
                        <div class="inline-block bg-primary px-3 py-1 rounded-full text-white text-xs font-bold mb-2">Thailand</div>
                        <p class="font-bold text-lg leading-tight mb-6">5D Hanoi with 1N Cruise in Halong Bay (Private Tour)</p>
                        <p class="text-sm whitespace-nowrap mb-1">Start From</p>
                        <p class="text-4xl font-bold whitespace-nowrap">S$ 828</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full">
          <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold">Our Tour Packages</h2>
          </div>
          <div class="grid grid-cols-4 gap-6">
            <?php
              for ($i=0; $i < 8; $i++) {
                ?>
                <div class="w-full bg-white rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] hover:shadow-[0_1px_4px_1px_rgba(0,0,0,0.15)] transition-all overflow-hidden">
                  <a href="#">
                    <img src="https://singatour.com/wp-content/uploads/2023/01/Royal-Palace-Cruise-Halong.jpg" class="w-full h-80 object-cover" alt="Post Image">
                    <div class="p-4 space-y-2">
                      <p class="font-bold text-lg leading-tight">5D Hanoi with 1N Cruise in Halong Bay (Private Tour)</p>
                      <div>
                        <p class="text-sm text-neutral-500 whitespace-nowrap">Availability</p>
                        <div class="flex items-center space-x-2">
                          <i class="uil uil-calendar-alt"></i>
                          <p class="text-sm">20 April 2023</p>
                        </div>
                      </div>
                      <div class="flex items-end justify-between space-x-4">
                        <div>
                          <p class="text-sm text-neutral-500 whitespace-nowrap">Start From</p>
                          <p class="text-2xl text-primary font-bold whitespace-nowrap">S$ 828</p>
                        </div>
                        <button type="button" class="px-4 py-1 bg-primary border border-primary text-white font-medium rounded-lg">Book Now</button>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
            ?>
          </div>
          <div class="text-center mt-10">
            <button type="button" class="px-6 py-2 bg-white hover:bg-primary border-2 border-primary text-primary hover:text-white text-xl font-medium rounded-lg transition-all">View All Tour Packages</button>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full py-10 bg-gray-100">
		  <div class="container px-4 mx-auto">
        <div class="mb-10 text-center">
          <h2 class="text-4xl font-bold">Top Destinations</h2>
        </div>
      </div>
      <div class="grid grid-cols-4">
        <?php
          for ($i=0; $i < 4; $i++) {
            ?>
            <div class="w-full overflow-hidden group">
              <div class="relative">
                <img src="https://singatour.com/wp-content/uploads/2023/01/Royal-Palace-Cruise-Halong.jpg" class="w-full h-[200px] object-cover group-hover:scale-110 transition-all" alt="Post Image">
                <div class="absolute top-0 left-0 flex items-end w-full h-full bg-black/50 text-white p-6">
                  <div class="w-full">
                    <div class="flex items-center space-x-2">
                      <i class="uil uil-map-marker text-xl"></i>
                      <p class="text-white text-xl font-medium">Indonesia</p>
                    </div>
                    <div class="flex items-center space-x-2">
                      <i class="uil uil-map text-xl"></i>
                      <p class="text-white font-medium">20 tours</p>
                    </div>
                    <div class="mt-2">
                      <button type="button" class="px-3 py-0.5 bg-primary border border-primary text-white text-sm font-medium rounded-lg">View All Tours</button>
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
