<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_contacts`.
 */
class m180404_113103_create_user_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{user_contacts}}', array(
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'full_name' => $this->string(),
            'phone' => $this->string(),
            'country' => $this->string(),
            'region' => $this->string(),
            'city' => $this->string(),
            'street' => $this->string(),
            'house' => $this->string(),
            'apartment' => $this->string(),
            'image' => $this->string(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{user_contacts}}');
    }
}
