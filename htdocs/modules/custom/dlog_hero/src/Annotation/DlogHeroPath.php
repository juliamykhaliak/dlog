<?php

namespace Drupal\dlog_hero\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * DlogHeroPath annotation.
 *
 * @Annotation
 */
class DlogHeroPath extends Plugin {

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
   * The paths to match.
   *
   * An array with paths to limit this plugin execution. Can contain the
   * wildcard (*) and Drupal placeholders such as <front>.
   *
   * @var array
   */
  public $match_path;

  /**
   * The match type for match_path.
   *
   * Value can be:
   *  - listed: (default) Shows only at paths of match_path.
   *  - unlisted: Shows at all paths, except those listed in match_path.
   *
   * @var string
   */
  public $match_types;

  /**
   * The weight of plugin.
   *
   * Plugin with higher weight will be used.
   *
   * @var int
   */
  public $weight;

}
