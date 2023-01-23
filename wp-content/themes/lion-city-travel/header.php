<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lion_City_Travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700&display=swap">

  <!-- icons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lion-city-travel' ); ?></a>

	<header id="masthead" class="site-header">
    <div class="bg-primary">
      <div class="container px-4 py-1 mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="uil uil-phone text-white"></i>
            <p class="text-sm text-white">+65 1234 1234</p>
          </div>
          <div class="flex items-center space-x-1">
            <i class="uil uil-envelope text-white"></i>
            <p class="text-sm text-white">enquiry@domain.com</p>
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

		<div class="container px-4 py-4 mx-auto flex items-center justify-between">
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
