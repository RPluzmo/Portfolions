<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<main class="project-page">
    <section class="project-hero section">
        <div class="project-hero-copy reveal">
            <a class="back-link" href="/#projekti">Atpakaļ uz projektiem</a>
            <p class="eyebrow"><?= $project["number"] ?> / <?= $project["type"] ?></p>
            <h1><?= $project["title"] ?></h1>
            <p class="project-intro"><?= $project["description"] ?></p>
            <a href="https://github.com/RPluzmo/WEBProb">Atvērt GitHub</a>
        </div>
        <div class="project-cover">
            <strong><?= $project["type"] ?></strong>

        </div>
    </section>

    <section class="project-details section">
        <div class="project-detail-heading"><p class="eyebrow">Par projektu</p><h2>Kā tas<br><em>darbojas.</em></h2></div>
        <div class="project-detail-content"><p class="lead">Projekta apraksts.</p><p>Aprasksts</p><div class="detail-facts"><div><span>Tehnoloģijas</span><strong><?= $project["technologies"] ?></strong></div><div><span>Ko iemācījos</span><strong><?= $project["learning"] ?></strong></div></div></div>
    </section>

   
</main> 
<section class="project-media section">
    <p class="eyebrow">Procesa materiāli</p>
    <div class="media-row">
        <div class="media-placeholder"><span>01</span>
            <strong>Projekta ekrānattēls</strong>
        </div>
            <div class="media-placeholder">
                <span>02</span>
                    <strong>Video demonstrācija</strong>
            </div>
    </div>
</section>

<?php require "views/components/footer.php"; ?>