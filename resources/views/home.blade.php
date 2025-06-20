<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Joel Male Clone</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Custom Styles -->
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: #f8f6fc;
      color: #222;
      padding-top: 120px;
    }

    header {
      background: #f8f6fc;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
    }

    .logo {
      font-weight: bold;
      font-size: 1.5rem;
    }

    nav a {
      text-decoration: none;
      color: #222;
      padding: 8px 16px;
      border-radius: 20px;
      background: #fff;
      transition: background 0.3s ease, color 0.3s ease;
    }

    nav a.active,
    nav a:hover {
      background: #222;
      color: #fff;
    }

    .background-circle {
      position: absolute;
      top: -60px;
      left: 50%;
      transform: translateX(-50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, #e8e4fa 0%, #f8f6fc 100%);
      border-radius: 50%;
      z-index: -100;
      opacity: 0.5;
    }

    .profile-pic img {
      width: 250px;
      border-radius: 12px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      margin: 5px;
      border-radius: 20px;
      background: white;
      border: 1px solid #ddd;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
      font-size: 0.95rem;
    }

    .php { color: #90e0d0; }
    .laravel { color: #f4dda2; }
    .freelance { color: #cce3b2; }
    .side { color: #e3c3ea; }
    .ops { color: #f2c5c3; }

    /* Latest Posts */
    .custom-card {
      background-color: #e9e7fb;
      border-radius: 20px;
      padding: 24px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .custom-card h5 {
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }

    .custom-card ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0;
    }

    .custom-card li {
      display: flex;
      justify-content: space-between;
      align-items: start;
      padding: 12px 0;
      border-bottom: 1px solid #d1cdf2;
      font-size: 0.95rem;
    }

    .custom-card li:last-child {
      border-bottom: none;
    }

    .post-content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .post-title {
      font-weight: 600;
      margin-bottom: 4px;
    }

    .post-time {
      font-size: 0.85rem;
      color: #888;
    }

    /* Latest Videos */
    .video-card {
      background-color: #d7f2e1;
      border-radius: 20px;
      padding: 24px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .video-card h5 {
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }

    .video-entry {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 16px 0;
      border-bottom: 1px solid #bfe5ce;
    }

    .video-entry:last-child {
      border-bottom: none;
    }

    .video-thumb {
      width: 120px;
      border-radius: 12px;
      overflow: hidden;
    }

    .video-thumb img {
      width: 100%;
      display: block;
      border-radius: 12px;
    }

    .video-meta {
      display: flex;
      flex-direction: column;
    }

    .video-title {
      font-weight: 600;
    }

    .video-time {
      font-size: 0.9rem;
      color: #888;
    }

    /* Talks */
    .talk-card {
      background-color: #fce8e3;
      border-radius: 20px;
      padding: 24px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .talk-card h5 {
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }

    .talk-entry {
      display: flex;
      justify-content: space-between;
      align-items: start;
      padding: 16px 0;
      border-top: 1px solid #f3d4cc;
    }

    .talk-content {
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .talk-text {
      display: flex;
      flex-direction: column;
    }

    .talk-title {
      font-weight: 600;
    }

    .talk-time {
      font-size: 0.9rem;
      color: #888;
    }

    /* View All Button */
    .custom-btn {
      display: inline-block;
      margin: 24px auto 0;
      background-color: #c4bbf0;
      color: #000;
      border-radius: 999px;
      padding: 10px 20px;
      font-weight: 500;
      text-decoration: none;
      transition: 0.2s ease;
    }

    .custom-btn:hover {
      background-color: #b3a7e3;
      color: #000;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="d-flex justify-content-between align-items-center px-4 py-3">
    <div class="logo">Joel <b>Male</b></div>
    <nav class="d-flex flex-wrap gap-2">
      <a href="#" class="active">Home</a>
      <a href="#">Blog</a>
      <a href="#">-</a>
      <a href="#">▶️</a>
      <a href="#">𝕏</a>
      <a href="#">🦋</a>
      <a href="#">🐙</a>
      <a href="#">in</a>
    </nav>
  </header>

  <!-- Content -->
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-4">
        <div class="intro">Hi, I'm</div>
        <h2 class="text-primary">Joel Male</h2>
        <div class="description">
          <strong>Passionate about building web apps with Laravel, Livewire, and the rest of the <u>TALL stack</u>.</strong><br><br>
          Serial side project creator, currently building two secret projects and running Pixel, a 7-figure agency.
        </div>
      </div>
      <div class="col-lg-4 text-center position-relative">
        <div class="profile-pic">
          <div class="background-circle"></div>
          <img src="https://joelmale.com/images/joel-male.png" alt="Joel Male" class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="tags mb-3">
          <p class="fw-semibold">I talk about:</p>
          <div class="tag"><span class="dot php">✱</span> PHP</div>
          <div class="tag"><span class="dot laravel">✱</span> Laravel</div>
          <div class="tag"><span class="dot freelance">✱</span> Freelancing</div>
          <div class="tag"><span class="dot side">✱</span> Side Projects</div>
          <div class="tag"><span class="dot ops">✱</span> Technology & Ops</div>
        </div>
        <div class="company">
          <p class="fw-semibold">CTO of:</p>
          <a href="#" class="btn btn-dark rounded-pill">nourishd ↗</a>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-6">
        <!-- Latest Posts -->
        <div class="custom-card">
          <h5>Latest posts <img src="pen-icon.png" alt="pen icon" style="width: 20px;" /></h5>
          <ul>
            <li><div class="d-flex gap-2"><div>📌</div><div class="post-content"><div class="post-title">A new way for Australians to shop second-hand uniforms</div><div class="post-time">2 months ago</div></div></div><div>→</div></li>
            <li><div class="d-flex gap-2"><div>📌</div><div class="post-content"><div class="post-title">A new way for Australians to shop second-hand uniforms</div><div class="post-time">2 months ago</div></div></div><div>→</div></li>
            <!-- Tambah item lain sesuai kebutuhan -->
          </ul>
          <div class="text-center">
            <a href="#" class="custom-btn">View all →</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <!-- Latest Videos -->
        <div class="video-card mb-4">
          <h5>Latest videos <img src="youtube-icon.png" alt="YouTube" style="height: 24px;" /></h5>
          <div class="video-entry">
            <div class="video-thumb"><img src="thumb1.jpg" alt="Video 1"></div>
            <div class="video-meta"><div class="video-title">Being your own boss as a developer</div><div class="video-time">1 year ago</div></div>
          </div>
          <div class="video-entry">
            <div class="video-thumb"><img src="thumb2.jpg" alt="Video 2"></div>
            <div class="video-meta"><div class="video-title">Running a successful digital agency</div><div class="video-time">2 years ago</div></div>
          </div>
          <div class="text-center">
            <a href="#" class="custom-btn">View all →</a>
          </div>
        </div>

        <!-- Latest Talks -->
        <div class="talk-card mt-4">
          <h5>Talks <img src="talks-icon.png" alt="Talks icon" style="height: 24px;" /></h5>
          <div class="talk-entry">
            <div class="talk-content">
              <img src="speaker-icon.png" alt="Speaker icon" style="height: 20px;" />
              <div class="talk-text">
                <div class="talk-title">My Terminal Aliases as a Laravel/Pest Developer</div>
                <div class="talk-time">1 year ago</div>
              </div>
            </div>
            <div>→</div>
          </div>
          <div class="text-center">
            <a href="#" class="custom-btn">View all →</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="container mt-5 pt-4 border-top text-muted small">
    <div class="d-flex justify-content-between flex-wrap mb-3">
      <div class="d-flex align-items-center gap-3">
        <div class="footer-logo fw-bold fs-5">Joel <b>Male</b></div>
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">About</a>
      </div>
      <div class="d-flex gap-3">
        <a href="#">▶️</a>
        <a href="#">𝕏</a>
        <a href="#">🦋</a>
        <a href="#">🐙</a>
        <a href="#">in</a>
      </div>
    </div>
    <hr />
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex gap-3">
        <a href="#">Terms</a>
        <a href="#">Privacy</a>
        <a href="#">Cookies</a>
      </div>
      <div>&copy; 2025 Joel Male. All rights reserved.</div>
    </div>
  </footer>

</body>
</html>
