<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lesson}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%teacher}}`
 * - `{{%group}}`
 * - `{{%room}}`
 * - `{{%subject}}`
 * - `{{%lesson_time}}`
 */
class m210916_032229_create_lesson_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lesson}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'teacher_id' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
            'room_id' => $this->integer()->notNull(),
            'subject_id' => $this->integer()->notNull(),
            'lesson_time_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `teacher_id`
        $this->createIndex(
            '{{%idx-lesson-teacher_id}}',
            '{{%lesson}}',
            'teacher_id'
        );

        // add foreign key for table `{{%teacher}}`
        $this->addForeignKey(
            '{{%fk-lesson-teacher_id}}',
            '{{%lesson}}',
            'teacher_id',
            '{{%teacher}}',
            'id',
            'CASCADE'
        );

        // creates index for column `group_id`
        $this->createIndex(
            '{{%idx-lesson-group_id}}',
            '{{%lesson}}',
            'group_id'
        );

        // add foreign key for table `{{%group}}`
        $this->addForeignKey(
            '{{%fk-lesson-group_id}}',
            '{{%lesson}}',
            'group_id',
            '{{%group}}',
            'id',
            'CASCADE'
        );

        // creates index for column `room_id`
        $this->createIndex(
            '{{%idx-lesson-room_id}}',
            '{{%lesson}}',
            'room_id'
        );

        // add foreign key for table `{{%room}}`
        $this->addForeignKey(
            '{{%fk-lesson-room_id}}',
            '{{%lesson}}',
            'room_id',
            '{{%room}}',
            'id',
            'CASCADE'
        );

        // creates index for column `subject_id`
        $this->createIndex(
            '{{%idx-lesson-subject_id}}',
            '{{%lesson}}',
            'subject_id'
        );

        // add foreign key for table `{{%subject}}`
        $this->addForeignKey(
            '{{%fk-lesson-subject_id}}',
            '{{%lesson}}',
            'subject_id',
            '{{%subject}}',
            'id',
            'CASCADE'
        );

        // creates index for column `lesson_time_id`
        $this->createIndex(
            '{{%idx-lesson-lesson_time_id}}',
            '{{%lesson}}',
            'lesson_time_id'
        );

        // add foreign key for table `{{%lesson_time}}`
        $this->addForeignKey(
            '{{%fk-lesson-lesson_time_id}}',
            '{{%lesson}}',
            'lesson_time_id',
            '{{%lesson_time}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%teacher}}`
        $this->dropForeignKey(
            '{{%fk-lesson-teacher_id}}',
            '{{%lesson}}'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            '{{%idx-lesson-teacher_id}}',
            '{{%lesson}}'
        );

        // drops foreign key for table `{{%group}}`
        $this->dropForeignKey(
            '{{%fk-lesson-group_id}}',
            '{{%lesson}}'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            '{{%idx-lesson-group_id}}',
            '{{%lesson}}'
        );

        // drops foreign key for table `{{%room}}`
        $this->dropForeignKey(
            '{{%fk-lesson-room_id}}',
            '{{%lesson}}'
        );

        // drops index for column `room_id`
        $this->dropIndex(
            '{{%idx-lesson-room_id}}',
            '{{%lesson}}'
        );

        // drops foreign key for table `{{%subject}}`
        $this->dropForeignKey(
            '{{%fk-lesson-subject_id}}',
            '{{%lesson}}'
        );

        // drops index for column `subject_id`
        $this->dropIndex(
            '{{%idx-lesson-subject_id}}',
            '{{%lesson}}'
        );

        // drops foreign key for table `{{%lesson_time}}`
        $this->dropForeignKey(
            '{{%fk-lesson-lesson_time_id}}',
            '{{%lesson}}'
        );

        // drops index for column `lesson_time_id`
        $this->dropIndex(
            '{{%idx-lesson-lesson_time_id}}',
            '{{%lesson}}'
        );

        $this->dropTable('{{%lesson}}');
    }
}
