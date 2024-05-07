<!-- Récupération des datas de la base de données -->
<?php

    $query = $newDb->query('SELECT main_content_title,main_content_content,img_path FROM main_content');
    $data = $query->fetchAll();
    $query->closeCursor();
    
?>
<style>
<?foreach($data as $index => $content): ?>
.main-content__article:nth-child(<?= $index + 1 ?>) {
background: url(/binary_back/public/imgs/<?= $content['img_path'] ?>) no-repeat center center/cover;
}
<?endforeach; ?>
</style>

<section class="main-content carousel">
    <?php foreach ($data as $index => $content): ?>
        <?php if ($index >= 4) break; // Arrête la boucle après 4 articles ?>
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
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>
<script src="/binary_back/public/scripts/carousel.js"></script>
