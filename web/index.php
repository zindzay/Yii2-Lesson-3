<?php
define('YII_DEBUG', true);

//Включаем сам фреймвор yii (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

ini_set('display_errors', true);

//Получаем конфигурацию (2)
$config = require(__DIR__ . '/../config/web.php');
//Создаем и немедленно запускаем приложение (3)
(new yii\web\Application($config))->run();
