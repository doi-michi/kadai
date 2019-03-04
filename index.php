<!DOCTYPE html>
<html lang="la" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>keijiban</title>
  </head>


  <body>
    <h1>１人掲示板</h1>
    <h2>１回だけ投稿できます。</h2>

    <form method="post" action="post.php">
      <p><label>Name<br>
        <input type="text" name="name" placeholder="ニックネームを入力">
      </p>
      <p><label>Message<br>
        <input type="text" name="message" placeholder="メッセージを入力">
      </p>
      <input type="submit" value="送信する">
    </form>
    <button type="button" onclick="history.back()">戻る</button>
  </body>
</html>
