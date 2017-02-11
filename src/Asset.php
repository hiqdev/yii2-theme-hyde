<?php
/**
 * Hyde Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-hyde
 * @package   yii2-theme-hyde
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

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
        'css/poole.css',
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
