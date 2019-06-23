<?php
namespace derekisbusy\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/popper';
    
    public $js = [
        'js/popper.min.js',
    ];
}