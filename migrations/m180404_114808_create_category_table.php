<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180404_114808_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->integer(),
//            'image' => $this->string(),
            'keywords' => $this->string(),
            'description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{category}}');
    }
}
