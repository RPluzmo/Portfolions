<?php require __DIR__ . "/components/header.php"; ?>
<?php require __DIR__ . "/components/navbar.php"; ?>

<main class="project-page">
    <section class="project-hero section">
        <div class="project-hero-copy reveal">
            <a class="back-link" href="<?= e(url("/#projekti")) ?>">Atpakaļ uz projektiem</a>
            <p class="eyebrow"><?= e($project["number"]) ?> / <?= e($project["type"]) ?></p>
            <h1><?= e($project["title"]) ?></h1>
            <p class="project-intro"><?= e($project["description"]) ?></p>
            <?php if ($project["githubUrl"] !== ""): ?>
                <a href="<?= e($project["githubUrl"]) ?>" target="_blank" rel="noreferrer">Atvērt GitHub <span aria-hidden="true">↗</span></a>
            <?php endif; ?>
        </div>
        <div class="project-cover">
            <?php $coverImagePath = __DIR__ . "/../assets/images/" . $project["coverImage"]; ?>
            <?php if (is_file($coverImagePath)): ?>
                <img src="<?= e(url("/assets/images/" . $project["coverImage"])) ?>" alt="<?= e($project["type"]) ?> Titula attēls">
            <?php else: ?>
                <span class="image-fallback">Attēls nav pieejams</span>
            <?php endif; ?>

        </div>
    </section>

    <section class="project-details section">
        <div class="project-detail-heading"><p class="eyebrow">Par projektu</p><h2>Kā tas <em>darbojas.</em></h2></div>
        <div class="project-detail-content"><div class="lead project-detail-description"><?= rich_text($project["detailedDescription"]) ?></div><div class="detail-facts"><div><span>Tehnoloģijas</span><strong><?= e($project["technologies"]) ?></strong></div><div><span>Ko iemācījos</span><strong><?= e($project["learning"]) ?></strong></div></div></div>
    </section>

   
</main> 
<section class="project-media section">
    <p class="eyebrow">Projekta attēli</p>
    <?php if ($project["youtubeId"] !== ""): ?>
        <div class="project-video">
            <iframe
                src="https://www.youtube.com/embed/<?= e($project["youtubeId"]) ?>"
                title="<?= e($project["type"]) ?> video demonstrācija"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
    <?php endif; ?>
    <div class="project-gallery">
        <?php foreach ($project["gallery"] as $index => $image): ?>
            <figure class="project-gallery-item">
                <?php if (is_file(__DIR__ . "/../assets/images/" . $image)): ?>
                    <button
                        class="gallery-image-button"
                        type="button"
                        data-lightbox-image="<?= e(url("/assets/images/" . $image)) ?>"
                        aria-label="Atvērt <?= e($project["type"]) ?> projekta attēlu <?= $index + 1 ?> lielā skatā"
                    >
                        <img src="<?= e(url("/assets/images/" . $image)) ?>" alt="<?= e($project["type"]) ?> projekta attēls <?= $index + 1 ?>" loading="lazy">
                    </button>
                <?php else: ?>
                    <div class="gallery-fallback">Attēls nav pieejams</div>
                <?php endif; ?>
                
            </figure>
        <?php endforeach; ?>
    </div>
</section>

<div class="lightbox" role="dialog" aria-modal="true" aria-label="Projekta attēls" hidden>
    <button class="lightbox-close" type="button" aria-label="Aizvērt attēlu">&times;</button>
    <img class="lightbox-image" src="" alt="">
</div>

<?php require __DIR__ . "/components/footer.php"; ?>