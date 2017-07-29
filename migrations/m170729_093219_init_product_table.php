<?php

use yii\db\Migration;

class m170729_093219_init_product_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'product',
            [
                'id' => 'pk',
                'name' => 'string',
                'price' => 'double',
                'description' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    public function safeDown()
    {
        $this->dropTable('product');

//        echo "m170729_093219_init_product_table cannot be reverted.\n";
//
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170729_093219_init_product_table cannot be reverted.\n";

        return false;
    }
    */
}
