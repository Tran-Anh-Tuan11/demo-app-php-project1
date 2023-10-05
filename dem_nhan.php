<?php 
  session_start(); // Khởi động phiên làm việc
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } elseif (isset($_POST['count_button'])) {
    $_SESSION['count']++; // Tăng giá trị biến 'count' lên 1
  }
  if(isset($_POST['reset_button'])){
    $_SESSION['count'] = 0; // Đặt lại giá trị biến 'count' về 0
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Đếm số lần nhấn nút</title>
</head>
<body>
  <h1>Số lần nhấn nút: <?php echo $_SESSION['count']; ?></h1>
  <form method="POST">
    <button type="submit" name="count_button">Nhấn vào đây để đếm</button>
    <button type="submit" name="reset_button">Reset</button>
  </form>
</body>
</html>
