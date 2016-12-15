<?php

use hiqdev\themes\hyde\Asset;
use yii\helpers\Html;
use yii\helpers\Url;

Asset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title><?= Html::encode($this->title); ?></title>
    <?= Html::csrfMetaTags(); ?>

    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <?php
    $this->head();
    $this->registerMetaTag(
        [
            'charset' => Yii::$app->charset,
        ]
    );
    $this->registerMetaTag(
        [
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1',
        ]
    );
    $this->registerLinkTag(
        [
            'rel' => 'canonical',
            'href' => Url::canonical(),
        ]
    );
    ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('//layouts/_sidebar') ?>

<div class="content container">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
