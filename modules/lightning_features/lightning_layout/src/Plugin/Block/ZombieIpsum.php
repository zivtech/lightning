<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "zombie_ipsum",
 *   admin_label = @Translation("Zombie Ipsum")
 * )
 */
class ZombieIpsum extends BlockBase {

  public function build() {
    return [
      '#markup' => <<<END
<h5>Zombies reversus ab inferno</h5>
<p>nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?</p>
<h5>De Apocalypsi undead dictum mauris</h5>
<p>Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium.</p>
<h5>Qui offenderit rapto, terribilem incessu</h5>
<p>The voodoo sacerdos suscitat mortuos comedere carnem. Search for solum oculi eorum defunctis cerebro.</p>
<h5>Nescio an Undead zombies</h5>
<p>Sicut malus movie horror. Cum horribilem resurgere de sepulcris creaturis, sicut de iride et serpens.</p>
END
    ];
  }

}
