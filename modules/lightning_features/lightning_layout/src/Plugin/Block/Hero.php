<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "hero",
 *   admin_label = @Translation("Hero Image")
 * )
 */
class Hero extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<div>
  <img src="/profiles/lightning/modules/lightning_features/lightning_layout/drone1.jpg" alt="Drone racing, TNG" />
</div>
<h1>The next generation of drone racing</h1>
END
    ];
  }

}
