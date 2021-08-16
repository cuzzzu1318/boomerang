<!DOCTYPE html>
<html lang="ko" dir="ltr">
<?php
  $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
  $filterd = array(
    'title'=>$mysqli->real_escape_string($_POST['title']),
    'content'=>$mysqli->real_escape_string($_POST['content'])
  );
  $sql = "
  INSERT INTO topic
    (category, title, description, picture,  writer, created)
    VALUES(
      '{$_POST['select']}',
      '{$filterd['title']}',
      '{$filterd['content']}',
      '{$_POST['picture']}',
      'cuzzzu1318',
      NOW()
    )
";
echo $sql;
$result = $mysqli->query($sql);
if ($result == false) {
  echo $mysqli->error;
}else{
    echo "<br>글 제목: ".$filterd['title']."</br>";
    echo "<br>글 내용: ".$filterd['content']."</br>";

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
