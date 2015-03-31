<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Authorbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authorbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'authid')->textInput() ?>

    <?= $form->field($model, 'bookid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
