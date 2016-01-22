<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "racing_video",
 *   admin_label = @Translation("FPV Racing Video")
 * )
 */
class RacingVideo extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<iframe width="560" height="315" src="https://www.youtube.com/embed/u6s5144AYO8" frameborder="0" allowfullscreen></iframe>
END
    ];
  }

}
