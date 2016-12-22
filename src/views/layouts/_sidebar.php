<?php

use hiqdev\thememanager\menus\AbstractMainMenu;
use hiqdev\thememanager\widgets\CopyrightYears;

?>
<div class="sidebar">
    <div class="container sidebar-sticky">
        <div class="sidebar-about">
            <h1>
                <a href="/">
                    <?= Yii::$app->name ?>
                </a>
            </h1>
            <p class="lead">
                <?= isset(Yii::$app->params['site.description']) ? Yii::$app->params['site.description'] : '' ?>
            </p>
        </div>

        <?= AbstractMainMenu::widget([], [
            'options' => [
                'class' => 'sidebar-nav',
                'tag' => 'nav',
            ],
            'itemOptions' => [
                'tag' => false,
            ],
            'linkTemplate' => '<a class="sidebar-nav-item" href="{url}">{label}</a>',
        ]) ?>

        <p>
            &copy; <?= CopyrightYears::widget() ?>.
            <?= Yii::t('hiqdev:thememanager', 'All rights reserved.') ?>
        </p>

    </div>
</div>
