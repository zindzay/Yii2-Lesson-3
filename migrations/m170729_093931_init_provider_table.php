<?php

use yii\db\Migration;

class m170729_093931_init_provider_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'provider',
            [
                'id' => 'pk',
                'id_product' => 'int unique',
                'name' => 'string',
            ],
            'ENGINE=InnoDB'
        );

        $this->addForeignKey('product_provider', 'provider',
            'id_product', 'product', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('product_provider', 'provider');
        $this->dropTable('provider');

//        echo "m170729_093931_init_provider_table cannot be reverted.\n";
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
        echo "m170729_093931_init_provider_table cannot be reverted.\n";

        return false;
    }
    */
}
