<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\Image.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_image",
 *   label = @Translation("Embedded Image"),
 * )

 */
class Image extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<img src="https://images.unsplash.com/photo-1451303688941-9e06d4b1277a" width="200" alt="deer">',
      '<img src="https://images.unsplash.com/photo-1451186859696-371d9477be93" width="400" alt="map">',
    ];
  }
}
