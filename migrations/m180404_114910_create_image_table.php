<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m180404_114910_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{image}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(),
            'file_path' => $this->string(),
            'isMain' => $this->integer(),
            'name' => $this->string(),
            'alias' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{image}}');
    }
}
