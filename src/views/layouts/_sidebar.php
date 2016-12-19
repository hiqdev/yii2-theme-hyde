<?php

use hiqdev\thememanager\menus\MainMenuInterface;

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
                <!-- site description -->
            </p>
        </div>

        <?= Yii::createObject(MainMenuInterface::class)->render([
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
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
            <?= Yii::t('hiqdev:thememanager', 'All rights reserved.') ?>
        </p>

    </div>
</div>
