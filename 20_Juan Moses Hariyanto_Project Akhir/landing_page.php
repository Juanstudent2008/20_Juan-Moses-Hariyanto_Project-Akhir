<!doctype html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Landing Page</title>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="landing_page.css" />
	</head>
	<body>
		<header class="site-header" role="banner">
			<div class="container header-inner">
						<div class="logo" aria-label="Logo">
							<img src="logo.png" alt="Smaktrasa Futsal Club Logo" />
						</div>
					<nav class="main-nav" role="navigation" aria-label="Main navigation">
						<a class="nav-link active" href="landing_page.php">Landing Page</a>
						<span class="nav-sep">|</span>
						<a class="nav-link" href="about_us.php">About Us</a>
					</nav>
		<a class="btn login" href="log_in.php">Log In</a>
			</div>
		</header>

		<main>
			<section class="hero" aria-labelledby="hero-title">
				<div class="container hero-grid">
					<div class="hero-text">
						<h1 id="hero-title">Welcome,</h1>
						<p class="lead">SMAKTRASA Futsal Academy adalah program futsal di SMA Kristen Petra 1 Surabaya yang menjadi wadah bagi siswa untuk mengembangkan bakat, teknik, dan mental bertanding. Dengan latihan terarah dan pelatih berpengalaman, akademi ini menanamkan nilai disiplin, sportifitas, dan kerja sama tim, serta membentuk pemain yang siap berprestasi di berbagai kompetisi.</p>
                        
					</div>
					<div class="hero-media" aria-hidden="true">
						<div class="image-placeholder">
							<img src="trofeo.jpg" alt="Trofeo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
						</div>
					</div>
				</div>
			</section>

			<div class="divider" aria-hidden="true"></div>

			<section id="content" class="content" aria-labelledby="content-title">
				<div class="container">
					<h2 id="content-title">Tournament & Sparing</h2>
					<p class="intro">Tournament dan Sparing yang pernah kami ikuti</p>

					<div class="cards">
						<article class="card">
							<div class="card-image" style="background-image: url('sna.jpg');" aria-hidden="true"></div>
							<h3>SNA CUP</h3>
						</article>

						<article class="card">
							<div class="card-image" style="background-image: url('axis.jpg');" aria-hidden="true"></div>
							<h3>AXIS NATION CUP</h3>
						</article>

						<article class="card">
							<div class="card-image" style="background-image: url('spar.jpg');" aria-hidden="true"></div>
							<h3>SPARING</h3>
							<p>melawan tim-tim sekolah negri dan swasta di Surabaya</p>
						</article>
					</div>
				</div>
			</section>
		</main>

		<footer class="site-footer" role="contentinfo">
			<div class="container footer-inner">SMAKTRASA Futsal Academy</div>
		</footer>
	</body>
</html>
