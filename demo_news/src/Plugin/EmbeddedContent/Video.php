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
      '<video controls height="240" width="320"><source src="https://ia802605.us.archive.org/7/items/ZeldaMajorasMask_100p_655/ZeldaMajorasMask_100p_655_HQ_part01_512kb.mp4" type="video/mp4" /></video>',
      '<video controls height="360" width="320"><source src="https://ia601400.us.archive.org/31/items/taxi-turvy/taxi-turvy.ogv" type="video/ogg" /></video>',
      '<video controls height="240" width="320"><source src="https://ia800309.us.archive.org/2/items/Popeye_Nearlyweds/Popeye_Nearlyweds_512kb.mp4" type="video/mp4" /></video>',
      '<video controls height="240" width="320"><source src="https://ia800303.us.archive.org/35/items/SOLDIER/SOLDIER_64k.mp4" type="video/mp4" /></video>',
    ];
  }
}
