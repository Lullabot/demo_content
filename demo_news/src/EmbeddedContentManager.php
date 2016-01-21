<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContentManager.
 */

namespace Drupal\demo_news;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Provides the Embedded content plugin manager.
 */
class EmbeddedContentManager extends DefaultPluginManager {

  /**
   * Constructor for EmbeddedContentManager objects.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/EmbeddedContent', $namespaces, $module_handler, 'Drupal\demo_news\EmbeddedContentInterface', 'Drupal\demo_news\Annotation\EmbeddedContent');

    $this->alterInfo('demo_news_embedded_content_info');
    $this->setCacheBackend($cache_backend, 'demo_news_embedded_content_plugins');
  }

  /**
   * Return a random embedded item.
   *
   * @param $type:
   *   The type of item to return. If not provided a random type will be selected.
   * @param return
   *   Return a random embedded content item.
   */
  public function getRandomItem($type = NULL) {
    if (empty($type)) {
      $type = $this->getRandomType();
    }
    $instance = $this->createInstance($type);
    $items = $instance->getList();
    $item = $this->getRandomFromList($items);
    return $item;
  }

  /**
   * Return a random embedded content type.
   */
  public function getRandomType() {
    $types = array_keys($this->getDefinitions());
    return $this->getRandomFromList($types);
  }

  /**
   * Return a random item from a list of items.
   */
  public function getRandomFromList($items) {
    $index = mt_rand(0, count($items) - 1);
    return $items[$index];
  }

}
