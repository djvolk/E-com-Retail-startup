<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Todolist */

$this->title = 'Создать дело';
$this->params['breadcrumbs'][] = ['label' => 'Список дел', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todolist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
