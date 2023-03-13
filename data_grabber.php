<?php
/*
Plugin Name: Data Grabber
Plugin URI: https://www.notsohackable.com
Description: A simple plugin that grabs data from a URL.
Version: 1.0
Author: Tom Large
Author URI: https://www.notsohackable.com
License: GPL2
*/

// Hook into the WordPress init action to register our function
add_action('init', 'my_request_function');

function my_request_function() {
  // Check if the URL parameter is set in the query string
  if (isset($_GET['url'])) {
    $url = $_GET['url'];
  }

  // Check if the URL var contains "http" or "https"
  if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
    // Make a GET request to the URL
    $response = wp_remote_get($url);

    // Check for errors
    if (is_wp_error($response)) {
      $error_message = $response->get_error_message();
	  echo "$url";
      echo "Something went wrong: $error_message";
    } else {
      // Wrap the output in a container
      echo '<div class="my-request-plugin">';
      // Do something with the response
      $body = wp_remote_retrieve_body($response);
      echo "Response: $body";
      echo '</div>';
    }
  }
}
?>
