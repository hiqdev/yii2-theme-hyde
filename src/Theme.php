<?php

namespace hiqdev\themes\hyde;

class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'Hyde';

    public $screenshot = '@hiqdev/themes/hyde/assets/hyde.png';

    public $assets = [
        Asset::class,
    ];
}
