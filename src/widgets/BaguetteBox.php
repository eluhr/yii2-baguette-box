<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eluhr\baguettebox\widgets;


use eluhr\baguettebox\assets\BaguetteBoxAssetBundle;
use yii\base\Widget;
use yii\helpers\Json;

/**
 * @package eluhr\baguettebox\widgets
 * @author Elias Luhr <e.luhr@herzogkommunikation.de>
 *
 * --- PROPERTIES ---
 *
 * @property array $items
 * @property array $options
 * @property array $plugin_options
 *
 * --- EXAMPLE ---
 */
class BaguetteBox extends Widget
{

    /**
     * Items for gallery
     * Either array of strings or array
     *
     * String: Path to image
     *
     * Array:
     * 0                => path to image
     * image-options    => Options / attributes for image
     * link-options     => Options / attributes for link
    */
    public $items = [];

    /**
     * Options / attributes for baguette box wrapper
    */
    public $options = [];

    /**
     * JS options for baguetteBox library
    */
    public $plugin_options = [];

    public function init()
    {
        $this->options['id'] = $this->options['id'] ?? $this->id;
        parent::init();
    }

    /**
     * @return string|void
     */
    public function run()
    {
        $this->registerAssets();
        return $this->render('baguette-box', ['items' => $this->items, 'options' => $this->options]);
    }

    private function registerAssets()
    {
        // register only if at least one item is in list of items
        if (!empty((array)$this->items)) {
            BaguetteBoxAssetBundle::register($this->view);

            $baguette_box_element_id = $this->options['id'];

            if (!empty($this->plugin_options)) {
                $baguette_box_options = Json::encode($this->plugin_options);
            } else {
                $baguette_box_options = '{}';
            }

            $this->view->registerJs(<<<JS
baguetteBox.run("#{$baguette_box_element_id}", {$baguette_box_options});
JS
            );
        }
    }
}