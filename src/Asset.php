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
        'css/hyde.css',
        'css/pole.css',
        'css/syntax.css',
    ];

    public $js = [
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
    ];
}
