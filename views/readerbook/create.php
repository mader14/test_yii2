<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Readerbook */

$this->title = 'Create Readerbook';
$this->params['breadcrumbs'][] = ['label' => 'Readerbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="readerbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
