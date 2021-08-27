<?php
$conn = mysqli_connect('localhost', 'root', 'bo0apfkd', 'boomerang');
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'password'=>mysqli_real_escape_string($conn, $hashedPassword),
  'nickname'=>mysqli_real_escape_string($conn, $_POST['nickname']),
  'tel'=>mysqli_real_escape_string($conn, $_POST['tel']),
  'area'=>mysqli_real_escape_string($conn, $_POST['area'])
);


$sql = "
  INSERT INTO user_info (id, password, nickname, tel, area)
  VALUES (
    '{$filtered['id']}',
    '{$filtered['password']}',
    '{$filtered['nickname']}',
    '{$filtered['tel']}',
    '{$filtered['area']}'
  )
";

$result = mysqli_query($conn, $sql);
if($result == false){
  echo '회원가입중 문제가 생겼습니다. 관리자에게 문의해주세요';
  print_r(mysqli_error($conn));
}
else{
  echo '회원가입 성공. <a href="signup.php">돌아가기</a>';
}
 ?>
