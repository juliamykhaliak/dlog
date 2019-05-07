<?php

namespace Drupal\dlog_hero\Plugin\DlogHero;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Common interface for all DlogHero plugin types.
 */
interface DlogHeroPluginInterface extends PluginInspectionInterface {

  /**
   * Gets plugin status.
   *
   * @return bool
   *   The plugin status.
   */
  public function getEnabled();

  /**
   * Gets plugin weight.
   *
   * @return int
   *   The plugin weight.
   */
  public function getWeight();

  /**
   * Gets hero title.
   *
   * @return string
   *   The title.
   */
  public function getHeroTitle();

  /**
   * Gets hero subtitle.
   *
   * @return string
   *   The subtitle.
   */
  public function getHeroSubtitle();

  /**
   * Gets hero image URI.
   *
   * @return string
   *   The URI image.
   */
  public function getHeroImage();

  /**
   * Gets hero video URI's.
   *
   * An array with link to the same video in different types.
   *
   * Keys of array is represent their types and value is file URL.
   *
   * @code
   * return [
   *   'video/mp4' => 'big-buck-bunny.mp4',
   *   'video/ogg' => 'big-buck-bunny.ogg',
   *   'video/webm' => 'big-buck-bunny.webm',
   * ];
   * @endcode
   *
   * @return array
   *   An array with video URI's.
   */
  public function getHeroVideo();

}
