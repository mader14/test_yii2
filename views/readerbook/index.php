<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Readerbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="readerbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Readerbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'readerid',
            'bookid',
            'id',
            'authid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
