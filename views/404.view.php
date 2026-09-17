<?php require __DIR__ . "/components/header.php"; ?>
<?php require __DIR__ . "/components/navbar.php"; ?>

<main class="not-found section">
	<p class="eyebrow">Kļūda 404</p>
	<h1>Lapa nav atrasta.</h1>
	<a class="back-link" href="<?= e(url("/")) ?>">Atgriezties sākumlapā</a>
</main>

<?php require __DIR__ . "/components/footer.php"; ?>