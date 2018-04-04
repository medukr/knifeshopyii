<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180404_114837_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{order}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'qty' => $this->integer(),
            'sum' => $this->integer(),
            'discount' => $this->integer(),
            'status' => $this->integer(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'create_at' => $this->date()->notNull(),
            'update_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{order}}');
    }
}
