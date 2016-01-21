<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "annihiliator",
 *   admin_label = @Translation("Annihilator")
 * )
 */
class Annihilator extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<div>
  <img src="/profiles/lightning/modules/lightning_features/lightning_layout/annihilator.jpg" alt="The Annihilator" />
</div>
<h3>The Annihilator</h3>
<h4>$549.99</h4>
<p>Maecenas eleifend, turpis et faucibus gravida, magna sapien molestie magna, blandit pretium dolor arcu ut elit. Donec quis feugiat odio. Nullam porttitor tortor id nunc volutpat ornare. Sed elementum justo id luctus facilisis.</p>
END
    ];
  }

}
