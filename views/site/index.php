<?php

/* @var $this yii\web\View */
/* @var $header \app\models\Header */
$this->title = 'My Yii Application';
?>

<!-- Navigation -->
<?= $this->render('_nav.php', ['nav' => $nav]) ?>

<? if ($header->background_type == 0): ?>
    <?= $this->render('_header_img.php', ['header' => $header]) ?>
<? else: ?>
    <?= $this->render('_header_video.php', ['header' => $header]) ?>
<? endif ?>

<?= $this->render('_about', ['about' => $about]) ?>

<?= $this->render('_services') ?>

<?= $this->render('_portfolio') ?>

<?= $this->render('_license') ?>

<?= $this->render('_contact.php', ['contact' => $contact]) ?>
