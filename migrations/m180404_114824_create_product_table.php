<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180404_114824_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->string(),
            'status' => $this->string(),
            'price' => $this->float(),
            'discount' => $this->integer(),
            'image' => $this->string(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'create_at' => $this->date()->notNull(),
            'update_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
