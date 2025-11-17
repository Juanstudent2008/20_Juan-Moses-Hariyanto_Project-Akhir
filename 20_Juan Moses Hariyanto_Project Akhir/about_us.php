<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - SMAKTRASA</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about_us.css">
  </head>
  <body>
    <header class="site-header">
      <div class="container header-inner">
        <div class="logo">
          <img src="logo.png" alt="Smaktrasa Futsal Club Logo" />
        </div>
        <nav class="nav">
          <a href="landing_page.php">Landing Page</a>
            <span class="nav-sep">|</span>
          <a class="active" href="about_us.php">About Us</a>
        </nav>
  <a class="btn login" href="log_in.php">Log In</a>
      </div>
    </header>

    <main>
      <section class="media-hero">
        <div class="container">
          <div class="media-box" aria-label="Cuplikan video">
            <div class="video-label">Cuplikan Sparing</div>
            <video class="hero-video" src="cuplikan.mp4" poster="trofeo.jpg" playsinline muted loop autoplay controls aria-label="Cuplikan video"></video>
          </div>
        </div>
      </section>

      <section class="content-list">
        <div class="container">
          <div class="list">
            <div class="thumb">
              <img src="sna.jpg" alt="SNA" />
            </div>
            <div class="text">
              <h3>SNA CUP</h3>
              <p>Partisipasi di SNA Cup.</p>
            </div>
          </div>

          <div class="list">
            <div class="thumb">
              <img src="axis.jpg" alt="Axis Nation Cup" />
            </div>
            <div class="text">
              <h3>AXIS NATION CUP</h3>
              <p>Partisipasi di Axis Nation Cup.</p>
            </div>
          </div>

          <div class="list">
            <div class="thumb">
              <img src="spar.jpg" alt="Sparing" />
            </div>
            <div class="text">
              <h3>SPARING</h3>
              <p>Latihan dan sparing melawan sekolah lain.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">SMAKTRASA Futsal Academy</div>
    </footer>
  </body>
</html>
