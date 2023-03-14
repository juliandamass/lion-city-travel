<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

?>
<div class="w-full bg-white rounded-lg shadow-[0_1px_4px_1px_rgba(0,0,0,0.05)] hover:shadow-[0_1px_4px_1px_rgba(0,0,0,0.15)] transition-all overflow-hidden">
  <a href="<?php echo get_post_permalink(); ?>">
    <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/placeholder.jpg'; ?>" class="w-full h-60 object-cover" alt="Post Image">
    <div class="p-4 space-y-2">
      <p class="font-bold text-lg leading-tight"><?php echo get_the_title(); ?></p>
      <div>
        <p class="text-sm text-neutral-500 whitespace-nowrap">Availability</p>
        <div class="flex items-center space-x-2">
          <i class="uil uil-calendar-alt"></i>
          <p class="text-sm"><?php echo get_field('availability') ? get_field('availability') : '-'; ?></p>
        </div>
      </div>
      <div class="flex items-end justify-between space-x-4">
        <div>
          <p class="text-sm text-neutral-500 whitespace-nowrap">Start From</p>
          <p class="text-2xl text-primary font-bold whitespace-nowrap">S$ <?php echo get_field('price') ? get_field('price') : '-'; ?></p>
        </div>
        <button type="button" class="px-4 py-1 bg-primary border border-primary text-white font-medium rounded-lg">See Details</button>
      </div>
    </div>
  </a>
</div>
