<?php
/**
 * Created by PhpStorm.
 * User: wildwind
 * Date: 26.04.18
 * Time: 23:53
 *
 * TODO: TEST
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} {$country->name}") ?>: <?= $country->population ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>