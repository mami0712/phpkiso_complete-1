<?php
  $nickname = htmlspecialchars($_POST['nickname'],ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['mail'],ENT_QUOTES, 'UTF-8');
  $content = htmlspecialchars($_POST['content'],ENT_QUOTES, 'UTF-8');

  $dsn = 'mysql:dbname=phpkisoo;host=localhost';
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  $stmt = $dbh->prepare('INSERT INTO survey SET nickname=?, email=?, content=?');
  $stmt->execute([$nickname, $email, $content]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>送信完了</title>
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <div>
    <h3>お問い合わせ詳細内容</h3>
    <p>ニックネーム：<?php echo $nickname; ?></p>
    <p>メールアドレス：<?php echo $mail; ?></p>
    <p>お問い合わせ内容：<?php echo $content; ?></p>
    <a href="./index.php">入力画面に戻る</a>
  </div>
</body>
</html>