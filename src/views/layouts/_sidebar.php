<?php
use yii\widgets\Menu;

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

        <?= Yii::$app->get('menuManager')->render('main', [
            'class' => Menu::class,
            'options' => [
                'class' => 'sidebar-nav',
                'tag' => 'nav',
            ],
            'itemOptions' => [
                'tag' => false,
            ],
            'linkTemplate' => '<a class="sidebar-nav-item" href="{url}">{label}</a>'
        ]) ?>

        <p>
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>
            .
            <?= Yii::t('hiqdev:themes:agency', 'All rights reserved.') ?>
        </p>

    </div>
</div>