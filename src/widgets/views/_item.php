<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @var array $data
 */

use yii\helpers\Html;

$image = $data[0];
$thumbnail = $data['thumbnail'] ?? $image;

echo Html::a(Html::img($thumbnail, $data['image-options'] ?? []),$image,$data['link-options'] ?? []);