<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Authorbook */

$this->title = 'Create Authorbook';
$this->params['breadcrumbs'][] = ['label' => 'Authorbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
