<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_rating`.
 */
class m180404_132326_create_product_rating_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_rating', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'hit' => $this->integer(),
            'new' => $this->integer(),
            'sale' => $this->integer(),
            'ratting' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_rating');
    }
}
