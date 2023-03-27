<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lion_City_Travel
 */

?>

<footer id="colophon">
  <div class="bg-neutral-800 text-white">
    <div class="max-w-6xl px-4 py-10 mx-auto">
      <div class="grid grid-cols-12 gap-6">
        <div class="col-span-2">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          }
          ?>
        </div>
        <div class="col-span-5 space-y-4">
          <h2 class="text-2xl font-bold">Lion City Travel Services Pte. Ltd.</h2>
          <div class="flex space-x-4">
            <i class="uil uil-home text-2xl -mt-1"></i>
            <p class="text-lg">52 Telok Blangah Road #02-10 Telok Blangah House Singapore 098829</p>
          </div>
          <div class="flex space-x-4">
            <i class="uil uil-phone text-2xl -mt-1"></i>
            <p class="text-lg">69570570 / Whatsapp: 87847500</p>
          </div>
          <div class="flex space-x-4">
            <i class="uil uil-envelope text-2xl -mt-1"></i>
            <p class="text-lg">enquiry@lioncitytravel.com</p>
          </div>
        </div>
        <div class="col-span-2 space-y-4">
          <h2 class="text-2xl font-bold">Menu</h2>
          <div class="flex flex-col space-y-2">
            <a href="#" class="hover:text-primary transition-all">Home</a>
            <a href="#" class="hover:text-primary transition-all">About Us</a>
            <a href="#" class="hover:text-primary transition-all">Contact</a>
          </div>
        </div>
        <div class="col-span-3 space-y-4">
          <h2 class="text-2xl font-bold">License</h2>
          <p class="text-xl font-bold">STB LICENSE TA03557</p>
          <h2 class="text-2xl font-bold">Follow us on</h2>
          <div class="flex flex-col space-y-2">
            <a href="#">
              <div class="flex items-center space-x-4">
                <i class="uil uil-facebook-f text-2xl"></i>
                <p>Facebook</p>
              </div>
            </a>
            <a href="#">
              <div class="flex items-center space-x-4">
                <i class="uil uil-instagram-alt text-2xl"></i>
                <p>Instagram</p>
              </div>
            </a>
            <a href="#">
              <div class="flex items-center space-x-4">
                <i class="uil uil-twitter text-2xl"></i>
                <p>Twitter</p>
              </div>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-primary py-4">
    <div class="max-w-6xl px-4 mx-auto text-center">
      <p class="text-white">Copyright ©2023 Lion City Travel Pte Ltd. All rights reserved.</p>
    </div>
  </div>
</footer>
