<style>
    <? foreach ($data as $index => $content): ?>
        .main-content__article:nth-child(<?= $index + 1 ?>) {
background: url(/binary_back/public/imgs/<?= $content['img_path'] ?>) no-repeat center center/cover;
}
    <? endforeach; ?>
</style>
    <section class="main-content carousel">
    <?php foreach ($data as $index => $content): ?>
        <div class="main-content__article carousel__item <?= $index === 0 ? 'active' : '' ?>">
            <h1><?= $content['main_content_title'] ?></h1>
            <p><?= $content['main_content_content'] ?></p>
            <a class="follow_button" href="discord">Nous Rejoindre</a>
            
        </div>
    <?php endforeach; ?>

    <!-- Composents du carousel -->
    <img src="<?=ROOT?>public/img/arrow_back.svg" alt="fléche gauche du carousel" class="back_arrow"> 
    <img src="<?ROOT?>public/img/arrow_forward.svg" alt="fléche droite du carousel" class="forward_arrow">
    <div class="dots">
        <?php foreach ($data as $index => $content): ?>
            <div class="dot <?= $index === 0 ? 'active' : '' ?>"></div>
        <?php endforeach; ?>
    </div>
</section>
<script src="<?=ROOT?>public/script/carousel.js"></script>