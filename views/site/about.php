<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'O нас';
?>
<div class="container">
    <div class="logo-container">
        <img src="/web/images/logo.jpg" style="height: 500px; width: 700px; border-radius: 15px;" alt="logo">
    </div>
    <h3 style="text-align: center; margin-top: 1rem; font-size: 4rem">Комиксы изменят мир!</h3>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner mt-5">
            <? foreach ($goods as $good) { ?>
            <div class="carousel-item <?= array_search($good, $goods) == 0 ? "active" : "" ?>">
                <img src="/web/images/<?=$good["img"]?>" class="d-block" style="width: 300px; height: 500px; margin: 0 auto" alt="good">
                <div class="carousel-caption d-none d-md-block block-text">
                    <h3><?=$good["title"]?></h3>
                    <p>Price: <?=$good["price"]?></p>
                </div>
            </div>
            <? } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
