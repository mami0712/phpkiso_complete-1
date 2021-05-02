<?php
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES UTF8MB4');

$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>一覧画面</title>
</head>
<body>
  <h1>お問い合わせ情報一覧</h1>
  <hr>
  <?php foreach($records as $record):?>
   <p>ニックネーム : <?php echo $records['nickname'];?></p>
   <p>メールアドレス : <?php echo $records['email'];?></p>
   <p>お問い合わせ内容 : <?php echo $records['content'];?></p>
   <hr>
  <?php endforeach; ?>
</body>
</html>
