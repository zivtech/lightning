<?php

namespace Drupal\lightning_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "slipsum",
 *   label = @Translation("Samuel L. Ipsum")
 * )
 */
class Slipsum extends BlockBase {

  public function build() {
    return [
      '#markup' => 'The lysine contingency - it\'s intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can\'t manufacture the amino acid lysine. Unless they\'re continually supplied with lysine by us, they\'ll slip into a coma and die.',
    ];
  }

}
