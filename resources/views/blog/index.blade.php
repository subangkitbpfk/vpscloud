<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Joel Male Clone</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background: #f8f6fc;
      color: #222;
      padding: 40px;
      padding-top: 120px; /* space for fixed header */
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
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

    nav {
      display: flex;
      gap: 10px;
      align-items: center;
      flex-wrap: wrap;
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

    .container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 30px;
      align-items: center;
    }

    .left, .right {
      min-width: 280px;
    }

    .center {
      text-align: center;
      position: relative;
    }

    .left h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #a259ff;
    }

    .intro {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .description {
      margin-top: 20px;
      font-size: 1rem;
    }

    .profile-pic {
      position: relative;
      text-align: center;
      margin: 20px 0;
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
      position: relative;
      width: 250px;
      border-radius: 12px;
      z-index: 2;
    }

    .from-australia {
      position: absolute;
      top: 0;
      right: 10%;
      width: 150px;
      text-align: center;
      font-size: 0.9rem;
    }

    .from-australia img {
      width: 100%;
    }

    .tags {
      margin-top: 30px;
    }

    .tags p {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .tag {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      margin-bottom: 10px;
      border-radius: 20px;
      background: white;
      border: 1px solid #ddd;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      width: fit-content;
      font-size: 0.95rem;
    }

    .dot {
      font-size: 1.2rem;
    }

    .php { color: #90e0d0; }
    .laravel { color: #f4dda2; }
    .freelance { color: #cce3b2; }
    .side { color: #e3c3ea; }
    .ops { color: #f2c5c3; }

    .company {
      margin-top: 30px;
    }

    .company a {
      display: inline-block;
      padding: 8px 16px;
      background: black;
      color: white;
      border-radius: 20px;
      text-decoration: none;
      margin-top: 10px;
    }

    .grid-2col {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 30px;
      margin-top: 60px;
    }

    .latest-posts, .latest-videos, .latest-talks {
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      background-color: white;
    }

    .latest-posts { background-color: #e9e7fb; }
    .latest-videos { background-color: #d7f2e1; margin-bottom: 20px; }
    .latest-talks { background-color: #fce8e3; }

    footer {
      margin-top: 80px;
      padding-top: 40px;
      border-top: 1px solid #ddd;
      font-size: 0.9rem;
      color: #777;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .footer-left, .footer-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .footer-left a, .footer-right a {
      text-decoration: none;
      color: #777;
    }

    .footer-logo {
      font-weight: bold;
      font-size: 1.5rem;
      margin-right: 30px;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .container {
        grid-template-columns: 1fr;
        text-align: center;
      }
      .left, .right {
        min-width: unset;
      }
      .right {
        margin-top: 40px;
      }
      .grid-2col {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      nav a {
        margin-bottom: 8px;
      }
      .from-australia {
        position: static;
        margin-top: 10px;
      }
      .profile-pic img {
        width: 200px;
      }
      body {
        padding: 20px;
        padding-top: 140px;
      }
    }

    @media (max-width: 480px) {
      nav a {
        padding: 6px 12px;
        font-size: 14px;
      }
      .left h2 {
        font-size: 1.6rem;
      }
      .intro {
        font-size: 1.2rem;
      }
      .description {
        font-size: 0.95rem;
      }
      .tag {
        font-size: 0.85rem;
        padding: 8px 12px;
      }
      .footer-container {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Joel <b>Male</b></div>
    <nav>
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

  <div class="container">

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

  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <div class="footer-logo">Joel <b>Male</b></div>
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">About</a>
      </div>
      <div class="footer-right">
        <a href="#">▶️</a>
        <a href="#">𝕏</a>
        <a href="#">🦋</a>
        <a href="#">🐙</a>
        <a href="#">in</a>
      </div>
    </div>
    <hr style="margin: 20px 0; border: none; border-top: 1px solid #ddd;" />
    <div class="footer-container">
      <div class="footer-left">
        <a href="#">Terms</a>
        <a href="#">Privacy</a>
        <a href="#">Cookies</a>
      </div>
      <div class="footer-right">
        Copyright © 2025 Joel Male. All rights reserved.
      </div>
    </div>
  </footer>

</body>
</html>
