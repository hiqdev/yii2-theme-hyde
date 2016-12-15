<?php

namespace hiqdev\themes\hyde;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/hyde/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/pole.css',
        'css/syntax.css',
        'css/hyde.css',
        'http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface',
    ];

    public $js = [
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
    ];
}
