<?php

/**
 * @file
 * Contains \Drupal\lightning_demo\Plugin\Block\LipsumRandomizer.
 */

namespace Drupal\lightning_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "ipsum",
 *   admin_label = @Translation("Random Ipsum")
 * )
 */
class LipsumRandomizer extends BlockBase {

  public function build() {
    $paragraphs = [
      'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices tempus faucibus. Cras tempus leo mauris, volutpat consectetur quam feugiat sed. Mauris hendrerit neque vel iaculis molestie. Morbi dictum finibus nisl nec viverra. Cras tempus dui non magna convallis congue. Vestibulum tempor felis id enim iaculis, sed commodo enim pulvinar. Phasellus feugiat turpis id orci placerat interdum. Nullam quis porta tellus. Curabitur elementum enim molestie felis finibus maximus. Praesent efficitur dictum dolor ut bibendum. Donec sit amet nulla eget tortor egestas porta in sit amet magna. Vestibulum ut enim purus. Pellentesque metus sem, placerat in orci in, pharetra luctus turpis. In ligula justo, malesuada vel mattis varius, semper ac dolor. Praesent in eleifend augue. Nunc sed porttitor quam.',
      'Aenean vel lorem sed nunc pharetra tempor. Etiam diam nulla, mollis eget euismod id, hendrerit nec arcu. Vestibulum sodales pretium facilisis. Sed consequat facilisis volutpat. Proin eget tortor at nisl tincidunt bibendum. Mauris ac metus a odio elementum fermentum sit amet sit amet risus. Vestibulum est nisl, pretium at condimentum ac, lacinia ultrices nisl. Aenean et rhoncus nisi. Maecenas viverra ornare tortor, a consectetur enim eleifend at. Phasellus porttitor faucibus magna id vestibulum. Praesent a tristique enim, in euismod ante. Aenean elementum volutpat ante ac porttitor. Praesent ornare, nisi in fermentum vestibulum, mauris eros faucibus lacus, in dictum lacus purus convallis justo. In dui ex, tempus vitae venenatis eleifend, faucibus vitae felis. Aliquam erat volutpat.',
      'Curabitur non lobortis magna. Cras tincidunt ipsum auctor tempus mollis. Donec ut ornare turpis. Maecenas nunc magna, consectetur quis elit a, molestie gravida mauris. Mauris faucibus lacus purus. Morbi vehicula tellus libero, convallis convallis ligula facilisis sit amet. Praesent nisi erat, convallis in blandit non, scelerisque sit amet risus. Morbi pulvinar viverra lacus. Etiam congue gravida arcu, sit amet fringilla ipsum. Duis vehicula, lacus ut dignissim lobortis, ante ligula tristique nisl, sed scelerisque velit massa tincidunt risus. Donec sodales, risus a imperdiet venenatis, nunc orci vestibulum turpis, id hendrerit justo elit vitae nunc. Nullam posuere sem nec lectus auctor, eu tincidunt augue suscipit. Nulla ullamcorper nulla placerat ultrices maximus.',
      'Duis lobortis dui id molestie sollicitudin. Nunc magna nunc, suscipit eget nisi eu, fringilla efficitur magna. Donec commodo, lorem non lobortis luctus, nisl justo dignissim ipsum, et accumsan massa mauris ac tellus. Suspendisse cursus enim in dui mattis, nec pretium enim hendrerit. Donec pretium urna semper sapien varius convallis. Maecenas aliquet convallis ultrices. Nulla vel suscipit ligula, vel consectetur neque. Sed sed felis mollis, sollicitudin nulla quis, consectetur lorem. Vivamus luctus enim porttitor venenatis blandit. Aenean vehicula eget leo in fringilla. Morbi consequat luctus suscipit. Mauris scelerisque urna vitae finibus tincidunt.',
      'Donec non iaculis lacus. Donec a vestibulum neque. Mauris quis iaculis diam. Sed luctus purus vitae ligula aliquet placerat. Aliquam ultrices elementum velit ac porttitor. Suspendisse nec condimentum justo, ut pharetra lacus. Mauris arcu elit, tristique non ligula id, molestie sodales mi.',
    ];
    return [
      '#markup' => '<p>' . $paragraphs[rand(0, 4)] . '</p>',
    ];
  }

}
