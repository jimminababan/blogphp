<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'CategoryId')->dropDownList(yii\helpers\ArrayHelper::
                                    map(app\models\Category::find()->all(),'ID','CategoryName'),['prompt'=>'Pilih Category']) ?>

    <?= $form->field($model, 'Subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'DatePosted')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
