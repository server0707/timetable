<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\LessonTimeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lesson Times';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-time-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a('Create Lesson Time', ['create'], ['class' => 'btn btn-success']) ?>
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
            'name',
            'time_interval',

            [
                'class' => 'yii\grid\ActionColumn',
                'options' => [
                    'style' => 'width: 70px'
                ]
            ],
        ],
    ]); ?>


</div>
