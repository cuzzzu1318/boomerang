<?php
    $mysqli = new mysqli("localhost", "root", "bo0apfkd", "boomerang");
    if (isset($_GET['cur_page'])) {
      $cur_page = $_GET['cur_page'];
    }else {
      $cur_page = 1;
    }
    $show = 10;
    $start = (($cur_page-1)*$show);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"
name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="list.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="top" class="div-logo">
    <img src="이미지\부메랑 로고.svg" class="bmr-logo" onclick="location.href='main.html'">
    <input type="image" class="bmr-back" src = "이미지\뒤로가기.svg" img onclick="history.back()">
  </div>
  <div class="div-search">
    <input type="text" class="search" placeholder="검색">
    <img src="이미지\돋보기.svg" class="searchimg" alt="검색">
    <select name="sort" class="bmr-slc" id="sort">
      <option value="">정렬</option>
      <option value="찾았다">찾았다</option>
      <option value="찾는다">찾는다</option>
    </select>
  </div>
  <div class="div-table">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">번호</th>
        <th scope="col">제목</th>
        <th scope="col">작성자</th>
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
            'category' => htmlspecialchars($row['category']),
            'title' => htmlspecialchars($row['title']),
            'description' => htmlspecialchars($row['description']),
            'image' => htmlspecialchars($row['image']),
            'id' => htmlspecialchars($row['id']),
            'created' => htmlspecialchars($row['created'])
          );
        ?>

        <tbody>
         <tr style="height: 20px; cursor: pointer;" onclick="location.replace('post.php?num=<?=$row['num']?>');">
           <td><?=$article['num']?></td>
           <td><?=$article['title']?>
             <?php
              if(!empty($article['image'])) {
                echo "<img src=\"이미지/이미지 유.svg\">";
              }
             ?>
           </td>
           <td><?=$article['id']?></td>
         </tr>
        </tbody>
        <?php
      }
      }
    }
     ?>
  </table>
  </div>
  <div class="div-writebtn">
    <input type="button" class="bmr-btn" id="writebtn"   value="글쓰기" onclick="location.href='write.html'" style="cursor:pointer ">
  </div>
</body>
</html>
