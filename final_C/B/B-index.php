<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>桃銘熱舞社 Breaking 展演頁</title>
  <style>
    body {
      margin: 0;
      background-color: #1a1a1a;
      color: #f0f0f0;
      font-family: 'Helvetica Neue', sans-serif;
    }

    nav {
      position: absolute;
      top: 20px;
      right: 30px;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: orange;
      font-weight: bold;
      font-size: 1em;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #ffd700;
    }

    .hero {
      background-image: url('3.jpg');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-text {
  position: relative;
  z-index: 1;
  background-color: rgba(0, 0, 0, 0.4); /* 半透明背景 */
  padding: 40px;
  border-radius: 10px;
  text-align: center; /* 讓 <p> 文字也置中 */
  color: white;
}

    .hero h1 {
      font-size: 3em;
      color: #fff;
      margin-bottom: 10px;
    }

    .hero h2 {
      font-size: 1.5em;
      color: #ccc;
    }

    .wrapper {
      max-width: 1000px;
      margin: auto;
      padding: 40px 20px;
    }

    section {
      margin-bottom: 60px;
    }

    h3 {
      text-align: left;
      color: orange;
      font-size: 1.8em;
      border-bottom: 2px solid #555;
      margin-bottom: 10px;
    }

    p {
      text-align: left;
      line-height: 1.8;
      font-size: 1.1em;
    }

    .video-container {
      display: flex;
      justify-content: flex-start;
      margin-top: 20px;
    }

    .gallery .row {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 20px;
    }

    .gallery .row:nth-child(even) {
      flex-direction: row-reverse;
    }

    .gallery img {
      width: 32%;
      border-radius: 10px;
      box-shadow: 0 0 10px #000;
    }

    footer {
      text-align: center;
      margin-top: 80px;
      font-size: 0.9em;
      color: #999;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#intro">介紹</a></li>
      <li><a href="#video">影片</a></li>
      <li><a href="#about">關於我們</a></li>
      <li><a href="#gallery">照片</a></li>
    </ul>
  </nav>

  <div class="hero">
    <div class="hero-text">
      <h1>Breaking</h1>
      <h2>Breaking · Funk Style · 自由靈魂</h2>
      <p>   致敬經典，創造屬於我們的舞台！</p>
    </div>
  </div>

  <div class="wrapper">
    <main>
      <section id="intro">
        <h3>什麼是 Breaking？</h3>
        <p>
          Locking 是一種源自 1970 年代美國的街舞風格，屬於 Funk Style 的一種。<br>
          它的特色是動作突然鎖住（Lock），結合大幅度的手部與肢體動作，常帶有喜劇感與互動性。
        </p>
      </section>

       <section id="video">
        <h3>Breaking 精選影片</h3>
        <div class="video-container">
          <iframe width="800" height="450" src="https://www.youtube.com/embed/MDb8qvlcPr0?si=0JksYwr8rFfMgqlN"
                  frameborder="0" allowfullscreen></iframe>
        </div>
      </section>

      <section id="about">
        <h3>社團簡介</h3>
        <p>
          桃銘熱舞社是一個充滿熱情與創意的舞蹈社團，提供學生學習多種街舞風格的舞台，包括 Locking、Breaking、Popping 等。
          每年定期舉辦成果展與校內外演出，歡迎有興趣的同學加入一起尬舞！
        </p>
      </section>

      <section id="gallery">
        <h3>Breacking 精彩表演瞬間</h3>
        <div class="gallery">
          <div class="row">
            <img src="1.jpg" alt="Locking 表演 6">
            <img src="2.jpg" alt="Locking 表演 8">
            <img src="5.jpg" alt="Locking 表演 10">
          </div>
          <div class="row">
            <img src="6.jpg" alt="Locking 表演 9">
            <img src="7.jpg" alt="Locking 表演 3">
            <img src="8.jpg" alt="Locking 表演 12">
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>© 桃銘熱舞社 Locking 組</p>
    </footer>
  </div>
</body>
</html>
