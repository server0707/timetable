<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lesson".
 *
 * @property int $id
 * @property string|null $date
 * @property int $teacher_id
 * @property int $group_id
 * @property int $room_id
 * @property int $subject_id
 * @property int $lesson_time_id
 *
 * @property Group $group
 * @property LessonTime $lessonTime
 * @property Room $room
 * @property Subject $subject
 * @property Teacher $teacher
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['teacher_id', 'group_id', 'room_id', 'subject_id', 'lesson_time_id'], 'required'],
            [['teacher_id', 'group_id', 'room_id', 'subject_id', 'lesson_time_id'], 'integer'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['lesson_time_id'], 'exist', 'skipOnError' => true, 'targetClass' => LessonTime::className(), 'targetAttribute' => ['lesson_time_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'teacher_id' => 'Teacher ID',
            'group_id' => 'Group ID',
            'room_id' => 'Room ID',
            'subject_id' => 'Subject ID',
            'lesson_time_id' => 'Lesson Time ID',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * Gets query for [[LessonTime]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLessonTime()
    {
        return $this->hasOne(LessonTime::className(), ['id' => 'lesson_time_id']);
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
}
