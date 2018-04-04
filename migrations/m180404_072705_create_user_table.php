<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180404_072705_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'password' => $this->string(),
            'auth_key' => $this->string(),
            'email' => $this->string(),
            'status' => $this->integer(),
            'isAdmin' => $this->integer(),
            'create_at' => $this->date()->notNull(),
            'update_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{user}}');
    }
}
