<?php
$name = "Suhrob";
$location = "Khorezm";
$email = "suhrob@gmai.com";
$title = "PHP & Laravel Developer";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $name ?> | Portfolio</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

<!-- GSAP -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: radial-gradient(circle at top, #111 0%, #000 60%);
  color: #fff;
  overflow-x: hidden;
}

header {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.hero h1 {
  font-size: clamp(3rem, 8vw, 6rem);
  font-weight: 800;
  letter-spacing: -2px;
}

.hero span {
  background: linear-gradient(90deg, #00f5ff, #00ff88);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero p {
  margin-top: 20px;
  font-size: 1.2rem;
  opacity: 0.8;
}

section {
  padding: 120px 10%;
}

h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
}

.about, .contact {
  max-width: 800px;
}

.skills {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
}

.card {
  background: rgba(255,255,255,0.05);
  border-radius: 20px;
  padding: 30px;
  backdrop-filter: blur(20px);
  transition: transform .4s ease, box-shadow .4s ease;
}

.card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 20px 60px rgba(0,255,200,0.2);
}

footer {
  text-align: center;
  padding: 60px 20px;
  opacity: .6;
}
a {
  color: #00ffcc;
  text-decoration: none;
}
</style>
</head>

<body>

<header>
  <div class="hero">
    <h1 class="reveal">Hi, I’m <span><?= $name ?></span></h1>
    <p class="reveal"><?= $title ?> from <?= $location ?></p>
  </div>
</header>

<section>
  <div class="about reveal">
    <h2>About Me</h2>
    <p>
      I’m a passionate <strong>PHP & Laravel developer</strong> focused on building
      fast, secure, and scalable web applications.  
      I love clean architecture, modern UI, and smooth user experiences.
    </p>
  </div>
</section>

<section>
  <h2 class="reveal">Core Skills</h2>
  <div class="skills">
    <div class="card reveal">Laravel Architecture</div>
    <div class="card reveal">REST APIs & Auth</div>
    <div class="card reveal">MySQL / PostgreSQL</div>
    <div class="card reveal">Livewire / Blade</div>
    <div class="card reveal">Performance Optimization</div>
    <div class="card reveal">Modern UI Integration</div>
  </div>
</section>

<section>
  <div class="contact reveal">
    <h2>Contact</h2>
    <p>
      Want to work together or build something great?<br><br>
      📧 <a href="mailto:<?= $email ?>"><?= $email ?></a>
    </p>
  </div>
</section>

<footer>
  © <?= date('Y') ?> <?= $name ?> — Crafted with PHP & GSAP
</footer>

<script>
gsap.registerPlugin(ScrollTrigger);

// HERO INTRO
gsap.from(".hero h1", {
  y: 80,
  opacity: 0,
  duration: 1.2,
  ease: "power4.out"
});

gsap.from(".hero p", {
  y: 40,
  opacity: 0,
  duration: 1,
  delay: .4
});

// REVEAL ON SCROLL
gsap.utils.toArray(".reveal").forEach(el => {
  gsap.from(el, {
    scrollTrigger: {
      trigger: el,
      start: "top 85%",
    },
    y: 60,
    opacity: 0,
    duration: 1,
    ease: "power3.out"
  });
});
</script>

</body>
</html>
