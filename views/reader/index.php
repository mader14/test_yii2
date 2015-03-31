<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Readers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reader-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reader', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'readerid',
            'name',
            'date',
            'date_change',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
