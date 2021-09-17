<?php

namespace backend\models\search;

use common\models\Lesson;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * LessonSearch represents the model behind the search form of `common\models\Lesson`.
 */
class LessonSearch extends Lesson
{
    public $teacher;
    public $group;
    public $room;
    public $subject;
    public $lesson_time;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id', 'group_id', 'room_id', 'subject_id', 'lesson_time_id'], 'integer'],
            [['teacher', 'group', 'room', 'subject', 'lesson_time'], 'safe'],
            [['teacher', 'group', 'room', 'subject', 'lesson_time'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lesson::find()->innerJoinWith(['teacher', 'group', 'room', 'subject', 'lessonTime']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['teacher'] = [
            'asc' => ['CONCAT(`teacher`.`lastname`, " ", `teacher`.`firstname`, " ", `teacher`.`fathername`)' => SORT_ASC],
            'desc' => ['CONCAT(`teacher`.`lastname`, " ", `teacher`.`firstname`, " ", `teacher`.`fathername`)' => SORT_DESC],
        ];


        $dataProvider->sort->attributes['group'] = [
            'asc' => ['`group`.`name`' => SORT_ASC],
            'desc' => ['`group`.`name`' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['room'] = [
            'asc' => ['CONCAT(`room`.`number`, " ", `room`.`name`)' => SORT_ASC],
            'desc' => ['CONCAT(`room`.`number`, " ", `room`.`name`)' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['subject'] = [
            'asc' => ['`subject`.`name`' => SORT_ASC],
            'desc' => ['`subject`.`name`' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['lesson_time'] = [
            'asc' => ['`lesson_time`.`name`' => SORT_ASC],
            'desc' => ['`lesson_time`.`name`' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
//            'date' => $this->date,
            'teacher_id' => $this->teacher_id,
            'group_id' => $this->group_id,
            'room_id' => $this->room_id,
            'subject_id' => $this->subject_id,
            'lesson_time_id' => $this->lesson_time_id,
        ]);

        $query->andFilterWhere(['like', 'CONCAT(`teacher`.`lastname`, " ", `teacher`.`firstname`, " ", `teacher`.`fathername`)', $this->teacher])
            ->andFilterWhere(['like', '`group`.`name`', $this->group])
            ->andFilterWhere(['like', 'CONCAT(`room`.`number`, " ", `room`.`name`)', $this->room])
            ->andFilterWhere(['like', '`subject`.`name`', $this->subject])
            ->andFilterWhere(['like', '`lesson_time`.`name`', $this->lesson_time])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
