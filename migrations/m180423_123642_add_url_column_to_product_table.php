<?php

use yii\db\Migration;

/**
 * Handles adding url to table `product`.
 */
class m180423_123642_add_url_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'url', $this->string()->notNull()->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product', 'url');
    }
}
