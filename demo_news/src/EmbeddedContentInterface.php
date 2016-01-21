<?php

/**
 * @file
 * Contains \Drupal\demo_news\EmbeddedContentInterface.
 */

namespace Drupal\demo_news;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Embedded content plugins.
 */
interface EmbeddedContentInterface extends PluginInspectionInterface {

  /**
   * Return a list of emebeddable items of this type.
   */
  function getList();

}
