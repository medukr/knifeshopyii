<?php

use yii\db\Migration;

/**
 * Class m180423_090012_alter_url_column_from_brand_table
 */
class m180423_090012_alter_url_column_from_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('brand', 'url', $this->string()->notNull()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('brand', 'url', $this->string()->notNull());
    }

}
