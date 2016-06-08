<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $model app\models\Todolist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="todolist-form col-lg-6">

    <?php $form = ActiveForm::begin(); ?>      
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>    
    <?= $form->field($model->todolistdesc, 'description')->textArea(['rows' => 6]) ?>

    <?php if (!$model->isNewRecord) : ?>
        <div class="row" style="margin-bottom: 10px;"> 
            <div class="col-xs-6"> 
                <strong>Создана:</strong> <?= $model->created_at ?>
            </div>
            <div class="col-xs-6"> 
                <strong>Изменена:</strong> <?= $model->updated_at ?>    
            </div>
        </div> 
    <?php endif; ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
