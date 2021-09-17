<?php

use yii\db\Migration;

/**
 * Class m210917_073415_create_insert_record_to_user
 */
class m210917_073415_create_insert_record_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'id' => 1,
            'username' => 'admin',
            'auth_key' => 'aPttaG1goFZZnuBNNI8dwch9FOzZPwhu',
            'password_hash' => '$2y$13$5aCtRHxbS1O/SA4bEnJao.Prhy/I9gbxmcQIDuiYN.9REdWNxWJFm',
            'email' => 'admin@admin.admin',
            'status' => '10',
            'created_at' => '1631763703',
            'updated_at' => '1631763703',
            'verification_token' => '5lZAJtwrsQOxwGFp-5fE3QgX4lyUsgAv_1631763703',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['id' => 1]);

        echo "m210917_073415_create_insert_record_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210917_073415_create_insert_record_to_user cannot be reverted.\n";

        return false;
    }
    */
}
