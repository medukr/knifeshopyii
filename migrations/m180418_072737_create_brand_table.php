<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m180418_072737_create_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->unique(),
            'keywords' => $this->string(100),
            'description' => $this->string(),
            'status' => $this->integer(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('brand');
    }
}
