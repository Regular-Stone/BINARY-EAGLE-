<style>
    <? foreach ($data['home'] as $index => $content): ?>
        .main-content__article:nth-child(<?= $index + 1 ?>) {
background: url(/binary_back/public/imgs/<?= $content['img_path'] ?>) no-repeat center center/cover;
}
    <? endforeach; ?>
</style>
</header>
<section class="main-content carousel">
    <?php foreach ($data['home'] as $index => $content): ?>
        <div class="main-content__article carousel__item <?= $index === 0 ? 'active' : '' ?>">
            <h1><?= $content['main_content_title'] ?></h1>
            <p><?= $content['main_content_content'] ?></p>
            <a class="follow_button" href="discord">Nous Rejoindre</a>
            
        </div>
    <?php endforeach; ?>
    

    <!-- Composents du carousel -->
    <img src="/binary_back/public/imgs/arrow_back.svg" alt="fléche gauche du carousel" class="back_arrow"> 
    <img src="/binary_back/public/imgs/arrow_forward.svg" alt="fléche droite du carousel" class="forward_arrow">
    <div class="dots">
        <?php foreach ($data['home'] as $index => $content): ?>
            <div class="dot <?= $index === 0 ? 'active' : '' ?>"></div>
        <?php endforeach; ?>
    </div>
</section>
<script src="/binary_back/public/scripts/carousel.js"></script>
