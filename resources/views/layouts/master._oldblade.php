<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  @include('layouts.styles')
</head>
<body>

  @include('layouts.header')


  <div class="container">
    <div class="left">
      <div class="intro">Hi, I'm</div>
      <h2>Joel Male</h2>
      <div class="description">
        <strong>Passionate about building web apps with Laravel, Livewire, and the rest of the <u>TALL stack</u>.</strong><br><br>
        Serial side project creator, currently building two secret projects and running Pixel, a 7-figure agency. Previously worked in multiple web agencies.
      </div>
    </div>
    <div class="center">
      <div class="profile-pic">
        <div class="background-circle"></div>
        <img src="frame.png" alt="Joel Male" />
        <div class="from-australia">
          <img src="frame_tambahan icon.png" alt="From Australia" />
          <div>From Australia</div>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="tags">
        <p>I talk about:</p>
        <div class="tag"><span class="dot php">✱</span> PHP</div>
        <div class="tag"><span class="dot laravel">✱</span> Laravel</div>
        <div class="tag"><span class="dot freelance">✱</span> Freelancing</div>
        <div class="tag"><span class="dot side">✱</span> Side Projects</div>
        <div class="tag"><span class="dot ops">✱</span> Technology & Ops</div>
      </div>
      <div class="company">
        <p>CTO of:</p>
        <a href="#">nourishd ↗</a>
      </div>
    </div>
  </div>

  <div class="grid-2col">
    <div class="latest-posts">
      <img src="late_post,latest_vidos,talks.png" alt="Latest Posts" style="width:100%; border-radius: 16px;" />
    </div>
    <div>
      <div class="latest-videos">
        <img src="late_post,latest_vidos,talks.png" alt="Latest Videos" style="width:100%; border-radius: 16px;" />
      </div>
      <div class="latest-talks">
        <img src="late_post,latest_vidos,talks.png" alt="Talks" style="width:100%; border-radius: 16px;" />
      </div>
    </div>
  </div>

  @include('layouts.footer')

  

</body>
</html>
