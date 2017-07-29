<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\product\Product;
use app\models\product\ProductRecord;
use app\models\product\Provider;
use app\models\product\ProviderRecord;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $records = $this->findRecordsByQuery();
        return $this->render('index', compact('records'));
    }

    private function store(Product $product)
    {
        $product_record = new ProductRecord();
        $product_record->name = $product->name;
        $product_record->price =$product->price;
        $product_record->description = $product->description;
        $product_record->save();

        foreach ($product->providers as $provider) {
            $provider_record = new ProviderRecord();
            $provider_record->name = $provider->name;
            $provider_record->id_product = $product_record->id;
            $provider_record->save();
        }
    }

    private function makeProduct(
        ProductRecord $product_record,
        ProviderRecord $provider_record
    ) {
        $name = $product_record->name;
        $price = $product_record->price;

        $product = new Product($name, $price);
        $product->description = $product_record->description;
        $product->providers[] = new Provider($provider_record->name);

        return $product;
    }
}
