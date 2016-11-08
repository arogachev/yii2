<?php

namespace tests\js\assets;

use yii\web\AssetBundle;

class SinonAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm/sinon/lib';
    public $js = ['sinon.js'];
}
