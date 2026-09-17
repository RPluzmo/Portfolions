const isProjectPage = document.body.dataset.page === "project";
const pathPrefix = isProjectPage ? "../" : "";
const imagePath = (path) => `${pathPrefix}assets/images/${path}`;

const footer = `
<footer class="site-footer">
    <div class="footer-intro"><a href="https://github.com/RPluzmo" target="_blank" rel="noreferrer">Mans GitHub profils <span aria-hidden="true">↗</span></a></div>
    <div class="footer-contact"><p>Kontaktinformācija</p><p><a href="tel:+37126208968">+371 26 208 968</a></p><p><a href="mailto:raivo.pluzmo@gmail.com">raivo.pluzmo@gmail.com</a></p></div>
</footer>`;

const navigation = `
<header class="site-header"><nav class="main-nav" aria-label="Galvenā navigācija">
    <a href="${pathPrefix}index.html#par-mani">Par mani</a><a href="${pathPrefix}index.html#prasmes">Prasmes</a><a href="${pathPrefix}index.html#projekti">Projekti</a>
</nav></header>`;

const renderProjectCard = (project, key) => `
<a class="project-card ${project.color}" href="${key}/">
    <div class="project-visual"><img src="${imagePath(project.image)}" alt="${project.name} Projekta titullapa" loading="lazy"></div>
    <div class="project-meta"><span>Projekts - ${project.number}</span><span class="project-open">Apskatīt plašāk ↗</span></div>
    <h3>${project.name}</h3><p>${project.description}</p>
</a>`;

const renderProjectPage = (project) => {
    document.querySelector("#project-content").innerHTML = `${navigation}
    <main class="project-page">
        <section class="project-hero section"><div class="project-hero-copy reveal">
            <a class="back-link" href="../index.html#projekti">Atpakaļ uz projektiem</a>
            <p class="eyebrow">${project.number} / ${project.type}</p><h1>${project.title}</h1>
            <p class="project-intro">${project.description}</p>
            <a href="${project.githubUrl}" target="_blank" rel="noreferrer">Atvērt GitHub <span aria-hidden="true">↗</span></a>
        </div><div class="project-cover"><img src="${imagePath(project.image)}" alt="${project.type} Titula attēls"></div></section>
        <section class="project-details section"><div class="project-detail-heading"><p class="eyebrow">Par projektu</p><h2>Kā tas <em>darbojas.</em></h2></div>
            <div class="project-detail-content"><div class="lead project-detail-description">${project.detailedDescription}</div><div class="detail-facts"><div><span>Tehnoloģijas</span><strong>${project.technologies}</strong></div><div><span>Ko iemācījos</span><strong>${project.learning}</strong></div></div></div>
        </section>
    </main><section class="project-media section"><p class="eyebrow">Projekta attēli</p><div class="project-gallery">
        ${project.gallery.map((image, index) => `<figure class="project-gallery-item"><button class="gallery-image-button" type="button" data-lightbox-image="${imagePath(image)}" aria-label="Atvērt ${project.type} projekta attēlu ${index + 1} lielā skatā"><img src="${imagePath(image)}" alt="${project.type} projekta attēls ${index + 1}" loading="lazy"></button></figure>`).join("")}
    </div></section><div class="lightbox" role="dialog" aria-modal="true" aria-label="Projekta attēls" hidden><button class="lightbox-close" type="button" aria-label="Aizvērt attēlu">&times;</button><img class="lightbox-image" src="" alt=""></div>${footer}`;
};

if (isProjectPage) {
    const project = projects[document.body.dataset.project];
    if (project) {
        renderProjectPage(project);
    }
} else if (document.body.dataset.page === "home") {
    document.querySelector(".project-grid").innerHTML = Object.entries(projects).map(([key, project]) => renderProjectCard(project, key)).join("");
}

const revealObserver = "IntersectionObserver" in window ? new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: .12 }) : null;

document.querySelectorAll(".reveal").forEach((element) => {
    if (revealObserver) revealObserver.observe(element);
    else element.classList.add("visible");
});

document.querySelectorAll("[data-optional-image]").forEach((image) => image.addEventListener("error", () => image.remove()));

const lightbox = document.querySelector(".lightbox");
const lightboxImage = document.querySelector(".lightbox-image");
const lightboxClose = document.querySelector(".lightbox-close");
let lightboxTrigger = null;
const closeLightbox = () => {
    if (!lightbox) return;
    lightbox.hidden = true;
    document.body.style.overflow = "";
    if (lightboxTrigger) { lightboxTrigger.focus(); lightboxTrigger = null; }
};

