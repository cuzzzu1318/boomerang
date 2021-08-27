<?php
$conn = mysqli_connect('localhost', 'root', 'wo5gh3gk', 'boomerang');
$tel = mysqli_real_escape_string($conn, $_POST['tel']);


$sql = "SELECT * FROM user_info WHERE tel = '{$tel}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
if(isset($row['id'])){
  echo ("회원님의 ID는 ");
  echo ($row['id']);
  echo (" 입니다.");
}
else{
  echo ("회원님의 정보가 없습니다.");
}
?>
