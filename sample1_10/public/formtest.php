<?php
$dbh = new PDO('mysql:host=mysql;dbname=techc', 'root', '');

if (isset($_POST['body'])) {
  // POSTで送られてくるフォームパラメータ body がある場合

  // insertする
  $insert_sth = $dbh->prepare("INSERT INTO bbs_entries (body) VALUES (:body)");
  $insert_sth->execute([
      ':body' => $_POST['body'],
  ]);

  // 処理が終わったらリダイレクトする
  // リダイレクトしないと，リロード時にまた同じ内容でPOSTすることになる
  header("HTTP/1.1 302 Found");
  header("Location: ./formtest.php");
  return;
}

?>

<!-- フォームのPOST先はこのファイル自身にする -->
<form method="POST" action="./formtest.php">
  <textarea name="body"></textarea>
  <button type="submit">送信</button>
</form>
