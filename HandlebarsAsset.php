<?php

namespace x1\handlebars;

class HandlebarsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/handlebars';

    public $js         = [
        'handlebars.js' => 'handlebars.min.js',
    ];
}
