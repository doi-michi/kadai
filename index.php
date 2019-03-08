<!DOCTYPE html>
<html lang="la" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>keijiban</title>
  </head>

  <body>
    <h1>１人掲示板</h1>
    <?php
    if (isset($_GET['name']) === TRUE) {
      echo $_GET["name"],"さんの投稿<br />";
      echo $_GET["message"];
    }else{
      echo "<h2>１回だけ投稿できます。</h2>";
  }
    ?>
    <form method="get" >
      <p><label for ="namae">Name<br>
        <input type="text" name="name" id="namae" placeholder="ニックネームを入力">
      </p>
      <p><label for ="messages">Message<br>
        <input type="text" name="message" id="messages" placeholder="メッセージを入力">
      </p>
      <input type="submit" value="送信する">
    </form>
    
  </body>
</html>
