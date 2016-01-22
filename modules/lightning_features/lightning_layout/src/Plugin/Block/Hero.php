<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "hero",
 *   admin_label = @Translation("Hero Carousel")
 * )
 */
class Hero extends BlockBase {

  public function build() {
    return [
      '#attached' => [
        'library' => [
          'lightning_layout/slick',
        ],
      ],
      '#markup' => <<<END
<div>
  <img class="img-responsive" src="/profiles/lightning/modules/lightning_features/lightning_layout/drone1.jpg" alt="Drone racing, TNG" />
</div>
<div>
  <img class="img-responsive" src="/profiles/lightning/modules/lightning_features/lightning_layout/operator.jpg" alt="Drone operator" />
</div>
<div>
  <img class="img-responsive" src="/profiles/lightning/modules/lightning_features/lightning_layout/drone2.jpg" alt="The Predator. It will hide in the bushes and spring its awesomeness upon you." />
</div>
<h1>The next generation of drone racing</h1>
END
    ];
  }

}
