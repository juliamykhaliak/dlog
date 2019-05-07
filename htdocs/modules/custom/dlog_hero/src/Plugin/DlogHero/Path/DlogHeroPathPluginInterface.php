<?php

namespace Drupal\dlog_hero\Plugin\DlogHero\Path;

use Drupal\dlog_hero\Plugin\DlogHero\DlogHeroPluginInterface;

/**
 * Interface for DlogHero entity plugin type.
 */
interface DlogHeroPathPluginInterface extends DlogHeroPluginInterface {

  /**
   * Gets match paths.
   *
   * @return array
   *   An array with paths.
   */
  public function getMatchPath();

  /**
   * Gets match type.
   *
   * @return string
   *   The match type.
   */
  public function getMatchTypes();

}
