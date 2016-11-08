<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
require(__DIR__ . '/../../../vendor/autoload.php');
require(__DIR__ . '/../../../framework/Yii.php');
Yii::setAlias('@js-tests', dirname(__DIR__));
$application = new yii\web\Application(require(__DIR__ . '/../config/config.php'));
$application->run();
