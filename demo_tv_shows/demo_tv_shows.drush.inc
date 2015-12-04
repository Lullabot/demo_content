<?php

/**
 * @file
 * Drush integration for Demo TV Shows.
 */

/**
 * Implements hook_drush_command().
 */
function demo_tv_shows_drush_command() {
  $commands = array();
  $commands['demo-tv-shows-create-content'] = array(
    'callback' => 'drush_demo_tv_shows_create_content',
    'description' => dt('Creates demo TV show, season, and episode content.'),
    'bootstrap' => DRUSH_BOOTSTRAP_DRUPAL_FULL,
    'options' => array(),
    'arguments' => array(),
  );
  return $commands;
}

/**
 * Drush command callback for demo-tv-shows-create-content.
 *
 * @return bool
 */
function drush_demo_tv_shows_create_content() {
  // TODO
  drush_log(dt('Created shows, seasons and episodes.'), 'success');
  return TRUE;
}
