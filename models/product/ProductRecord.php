<?php
namespace app\models\product;

use yii\db\ActiveRecord;

class ProductRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            [['name', 'price'], 'required'],
            ['name', 'string', 'max' => 256],
            ['price', 'double'],
            ['price', 'default', 'value' => 0],
            ['description', 'safe']
        ];
    }
}
