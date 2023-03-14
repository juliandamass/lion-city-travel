<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

?>

<header id="masthead">

  <div class="bg-primary">
    <div class="max-w-6xl px-4 py-1 mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-1">
          <i class="uil uil-phone text-white"></i>
          <p class="text-sm text-white">69570570</p>
        </div>
        <div class="flex items-center space-x-1">
          <i class="uil uil-envelope text-white"></i>
          <p class="text-sm text-white">enquiry@lioncitytravel.com</p>
        </div>
      </div>
      <div class="flex items-center space-x-2">
        <a href="#">
          <i class="uil uil-whatsapp-alt text-xl text-white"></i>
        </a>
        <a href="#">
          <i class="uil uil-facebook text-xl text-white"></i>
        </a>
        <a href="#">
          <i class="uil uil-instagram-alt text-xl text-white"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="max-w-6xl px-4 py-4 mx-auto flex items-center justify-between">
    <div class="site-branding">
      <?php
        if (has_custom_logo()) :
          the_custom_logo();
        else :
          if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
          else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
          endif;
          $lion_city_travel_description = get_bloginfo( 'description', 'display' );
          if ( $lion_city_travel_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $lion_city_travel_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
      <?php
          endif;
        endif;
      ?>
    </div>

    <nav id="site-navigation" class="main-navigation">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
      ?>
    </nav>
  </div>

</header>
