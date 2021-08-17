<?php
  $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
  $post_no = $_GET['num'];
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
        'category' => htmlspecialchars($row['category']),
        'title' => htmlspecialchars($row['title']),
        'description' => htmlspecialchars($row['description']),
        'picture' => htmlspecialchars($row['picture']),
        'id' => htmlspecialchars($row['id']),
        'created' => htmlspecialchars($row['created'])
      );
    }else{
      echo '<script>alert("잘못된 접근입니다!");</script>';
      echo("<script>location.replace('list.html');</script>");
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
        <img class="bmr-back" src="이미지\뒤로가기.svg" alt="뒤로가기" onclick="history.back()">
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
        <p id="title"><?=$article['title']?></p>
        <p id="category">카테고리 > <?=$article['category']?></p>
        <p id="local">위치 : 경상남도 창원시 의창구 창원대학로 20</p>
      </div>
      <div>
        <textarea name="content" class="bmr-text-light" id="content" cols="30" rows="10" disabled><?=$article['description']?></textarea>
      </div>
      <div>
        <input type="image" class="bmr-text-light" id="content" value="사진" disabled>
      </div>
    </div>
  </body>
</html>
