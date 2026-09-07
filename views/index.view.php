<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<main>
	<section class="hero section" id="sakums">
		<div class="hero-copy">
			<p class="eyebrow">Programmēšanas tehniķis \ Cēsis</p>
			<h1>Raivo Plužmo</h1>
			<p>qqq.</p>
			
		</div>
		<div class="hero-side ">
			<span>01</span>
			<p>Portfolio<br>2026</p>
		</div>
	</section>
	<section class="about section" id="par-mani">
		<div class="section-intro">
			<p class="eyebrow">
				01 / Par mani
			</p>
			<h2>
				Kas<br><em>es esmu.</em>
			</h2>
		</div>
		<div class="about-content">
			<p class="lead">
				Mani sauc <strong>Raivo Plužmo</strong>. Mācos par programmēšanas tehniķi Vidzemes Tehnoloģiju un dizaina tehnikumā un vēlos tehnoloģijas padarīt par savu ikdienu.
			</p>
			<p>
				Esmu uzklausīgs, iecietīgs un labprāt strādāju komandā. Man patīk uzdevumi, kuros varu soli pa solim atrast risinājumu, kā arī mācīties no pieredzējušākiem.
			</p>
			<div class="about-facts">
				<div>
					<span>
						Izglītība
					</span>
					<strong>
						Programmēšanas tehniķis
					</strong>
					<small>VTDT 2023 — pašlaik</small>
				</div>
				<div>
					<span>Valodas</span>
					<strong>Latviešu / dzimtā</strong>
					<small>Angļu valoda · B2</small>
				</div>
			</div>
		</div>
	</section>

	<section class="skills section" id="prasmes">
		<div class="section-intro">
			<p class="eyebrow">02 / Tehnoloģijas</p>
			<h2>Manas<br><em>prasmes</em></h2>
			<p>Prasmes, ko attīstu mācībās un savos projektos.</p>
		</div>
		<div class="skill-list reveal reveal-delay">
			<div class="skill-row">
				<span class="skill-number">01</span>
				<div>
					<h3>Programmēšanas valodsa</h3>
					<p>HTML <b>~</b> CSS <b>~</b> JavaScript <b>~</b> PHP</p>
				</div>
			</div>
			<div class="skill-row">
				<span class="skill-number">02</span>
				<div>
					<h3>Ietvari un bibliotēkas</h3>
					<p>Laravel <b>~</b> React</p>
				</div>
		 </div>
		 <div class="skill-row">
			 <span class="skill-number">03</span>
			 <div>
				 <h3>Tehnoloģijas</h3>
				 <p>MySQL datubāzes <b>~</b> Git versiju kontrole</p>
			 </div>
		 </div>
	 </div>
 </section>

 <section class="projects section" id="projekti">
	 <div class="projects-heading reveal">
		 <div>
			 <p class="eyebrow">03 / Izvēlētie darbi</p>
			 <h2>Mani<br><em>projekti.</em></h2>
		 </div>
	 </div>
	 <div class="project-grid reveal reveal-delay">
		 <a class="project-card project-one" href="/projekts1">
			 <div class="project-visual">
				 <span class="visual-label">Laravel / MySQL</span>

				 </div>
			 </div>
	
				 <span>01 — Mysterymeal</span>
				 <span class="project-open">Skatīt projektu ↗</span>
			 </div>
			 <h3>Projekts Nr. 01</h3>
			 <p>mysterymeal</p>

		 </a>

		 <a class="project-card project-two" href="/projekts2">
			<div class="project-visual">
				<span class="visual-label">Laravel / MySQL</span>

				</div>
			</div>
				<span>02 — EmEks</span>
				<span class="project-open">Skatīt projektu ↗</span>
			</div>
			<h3>Projekts Nr. 02</h3>
			<p>EmEks</p>
		</a>

<?php require "views/components/footer.php"; ?>