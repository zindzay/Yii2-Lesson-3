<?php
namespace app\models\product;

class Provider
{
    /** @var string */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
