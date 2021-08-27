<?php
    $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
    if (isset($_GET['cur_page'])) {
      $cur_page = $_GET['cur_page'];
    }else {
      $cur_page = 1;
    }
    $show = 10;
    $start = (($cur_page-1)*$show);

    function getTitle($title){
      if (mb_strlen($title, "UTF-8")>10) {
        return mb_substr($title,0, 10, "UTF-8")."...";
      }else{
        return $title;
      }

    }
    $sql = "
      SELECT COUNT(*) FROM topic;
    ";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"
    name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
    maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="mylist.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="top">
        <img class="bmr-back" src="image\go_back.svg" alt="뒤로가기" onclick="history.back()">
        <h1>
          <span>MY 게시글</span>
        </h1>
      </div>
    </header>

    <div class="wrap">
      <span class="count">
        총 <?=$row[0]?>개의 게시글이 있습니다.
      </span>
        <div class="div-table">
        <table>
          <thead>
            <tr>
              <th scope="col">번호</th>
              <th scope="col">분류</th>
              <th scope="col">제목</th>
              <th scope="col">시간</th>
            </tr>
          </thead>
          <?php
          $sql = "
            SELECT * FROM topic ORDER BY num DESC LIMIT $start, $show ;
          ";
          $result = $mysqli->query($sql);
          if ($result == false) {
          echo $mysqli->error;
          }else{
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_array()) {
                $article = array(
                  'num' => $row['num'],
                  'found' => htmlspecialchars($row['found']),
                  'category' => htmlspecialchars($row['category']),
                  'title' => getTitle(htmlspecialchars($row['title'])),
                  'description' => htmlspecialchars($row['description']),
                  'image' => htmlspecialchars($row['image']),
                  'id' => htmlspecialchars($row['id']),
                  'created' =>($row['created'])
                );

              ?>

              <tbody>
               <tr style="height: 20px; cursor: pointer;" onclick="location.replace('post.php?num=<?=$row['num']?>');">
                 <td style="text-align: center;"><?=$article['num']?></td>
                 <?php
                 if(($article['found'])=="찾았다") {
                   echo <<<found
                     <td id="found" style="text-align: center">{$article['found']}</td>
                   found;
                 }else {
                   echo <<<look
                     <td id="look" style="text-align: center">{$article['found']}</td>
                   look;
                 }
                ?>
                 <td><?=$article['title']?>
                   <?php
                    if(!empty($article['image'])) {
                      echo "<img src=\"image/have_image.svg\" id = \"img_icon\">";
                    }
                   ?>
                 </td>
                 <td style="font-size: 12px;"><?=substr($article['created'], 0, 10)?></td>
               </tr>
              </tbody>
              <?php
            }
            }
          }
           ?>
        </table>
      </div>
      <div id="page">
        <div id="prev">
          <?php
          if ($cur_page>1) {
            $prev_page = $cur_page-1;
            echo "
            <a href=\"mylist.php?cur_page=$prev_page\">이전</a>
            ";
          }
          ?>
        </div>
        <div id="pages">
          <?php
          $sql = "
            SELECT COUNT(*) FROM topic;
          ";
          $result = $mysqli->query($sql);
          $row = $result->fetch_array();
          $page = 1;
          for ($count=0; $count < $row[0]; $count++) {
            if ($count%10==1) {
              if ($cur_page==$page) {
                echo "
                <a style=\"width: 15px; height: 10px;border: 1px solid #CCC;\" href=\"list.php?cur_page=$page\">$page</a>
                ";
              }
              else {
                echo "
                <a href=\"mylist.php?cur_page=$page\">$page</a>
                ";
              }
              $page++;
            }
          }
          ?>
        </div>
        <div id="next">
          <?php
          if ($cur_page<$page-1) {
            $next_page = $cur_page+1;
            echo "
            <a href=\"mylist.php?cur_page=$next_page\">다음</a>
            ";
          }
           ?>
        </div>
      </div>

      <footer>
        <div class="bottom-bar">
          <button type="button" class="bar" onclick="location.href='main.html'">
            <span class="bar-inner">
              <img src="image/ico_home.svg" class="ico">
            </span>
          </button>
          <button type="button" class="bar" onclick="location.href='Map.html'">
            <span class="bar-inner">
              <img src="image/ico_map.svg" class="ico">
            </span>
          </button>
          <button type="button" class="bar" onclick="location.href='list.php'">
            <span class="bar-inner">
              <img src="image/ico_list.svg" class="ico">
            </span>
          </button>
          <button type="button" class="bar" onclick="location.href='mypage.html'">
            <span class="bar-inner">
              <img src="image/ico_mypage.svg" class="ico">
            </span>
          </button>
        </div>
      </footer>
  </body>
</html>
