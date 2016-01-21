<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "voyager",
 *   admin_label = @Translation("Voyager")
 * )
 */
class Voyager extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<div>
  <img class="img-responsive" src="/profiles/lightning/modules/lightning_features/lightning_layout/voyager.jpg" alt="The Voyager" />
</div>
<h3>The Voyager</h3>
<h4>$349.99</h4>
<p>Pellentesque non neque ac eros varius bibendum in et neque. Nam vel laoreet purus, eget sodales sem. Praesent dignissim justo sapien, nec auctor libero blandit at. In commodo nec erat eu ornare.</p>
END
    ];
  }

}
