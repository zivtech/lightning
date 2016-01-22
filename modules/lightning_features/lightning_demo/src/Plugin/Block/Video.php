<?php

/**
 * @file
 * Contains \Drupal\lightning_demo\Plugin\Block\Video.
 */

namespace Drupal\lightning_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;

/**
 * @Block(
 *   id = "video",
 *   admin_label = @Translation("Video")
 * )
 */
class Video extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $markup = <<<END
<div class="video">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ZwL0t5kPf6E" frameborder="0" allowfullscreen></iframe>
</div>
END;
    return [
      '#markup' => Markup::create($markup),
    ];
  }

}
