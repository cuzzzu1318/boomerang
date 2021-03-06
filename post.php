<?php
  $mysqli = new mysqli("localhost", "boomerang", "bo0apfkd!", "boomerang");
  if (isset($_GET['num'])) {
    $post_no = $_GET['num'];
  }else{
    echo '<script>alert("잘못된 접근입니다!");</script>';
    echo("<script>location.replace('list.php');</script>");
  }
  $sql = "
    SELECT * FROM topic WHERE num = $post_no;
  ";
  $result = $mysqli->query($sql);
  if ($result == false) {
  echo $mysqli->error;
  }else{
    if ($result->num_rows > 0) {
      $row = $result->fetch_array(MYSQLI_BOTH);
      $article = array(
        'num' => $row['num'],
        'found' => htmlspecialchars($row['found']),
        'category' => htmlspecialchars($row['category']),
        'title' => htmlspecialchars($row['title']),
        'description' => htmlspecialchars($row['description']),
        'image' => htmlspecialchars($row['image']),
        'id' => htmlspecialchars($row['id']),
        'created' => htmlspecialchars($row['created'])
      );
    }else{
      echo '<script>alert("잘못된 접근입니다!");</script>';
      echo("<script>location.replace('list.php');</script>");
    }

  }


?>

<!DOCTYPE html>
<html lang="ko">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>부메랑</title>
      <link rel="stylesheet" href="post.css">
      <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="top">
        <img class="bmr-back" src="image\go_back_color.svg" alt="뒤로가기" onclick="history.back()">
        <h1>
          <span>게시 글</span>
        </h1>
        <a href="Map.html">
          <div class="top">
            <input type="button" class="bmr-btn" id="open_map" value="지도 보기">
          </div>
        </a>
      </div>
      <div class="bmr-headline"></div>
    </header>

    <div class="wrap">
      <div class="post">
          <?php
          if(($article['found'])=="찾았다") {
            echo <<<found
              <p id="found">{$article['found']}</p>
            found;
          }else {
            echo <<<look
              <p id="look">{$article['found']}</p>
            look;
          }
         ?>
         <p id="category">카테고리 > <?=$article['category']?></p>
          <p id="title"><?=$article['title']?></p>
        <p id="local">작성 시간: <?=$article['created']?></p>
      </div>
      <div id="content" style="border: 1px solid black; min-height: 200px;">
        <font size = "1">위치: 창원대학교</font> <br> <?=$article['description']?>
      </div>
      <div>
      <?php
       if(!empty($article['image'])) {
         echo <<<pic
         <img src="upload/{$article['image']}" id = "pic">
         pic;
       }
      ?>
      </div>
      <div>
        <input type="button" onclick="location.href='list.php'"; id="go_list" class="bmr-btn"value="목록">
      </div>
    </div>
  </body>
</html>
