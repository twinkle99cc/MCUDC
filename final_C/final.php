<?php
$quotes = [
  "🌸 你很棒，這句話請自己說三次。",
  "🍀 每個變數都能被定義，每個你也都能被肯定。",
  "✨ 你學會的，不只是程式碼，是創作的能力。",
  "✨ 恭喜你獲得「程式之光」稱號，增加 50 點堅持力。",
  "「完成了最終課程」成就已解鎖！✨",
  "🍀 你觸發了隱藏事件：「老師以你為榮」。",
  "🌸 如果人生可以 Ctrl + Z，你還會回到這堂課吧？",
  "✨ 這不是課的結束，而是你技能點數提升的開始。",
  "這行字是寫給你看的：謝謝你堅持到最後。✨",
];
$message = "";
if (isset($_GET['draw'])) {
  $index = rand(0, count($quotes) - 1);
  $message = $quotes[$index];
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>幸運籤詩機</title>
    <style>
      body {
        font-family: sans-serif;
        text-align: center;
        background-color: #fff8e1;
        margin-top: 50px;
      }
      .secret {
        color: #d500f9;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h1>🧧 幸運籤詩 🧧</h1>
    <form method="get">
      <button name="draw" value="1">✨點我抽籤✨</button>
    </form>
    <?php if ($message): ?>
      <h2 class="secret"><?php echo $message; ?></h2>
    <?php endif; ?>
    <p style="margin-top: 100px; font-size: 14px; color: #888;">
      最後一堂 PHP 課・<?php echo date("Y 年 m 月 d 日"); ?>
    </p>
  </body>
</html>
