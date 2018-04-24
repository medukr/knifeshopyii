<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property string $name
 * @property string $content
 * @property string $status
 * @property double $price
 * @property int $discount
 * @property string $image
 * @property string $keywords
 * @property string $description
 * @property string $create_at
 * @property string $update_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function geBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'brand_id', 'discount'], 'integer'],
            [['price'], 'number'],
            [['create_at'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'content', 'status', 'image', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'name' => 'Name',
            'content' => 'Content',
            'status' => 'Status',
            'price' => 'Price',
            'discount' => 'Discount',
            'image' => 'Image',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
