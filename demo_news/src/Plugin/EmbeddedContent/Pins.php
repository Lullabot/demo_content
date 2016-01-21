<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\Pins.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_pins",
 *   label = @Translation("Embedded Pins"),
 * )

 */
class Pins extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986027874/"></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986027922/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028269/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028199/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028681/"></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986046953/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986027743/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986027751/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028560/"></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028483/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028613/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028523/"></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986047849/"></a>',
      '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/317081629986028808/"></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>',
    ];
  }

}