if (lightbox && lightboxImage && lightboxClose) {
    document.addEventListener("click", (event) => {
        const button = event.target.closest("[data-lightbox-image]");
        if (!button) return;
        event.preventDefault(); lightboxTrigger = button; lightboxImage.src = button.dataset.lightboxImage;
        lightboxImage.alt = button.getAttribute("aria-label") || "Projekta attēls"; lightbox.hidden = false;
        document.body.style.overflow = "hidden"; lightboxClose.focus();
    });
    lightboxImage.addEventListener("error", closeLightbox);
    lightboxClose.addEventListener("click", closeLightbox);
    lightbox.addEventListener("click", (event) => { if (event.target === lightbox) closeLightbox(); });
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") closeLightbox();
        if (event.key === "Tab" && !lightbox.hidden) { event.preventDefault(); lightboxClose.focus(); }
    });
}

document.addEventListener("click", (event) => {
    const link = event.target.closest('a[href*="#"]');
    if (!link || !link.hash || link.origin !== window.location.origin) return;
    const currentPath = `${window.location.pathname}${window.location.search}`;
    const linkPath = `${link.pathname}${link.search}`;
    if (currentPath !== linkPath) return;
    const target = document.querySelector(link.hash);
    if (!target) return;
    event.preventDefault(); history.pushState(null, "", link.hash); target.scrollIntoView({ behavior: "smooth", block: "start" });
});

const siteHeader = document.querySelector(".site-header");
if (siteHeader) {
    const updateHeader = () => siteHeader.classList.toggle("is-scrolled", window.scrollY > 24);
    window.addEventListener("scroll", updateHeader, { passive: true }); updateHeader();
}

const hero = document.querySelector(".hero");
const starsCanvas = document.querySelector(".hero-stars");
if (hero && starsCanvas) {
    const starsContext = starsCanvas.getContext("2d");
    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const stars = []; const pointer = { x: 0, y: 0 };
    const resizeStars = () => {
        const bounds = hero.getBoundingClientRect(); const pixelRatio = window.devicePixelRatio || 1;
        starsCanvas.width = bounds.width * pixelRatio; starsCanvas.height = bounds.height * pixelRatio;
        starsCanvas.style.width = `${bounds.width}px`; starsCanvas.style.height = `${bounds.height}px`;
        starsContext.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0); stars.length = 0;
        const starCount = Math.min(150, Math.floor(bounds.width / 8));
        for (let index = 0; index < starCount; index += 1) stars.push({ x: Math.random() * bounds.width, y: Math.random() * bounds.height, size: Math.random() * 1.6 + .3, depth: Math.random() * .8 + .2, phase: Math.random() * Math.PI * 2 });
    };
    const drawStars = (time = 0) => {
        const bounds = hero.getBoundingClientRect(); const centerX = bounds.width / 2; const centerY = bounds.height / 2;
        const glowX = centerX + pointer.x * bounds.width * .7; const glowY = centerY + pointer.y * bounds.height * .7;
        starsContext.clearRect(0, 0, bounds.width, bounds.height);
        const glow = starsContext.createRadialGradient(glowX, glowY, 0, glowX, glowY, bounds.width * .42);
        glow.addColorStop(0, "rgba(255, 239, 185, .3)"); glow.addColorStop(1, "rgba(255, 239, 185, 0)"); starsContext.fillStyle = glow; starsContext.fillRect(0, 0, bounds.width, bounds.height);
        stars.forEach((star) => { const driftX = -pointer.x * (1.2 - star.depth) * 45; const driftY = -pointer.y * (1.2 - star.depth) * 45; const twinkle = .55 + Math.sin(time * .0015 + star.phase) * .35; starsContext.beginPath(); starsContext.fillStyle = `rgba(255, 250, 228, ${twinkle})`; starsContext.arc(star.x + driftX + (star.x - centerX) * .015, star.y + driftY + (star.y - centerY) * .015, star.size, 0, Math.PI * 2); starsContext.fill(); });
        if (!reducedMotion) requestAnimationFrame(drawStars);
    };
    hero.addEventListener("pointermove", (event) => { const bounds = hero.getBoundingClientRect(); pointer.x = (event.clientX - bounds.left) / bounds.width - .5; pointer.y = (event.clientY - bounds.top) / bounds.height - .5; });
    window.addEventListener("resize", resizeStars); resizeStars(); drawStars();
}
