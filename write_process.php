<?php
  $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
  if (empty($_POST['title'])==false&&empty($_POST['content'])==false) {
    $filterd = array(
      'title'=>$mysqli->real_escape_string($_POST['title']),
      'content'=>$mysqli->real_escape_string($_POST['content'])
    );
    if (isset($_POST['image'])) {
      $sql = "
      INSERT INTO topic
        (category, title, description, image,  id, created)
        VALUES(
          '{$_POST['select']}',
          '{$filterd['title']}',
          '{$filterd['content']}',
          '{$_POST['image']}',
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
        $insert_id = $mysqli->insert_id;
        echo("<script>location.replace('post.php?num=$insert_id');</script>");
      }
  }else{
    echo '<script>alert("제목과 내용을 입력해 주세요!");</script>';
    echo("<script>location.replace('write.html');</script>");
  }


 ?>
