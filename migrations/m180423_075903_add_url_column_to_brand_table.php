<?php

use yii\db\Migration;

/**
 * Handles adding url to table `brand`.
 */
class m180423_075903_add_url_column_to_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('brand', 'url', $this->string()->notNull()->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('brand', 'url');
    }
}
