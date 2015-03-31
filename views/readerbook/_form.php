<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Readerbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="readerbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'readerid')->textInput() ?>

    <?= $form->field($model, 'bookid')->textInput() ?>

    <?= $form->field($model, 'authid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
