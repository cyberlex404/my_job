/**
 * @file
 * Contains \Drupal\my_module\Plugin\Block\NodeMenuBlock.
 */

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * @Block(
 *   id = "node_menu_block",
 *   admin_label = @Translation("Node Menu Block"),
 *   category = @Translation("My Group"),
 *   context = {
 *     "node" = @ContextDefinition(
 *       "entity:node",
 *       label = @Translation("Current Node")
 *     )
 *   }
 * )
 */
class NodeMenuBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = $this->getContextValue('node');
    $nid_fld = $node->nid->getValue();
    $nid = $nid_fld[0]['value'];

    $markup = '';
    $links = ['entity.node.edit_form' => 'Edit', 'entity.node.delete_form' => 'Delete', ];
    foreach($links as $rout=>$text) {
      $url = Url::fromRoute($rout, array('node' => $nid));
      $link = Link::fromTextAndUrl(t($text), $url)->toRenderable();
      $link['#attributes'] = array('class' => array('button', 'button-action'));
      $markup .= render($link).' ';
    }

    $block = [
      '#type' => 'markup',
      '#markup' => $markup,
    ];
    return $block;
  }

}
