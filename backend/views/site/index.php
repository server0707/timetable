<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 text-center bg-gray">
                <h2>O'qituvchilar soni</h2>

                <h2><?= \common\models\Teacher::find()->count() ?></h2>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::toRoute(['/teacher']) ?>">O'qituvchilar &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center bg-gray">
                <h2>Guruhlar soni</h2>

                <h2><?= \common\models\Group::find()->count() ?></h2>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::toRoute(['/group']) ?>">Guruhlar &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center bg-gray">
                <h2>Xonalar soni</h2>

                <h2><?= \common\models\Room::find()->count() ?></h2>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::toRoute(['/room']) ?>">Xonalar &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center bg-gray">
                <h2>Fanlar soni</h2>

                <h2><?= \common\models\Subject::find()->count() ?></h2>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::toRoute(['/subject']) ?>">Fanlar &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
