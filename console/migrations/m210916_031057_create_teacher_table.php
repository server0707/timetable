<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m210916_031057_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(100)->notNull(),
            'lastname' => $this->string(100)->notNull(),
            'fathername' => $this->string(100),
            'sex' => $this->integer(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teacher}}');
    }
}
