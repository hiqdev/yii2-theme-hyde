<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/_head') ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('//layouts/_sidebar') ?>

<div class="content container">
    <?= $content ?>
</div>

<?= $this->render('//layouts/_after_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
