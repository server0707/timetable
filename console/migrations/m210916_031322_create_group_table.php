<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group}}`.
 */
class m210916_031322_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->unique()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group}}');
    }
}
