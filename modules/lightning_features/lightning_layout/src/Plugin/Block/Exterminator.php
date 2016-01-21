<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "exterminator",
 *   admin_label = @Translation("Exterminator")
 * )
 */
class Exterminator extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<div>
  <img class="img-responsive" src="/profiles/lightning/modules/lightning_features/lightning_layout/exterminator.png" alt="The Exterminator" />
</div>
<h3>The Exterminator</h3>
<h4>$249.99</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ipsum at mauris semper gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sed augue metus. Curabitur condimentum elit in ultrices pellentesque.</p>
END
    ];
  }

}
