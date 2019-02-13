<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      //変数がセットされていること、そして NULL でないことを検査する-isset
      if(isset($_POST["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="index.php">
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>
