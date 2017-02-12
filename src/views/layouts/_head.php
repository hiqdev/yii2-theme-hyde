<?php

use hiqdev\themes\hyde\Asset;
use yii\helpers\Html;
use yii\helpers\Url;

Asset::register($this);
Yii::$app->themeManager->registerAssets();

?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title><?= Html::encode($this->title) ?></title>
<?= Html::csrfMetaTags() ?>

<!-- Icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="/favicon.ico">

<?php $this->head() ?>

<?php $this->registerMetaTag([
    'charset' => Yii::$app->charset,
]) ?>
<?php $this->registerMetaTag([
    'name' => 'viewport',
    'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1',
]) ?>
<?php $this->registerLinkTag([
    'rel' => 'canonical',
    'href' => Url::canonical(),
]) ?>
