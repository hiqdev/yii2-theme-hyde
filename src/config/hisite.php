<?php
/**
 * Hyde Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-hyde
 * @package   yii2-theme-hyde
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'hyde' => [
                'class' => \hiqdev\themes\hyde\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:hyde' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/hyde/messages',
                ],
            ],
        ],
    ],
];
