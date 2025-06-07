<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>桃銘熱舞社 Locking 展演頁</title>
  <link rel="stylesheet" href="L-style.css">
  <style>
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
      <h1>Locking</h1>
      <h2> - Funk Style · 自由靈魂 - </h2>
      <p>致敬經典，創造屬於我們的舞台！</p>
    </div>
  </div>

  <div class="wrapper">
    <main>
      <section id="intro">
        <h3>什麼是 Locking？</h3>
        <p>
          Locking 是一種源自 1970 年代美國的街舞風格，屬於 Funk Style 的一種。<br>
          它的特色是動作突然鎖住（Lock），結合大幅度的手部與肢體動作，常帶有喜劇感與互動性。<br>
          著名的創始人物為 Don Campbell，表演通常搭配 Funk 音樂，如 James Brown 的歌曲。
        </p>
      </section>

      <section id="video">
        <h3>Locking 精選影片</h3>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Fu4ueUKc2UI"
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
        <h3>Locking 精彩表演瞬間</h3>
        <div class="gallery">
          <div class="row">
            <img src="img/L6.jpg" alt="Locking 表演 6">
            <img src="img/L8.jpg" alt="Locking 表演 8">
            <img src="img/L10.jpg" alt="Locking 表演 10">
          </div>
          <div class="row">
            <img src="img/L9.jpg" alt="Locking 表演 9">
            <img src="img/L3.jpg" alt="Locking 表演 3">
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>© 桃銘熱舞社 Locking </p>
    </footer>
  </div>
</body>
</html>
