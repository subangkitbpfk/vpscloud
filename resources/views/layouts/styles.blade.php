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