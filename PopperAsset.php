<?php
namespace derekisbusy\popper;

use yii\web\AssetBundle;

class PopperAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/popper';
    
    public $js = [
        'js/popper.min.js',
    ];
}