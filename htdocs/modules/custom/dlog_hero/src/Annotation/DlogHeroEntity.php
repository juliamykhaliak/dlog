<?php

namespace Drupal\dlog_hero\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * DlogHeroEntity annotation.
 *
 * @Annotation
 */
class DlogHeroEntity extends Plugin {

  /**
   * The Plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The Plugin status.
   *
   * By default all plugins are enabled and this value is set to TRUE. You can
   * set it to FALSE, to temporary disable plugin.
   *
   * @var bool
   */
  public $enabled;

  /**
   * The entity type id.
   *
   * @var string
   */
  public $entity_type;

  /**
   * The entity bundle.
   *
   * An array of bundles of entity_type on which pages this plugin will be
   * available. Supports for wildcard (*) to match all entity type bundles.
   *
   * E.g. {"news", "page"}
   *
   * @var array
   */
  public $entity_bundle;

  /**
   * The weight of plugin.
   *
   * Plugin with higher weight will be used.
   *
   * @var int
   */
  public $weight;

}
