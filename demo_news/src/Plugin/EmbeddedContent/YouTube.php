<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\YouTube.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_youtube",
 *   label = @Translation("Embedded YouTube"),
 * )

 */
class YouTube extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<iframe width="420" height="315" src="https://www.youtube.com/embed/Er1pM9suxvE?autoplay=1" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="560" src="https://www.youtube.com/embed/ILLHVCHN4f8" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="820" height="315" src="https://www.youtube.com/embed/aiKRt3-FbM0?end=10" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="420" height="315" src="https://www.youtube.com/embed/qaDpjlFpbfo" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/2lupgHYiK9Q?fs=1" allowfullscreen></iframe>',
      '<iframe height="315" src="https://www.youtube.com/embed/I71AA4Vs_E8?rel=0" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="420" height="315" src="https://www.youtube.com/embed/fCDvzmcSZ6g" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/nFZGpES-St8" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="330" height="315" src="https://www.youtube.com/embed/jFZ5c6f4emo" frameborder="0"></iframe>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/-ItFjEG3LaA" frameborder="0" allowfullscreen></iframe>',
    ];
  }
}
