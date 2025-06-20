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
  @include('layouts.styles')
</head>
<body>

  <!-- Header -->
@include('layouts.header')

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
 @include('layouts.footer')

</body>
</html>
