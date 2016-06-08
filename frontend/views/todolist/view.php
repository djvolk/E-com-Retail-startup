<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Todolist */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список дел', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todolist-view">
    
    <p class="text-right">
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверены, что хотите удалить запись?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron" style="text-align: left;"><?= $model->todolistdesc->description ?></div>

    <div class="row"> 
        <div class="col-sm-3 col-xs-6"> 
            <strong>Создана:</strong> <?= $model->created_at ?>
        </div>
        <div class="col-sm-3 col-xs-6"> 
            <strong>Изменена:</strong> <?= $model->updated_at ?>    
        </div>
    </div>     

</div>
