<?php

use yii\db\Migration;

/**
 * Class m180423_124048_alter_url_column_from_product_table
 */
class m180423_124048_alter_url_column_from_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('product', 'url', $this->string()->notNull()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('product', 'url', $this->string()->notNull());
    }

}
