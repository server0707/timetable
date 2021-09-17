<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lesson_time".
 *
 * @property int $id
 * @property string $name
 * @property string $time_interval
 *
 * @property Lesson[] $lessons
 */
class LessonTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lesson_time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'time_interval'], 'required'],
            [['name', 'time_interval'], 'string', 'max' => 100],
            [['name'], 'unique'],
            [['time_interval'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time_interval' => 'Time Interval',
        ];
    }

    /**
     * Gets query for [[Lessons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLessons()
    {
        return $this->hasMany(Lesson::className(), ['lesson_time_id' => 'id']);
    }
}
