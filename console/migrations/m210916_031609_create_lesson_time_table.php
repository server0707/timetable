<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lesson_time}}`.
 */
class m210916_031609_create_lesson_time_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lesson_time}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->unique()->notNull(),
            'time_interval' => $this->string(100)->unique()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lesson_time}}');
    }
}
