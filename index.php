<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
</head>
<body>
  <h1>お問い合わせ情報入力</h1>
  <form method="POST" action="check.php">
    <div>
        ニックネーム<br>
        <input type="text" name="nickname" style="width:100px">
    </div>
    <div>
        メールアドレス<br>
        <input type="text" name="email" style="width: 200px">
    </div>
    <div>
        お問い合わせ内容<br>
        <textarea name="content" cols="40" rows="5"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
  <h2>管理者用メニュー</h2>
  <ul>
    <li><a href="./view.php">お問い合わせ内容一覧</a></li>
  </ul>
</body>
</html>
