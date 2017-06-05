<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function events_menu_tree__primary(&$variables) {
  return '<ul class="menu-ul list-inline">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_preprocess_html().
 */
function events_preprocess_html(&$variables) {
  drupal_add_css(
    'https://fonts.googleapis.com/css?family=Open+Sans',
array('type' => 'external')
  );
}