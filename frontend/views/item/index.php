<?php

use app\models\Item;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ItemSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-5 row">
    <?php foreach ($items as $item) { ?>
    <div class="card mx-2 mb-3" style="width: 18rem;">
    <img src="<?= Yii::getAlias('@web/') . 'uploads' . $item->image ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $item->name ?></h5>
            <p class="card-text"><?= $item->price ?></p>
            <<p>
        <?php if (Yii::$app->user->isGuest) { ?>
            <!-- User is not logged in -->
            <?= Html::a('Order Item', ['customer/login'], ['class' => 'btn btn-success']) ?>
        <?php } else { ?>
            <!-- User is logged in -->
            <?= Html::a('Order Item', ['customer/order', 'id' => $item->id], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>
        </div>
    </div>
<?php } ?>

</div>


</div>
