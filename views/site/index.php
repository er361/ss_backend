<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- Navigation -->
<?= $this->render('_nav.php',['nav' => $nav]) ?>

<?= $this->render('_header.php',['header' => $header])?>

<?= $this->render('_about',['about' => $about])?>

<?= $this->render('_services')?>

<?= $this->render('_portfolio')?>

<?= $this->render('_license') ?>

<?= $this->render('_contact.php')?>
