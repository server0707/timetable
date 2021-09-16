<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room}}`.
 */
class m210916_031419_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->unique()->notNull(),
            'number' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }
}
