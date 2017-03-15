<?php

$fullName = $this->params['fullName'];

?>
<?php $this->beginContent('@hiqdev/themes/hyde/views/layouts/main.php') ?>

<div style="float:right;font-size:37px">
    <a href="https://github.com/<?= $fullName ?>" style="height:20px">
        <img src="https://img.shields.io/github/stars/<?= $fullName ?>.svg?style=social&label=GitHub"/>
    </a>
</div>

<?= $content ?>

<?php $this->endContent() ?>
