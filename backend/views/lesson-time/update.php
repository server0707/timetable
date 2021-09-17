<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LessonTime */

$this->title = 'Update Lesson Time: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lesson Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lesson-time-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
