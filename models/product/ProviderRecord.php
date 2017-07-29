<?php
namespace app\models\product;

use yii\db\ActiveRecord;

class ProviderRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'provider';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            [['id_product', 'name'], 'required'],
            ['id_product', 'number'],
            ['name', 'string', 'max' => 256]
        ];
    }
}
