<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\LessonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lessons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-index">

    <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a('Create Lesson', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => [
                    'style' => 'width: 40px'
                ]
            ],

//            'id',
            'date',
            [
                'attribute' => 'teacher',
                'value' => function ($model) {
                    return substr($model->teacher->firstname, 0, 1) . '. ' . substr($model->teacher->fathername, 0, 1) . '. ' . $model->teacher->lastname;
                }
            ],
            [
                'attribute' => 'group',
                'value' => function ($model) {
                    return $model->group->name;
                }
            ],
            [
                'attribute' => 'room',
                'value' => function ($model) {
                    return $model->room->number . ' (' . $model->room->name . ')';
                }
            ],
            [
                'attribute' => 'subject',
                'value' => function ($model) {
                    return $model->subject->name;
                }
            ],
            [
                'attribute' => 'lesson_time',
                'value' => function ($model) {
                    return $model->lessonTime->name;
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'options' => [
                    'style' => 'width: 70px'
                ]
            ],
        ],
    ]); ?>


</div>
