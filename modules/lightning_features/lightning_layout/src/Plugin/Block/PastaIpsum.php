<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "pasta_ipsum",
 *   admin_label = @Translation("Pasta Ipsum")
 * )
 */
class PastaIpsum extends BlockBase {

  public function build() {
    return [
      '#markup' => 'Pasta ipsum dolor sit amet tagliatelle casarecce spaghetti rotini pasta al ceppo scialatelli elicoidali mezzelune spaghettoni taglierini. Orzo ditalini scialatelli acini di pepe trenne pennoni elicoidali quadrefiore tuffoli penne lisce rigatoncini. Taglierini rigatoncini penne lisce gomito lasagnotte maccheroncelli fusilli farfalloni.',
    ];
  }

}
