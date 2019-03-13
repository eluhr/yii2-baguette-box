<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eluhr\baguettebox\assets;

use yii\web\AssetBundle;

/**
 * Class BaguetteBoxAssetBundle
 * @package eluhr\sortablejs\assets
 * @author Elias Luhr <elias.luhr@gmail.com>
 */
class BaguetteBoxAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/bower/baguettebox.js/dist';

    public $js = [
        'baguetteBox.min.js'
    ];
    public $css = [
        'baguetteBox.min.css'
    ];
}
