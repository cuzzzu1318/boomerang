<?php
$conn = mysqli_connect('localhost', 'root', 'wo5gh3gk', 'boomerang');
$id = $_POST['id'];//입력한 내용
$password = $_POST['password'];//입력한 내용

//DB 정보 가져오기
$sql = "SELECT * FROM user_info WHERE id= '{$id}'";
$result = mysqli_query($conn, $sql);

//DB정보 배열에 저장
$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];
$row['id'];

foreach($row as $key => $r){
    //echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['userId'] = $row['id'];
    //print_r($_SESSION);
    //echo $_SESSION['userId'];
?>
<script>
        alert("로그인에 성공하였습니다.")
        location.href = "main.php";
</script>
<?php
}else{
  //로그인 실패
 ?>
<script>
  alert("로그인에 실패하였습니다.")
  location.href = "login.php";
</script>
<?php
}
 ?>
