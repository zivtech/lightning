<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "sloth",
 *   label = @Translation("Baby Sloth!")
 * )
 */
class Sloth extends BlockBase {

  public function build() {
    $path = \Drupal::moduleHandler()->getModule('lightning_layout')->getPath();
    return [
      '#markup' => '<img src="/' . $path . '/sloth.jpg" />',
    ];
  }

}
