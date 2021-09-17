<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lesson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->input('date') ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Teacher::find()->all(), 'id', function ($data) {
        return $data->firstname . ' ' . $data->lastname . ' ' . $data->fathername;
    }), ['prompt' => '']) ?>

    <?= $form->field($model, 'group_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Group::find()->all(), 'id', 'name'), ['prompt' => '']) ?>

    <?= $form->field($model, 'room_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Room::find()->all(), 'id', function ($data) {
        return $data->number . ' (' . $data->name . ')';
    }), ['prompt' => '']) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Subject::find()->all(), 'id', 'name'), ['prompt' => '']) ?>

    <?= $form->field($model, 'lesson_time_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\LessonTime::find()->all(), 'id', 'name'), ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
