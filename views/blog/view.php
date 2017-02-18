<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'category.CategoryName',
            'Subject',
            'DatePosted',

        ],
    ]) ?>

</div>



<h1>Comment</h1>


    <div class="comment-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($newcomment, 'Name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($newcomment, 'Comment')->textarea(['rows' => 6]) ?>


        <div class="form-group">
            <?= Html::submitButton($newcomment->isNewRecord ? 'Create' : 'Update', ['class' => $newcomment->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>



<?php foreach ($comment as $cmd) : ?>

<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td><?= $cmd->Name ?></td>
    </tr>
    <tr>
        <td>Comment</td>
        <td><?= $cmd->Comment ?></td>
    </tr>
    <tr>
        <td>DatePosted</td>
        <td><?= $cmd->DatePosted ?></td>
    </tr>
</table>

<?php endforeach; ?>