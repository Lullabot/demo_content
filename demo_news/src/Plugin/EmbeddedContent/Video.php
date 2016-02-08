<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\Video.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_video",
 *   label = @Translation("Embedded Video"),
 * )

 */
class Video extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<iframe src="https://player.vimeo.com/video/116565603?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/116565603">What Makes Lullabot Lullabot?</a> from <a href="https://vimeo.com/lullabot">Lullabot</a> on <a href="https://vimeo.com">Vimeo</a>.</p>',
    ];
  }
}
