<?php

use yii\db\Migration;

/**
 * Handles adding url to table `category`.
 */
class m180423_140435_add_url_column_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'url', $this->string()->notNull()->unique()->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('category', 'url');
    }
}
