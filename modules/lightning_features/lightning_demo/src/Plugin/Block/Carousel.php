<?php

/**
 * @file
 * Contains \Drupal\lightning_demo\Plugin\Block\Carousel.
 */

namespace Drupal\lightning_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "carousel",
 *   admin_label = @Translation("Carousel")
 * )
 */
class Carousel extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $path = \Drupal::moduleHandler()->getModule('lightning_demo')->getPath();

    $markup = <<<END
<div class="jumbotron">
<div class="slick">
  <img class="img-responsive" src="/$path/images/carousel01.jpg" alt="Carousel 1" />
  <img class="img-responsive" src="/$path/images/carousel02.jpg" alt="Carousel 2" />
  <img class="img-responsive" src="/$path/images/carousel03.jpg" alt="Carousel 3" />
</div>
<h1>Drone racing. Redefined.</h1>
</div>
END;
    return [
      '#markup' => $markup,
      '#attached' => [
        'library' => [
          'lightning_demo/carousel',
        ],
      ],
    ];
  }

}
