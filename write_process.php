<!DOCTYPE html>
<html lang="ko" dir="ltr">
<?php
  $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
  $filterd_title = $mysqli->real_escape_string($_POST['title']);
  $filterd_content = $mysqli->real_escape_string($_POST['content']);
  $sql = "
  INSERT INTO topic
    (category, title, description, picture,  writer, created)
    VALUES(
      '{$_POST['select']}',
      '{$filterd_title}',
      '{$filterd_content}',
      '{$_POST['picture']}',
      'cuzzzu1318',
      NOW()
    )
";
$result = $mysqli->query($sql);
if ($result == false) {
  echo $mysqli->error;
}else{
    echo "글 제목: ".$_POST['title'];
    echo "글 내용: ".$_POST['content'];
    var_dump($_POST['picture']);

}
 ?>
<head>
  <title>부메랑 - 글 쓰기 정보</title>
  <meta charset="utf-8"
  name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
  maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>


</body>

</html>
