<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
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
            'firstname',
            'lastname',
            'fathername',
            [
                'attribute' => 'sex',
                'value' => function ($model) {
                    return ($model->sex == 0) ? 'Erkak' : 'Ayol';
                },
                'filter' => ['Erkak', 'Ayol'],
                'options' => [
                    'style' => 'width: 130px'
                ]
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
