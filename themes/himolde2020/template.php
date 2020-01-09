<?php

/**
* Register custom theme functions.
 */
function himolde2020_theme() {
  return array(
    // The form ID.
    'search_block_form' => array(
      // Forms always take the form argument.
      'arguments' => array('form' => NULL),
    ),
  );
}

/**
 * Theme override for search form.
 * 
 * More info at http://www.lullabot.com/articles/modifying-forms-5-and-6
 */
function himolde2020_search_block_form($form) {
  // deactivate the title of the form
  unset($form['search_block_form']['#title']);
  // remove the submit button (if wanted)
  // unset($form['submit']);
  $output .= drupal_render($form);
  return $output;
}
?>
