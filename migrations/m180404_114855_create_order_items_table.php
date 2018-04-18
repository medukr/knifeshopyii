<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_items`.
 */
class m180404_114855_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_items', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'price' => $this->float(),
            'discount_price' => $this->integer(),
            'item_qty' => $this->integer(),
            'item_sum' => $this->float(),
            'status' => $this->integer(),
//            'create_at' => $this->date()->notNull(),
//            'update_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_items');
    }
}
