<?php
  // var_dump($_POST['nickname']);
  $nickname = htmlspecialchars($_POST['nickname'],ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'],ENT_QUOTES, 'UTF-8');
  $content = htmlspecialchars($_POST['content'],ENT_QUOTES, 'UTF-8');

 
  if ($nickname === '') {
    $nickname_result = '入力されていません。';
  } else {
    $nickname_result = $nickname;
  }
  // メールアドレス
  if ($email == '') {
    $email_result = '入力されていません。';
  } else {
    $email_result = $email;
  }
  // お問い合わせ内容
  if ($content == '') {
    $content_result = '入力されていません。';
  } else {
    $content_result = $content;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $content_result; ?></p>
  <form method="post" action="thanks.php">
      <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="content" value="<?php echo $content; ?>">

      <input type="button" onclick="history.back()" value="戻る">
      <?php if ($nickname !== '' && $email !== '' && $content !== ''): ?>
        <input type="submit" value="OK">
      <?php endif; ?>
  </form>
</body>
</html>