<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\grid\GridView; ?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Dars jadvali</h1>
    </div>

    <div class="body-content">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pager' => [
                'class' => \yii\bootstrap4\LinkPager::className(),
            ],
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

                /*[
                    'class' => 'yii\grid\ActionColumn',
                    'options' => [
                        'style' => 'width: 70px'
                    ]
                ],*/
            ],
        ]); ?>

    </div>
</div>
