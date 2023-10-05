<!DOCTYPE html>
<html>
<head>
  <title>Chuyển trang web</title>
</head>
<body>
  <h1>Chọn chức năng muốn thử</h1>
  <form method="POST">
    <button type="submit" name="button1">Thêm phim yêu thích</button>
    <button type="submit" name="button2">Chọn nhấn button</button>
    <button type="submit" name="button3">Đếm số lần nhấn</button>
  </form>
  <?php 
    if (isset($_POST['button1'])) {
      header("Location: add_movie.php"); // Chuyển đến trang web 1
      exit;
    } elseif (isset($_POST['button2'])) {
      header("Location: click_me.php"); // Chuyển đến trang web 2
      exit;
    } elseif (isset($_POST['button3'])) {
      header("Location: dem_nhan.php"); // Chuyển đến trang web 3
      exit;
    }
  ?>
</body>
</html>
