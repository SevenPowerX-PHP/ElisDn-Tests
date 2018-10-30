<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181101_141240_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
	        'username' => $this->string()->notNull(),
	        'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
