<?php

/**
 * @file
 * Drush integration for Demo News.
 */

/**
 * Implements hook_drush_command().
 */
function demo_news_drush_command() {
  $commands = array();
  $commands['demo-news-update-content'] = array(
    'callback' => 'drush_demo_news_update_content',
    'description' => dt('Creates demo news content.'),
    'bootstrap' => DRUSH_BOOTSTRAP_DRUPAL_FULL,
    'options' => array(),
    'arguments' => array(),
  );
  return $commands;
}

/**
 * Drush command callback for demo-tv-shows-update-content.
 *
 * @return bool
 */
function drush_demo_news_update_content() {
  demo_news_update_content();
  drush_log(dt('Updated news.'), 'success');
  return TRUE;
}
