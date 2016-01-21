<?php

/**
 * @file
 * Contains \Drupal\demo_news\Annotation\EmbeddedContent.
 */

namespace Drupal\demo_news\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Embedded content item annotation object.
 *
 * @see \Drupal\demo_news\EmbeddedContentManager
 * @see plugin_api
 *
 * @Annotation
 */
class EmbeddedContent extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
