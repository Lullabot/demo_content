<?php

/**
 * @file
 * Contains \Drupal\demo_news\EmbeddedContentBase.
 */

namespace Drupal\demo_news;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for Embedded content plugins.
 */
abstract class EmbeddedContentBase extends PluginBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [];
  }

}
