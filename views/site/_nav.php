<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:31 AM
 */
/* @var $nav \app\models\Nav */
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SanSaulet</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about"><?=$nav->about?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services"><?=$nav->services?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio"><?=$nav->portfolio?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#license"><?=$nav->license?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact"><?=$nav->contact?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
