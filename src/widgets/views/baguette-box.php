<?php

use eluhr\baguettebox\widgets\BaguetteBox;
use yii\helpers\Html;
use yii\web\View;

/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @var array $items
 * @var array $options
 * @var View $this
 * @var BaguetteBox $widget
 */
$widget = $this->context;

echo Html::beginTag('div', $options);
foreach ($items as $data) {
    echo $this->render('_item', ['data' => (array)$data]);
}
echo Html::endTag('div');