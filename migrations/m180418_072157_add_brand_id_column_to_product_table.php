<?php

use yii\db\Migration;

/**
 * Handles adding brand_id to table `product`.
 */
class m180418_072157_add_brand_id_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'brand_id', $this->integer(10)->after('category_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product', 'brand_id');
    }
}
