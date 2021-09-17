<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lesson */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lesson-view">

    <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
//            'id',
            'date',
            [
                'attribute' => 'teacher',
                'value' => substr($model->teacher->firstname, 0, 1) . '. ' . substr($model->teacher->fathername, 0, 1) . '. ' . $model->teacher->lastname,
            ],
            [
                'attribute' => 'group',
                'value' => $model->group->name
            ],
            [
                'attribute' => 'room',
                'value' => $model->room->number . ' ' . $model->room->name,
            ],
            [
                'attribute' => 'subject',
                'value' => $model->subject->name
            ],
            [
                'attribute' => 'lesson_time',
                'value' => $model->lessonTime->name
            ],
        ],
    ]) ?>

</div>
