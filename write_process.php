<?php
function GetUniqFileName($FN, $PN)
{
  $FileExt = substr(strrchr($FN, "."), 1);
  $FileName = substr($FN, 0, strlen($FN) - strlen($FileExt) - 1);
  $FileCnt=0;
  $ret = "$FileName.$FileExt";
  while(file_exists($PN."/".$ret))
  {
    $FileCnt++;
    $ret = $FileName."_".$FileCnt.".".$FileExt;
  }

  return($ret);
}


  $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
  if (empty($_POST['title'])==false&&empty($_POST['content'])==false) {
    $filterd = array(
      'title'=>$mysqli->real_escape_string($_POST['title']),
      'content'=>$mysqli->real_escape_string($_POST['content'])
    );
    if (!empty($_FILES['image']['name'])) {
      $dir = './image';
      $name = GetUniqFileName($_FILES['image']['name'], $dir);
      move_uploaded_file($_FILES['image']['tmp_name'], "$dir/$name");
      $sql = "
      INSERT INTO topic
        (category, title, description, image, id, created)
        VALUES(
          '{$_POST['select']}',
          '{$filterd['title']}',
          '{$filterd['content']}',
          '{$name}',
          'cuzzzu1318',
          NOW()
        )
      ";
    }else{
      $sql = "
      INSERT INTO topic
        (category, title, description, id, created)
        VALUES(
          '{$_POST['select']}',
          '{$filterd['title']}',
          '{$filterd['content']}',
          'cuzzzu1318',
          NOW()
        )
      ";
    }
    $result = $mysqli->query($sql);
    if ($result == false) {
      echo $mysqli->error;
    }else{
        echo("<script>location.replace('post.php?num=$mysqli->insert_id');</script>");
      }
  }else{
    echo '<script>alert("제목과 내용을 입력해 주세요!");</script>';
    echo("<script>location.replace('write.html');</script>");
  }


 ?>
