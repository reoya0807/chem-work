<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Chem - Work</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="content">

<?php if ( empty($_POST["title"]) ) { ?>
      <h1>2020 実戦 化学重要問題集</h1>
      <form action="../chem-work/" method="post">
        <p>Title: </p>
        <input class="title-box" type="text" name="title" value="2020 実戦 化学重要問題集" required>
        <p>Start: </p>
        <input type="text" name="start" placeholder="未入力" required>
        <p>End: </p>
        <input type="text" name="end" placeholder="未入力" required>
        <input class="submit-box" type="submit" name="submit" value="実行">
      </form>

<?php } else {
$start = $_POST["start"];
$end = $_POST["end"];
$volume = $end - $start + 1;
?>

      <h1><?= $_POST["title"] ?></h1>
      <ul>
      <?php for ($i = $start; $i <= $end; $i++) { ?>
        <li><?= $i ?></li>
      <?php } ?>
      </ul>

<?php } ?>

    </div>

    <script src="jQuery.js"></script>

  </body>
</html>
