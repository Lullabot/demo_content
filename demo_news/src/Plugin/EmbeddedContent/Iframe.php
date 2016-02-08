<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\Iframe.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_iframe",
 *   label = @Translation("Embedded Iframe"),
 * )

 */
class Iframe extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<iframe src="http://www.lullabot.com"></iframe>',
      '<iframe src="https://www.gnome.org/" width="200" height="200"></iframe>',
      '<iframe src="http://sfconservancy.org/"></iframe>',
      '<iframe src="https://player.vimeo.com/video/125251323" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/125251323">Jeff Robbins - Lessons Learned From Rock &amp; Roll - ConvergeSE 2015</a> from <a href="https://vimeo.com/lullabot">Lullabot</a> on <a href="https://vimeo.com">Vimeo</a>.</p>',
      '<iframe src="https://drupalize.me" width="400" height="300"></iframe>',
      '<iframe src="http://www.fsf.org" width="400" height="300"></iframe>',
    ];
  }
}
