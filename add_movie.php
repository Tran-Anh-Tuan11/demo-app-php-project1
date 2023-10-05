<?php
session_start();

if (!isset($_SESSION['movie_list'])) {
  $_SESSION['movie_list'] = array(); // Tạo một mảng rỗng để lưu danh sách các phim
}

function add_movie($movie_name, &$movie_list) {
  if (!in_array($movie_name, $movie_list)) { // Kiểm tra phim đã tồn tại trong danh sách chưa
    array_push($movie_list, $movie_name); // Thêm phim vào danh sách
  }
}

function remove_movie($movie_name, &$movie_list) {
  $index = array_search($movie_name, $movie_list); // Tìm kiếm phim trong danh sách
  if ($index !== false) { // Nếu tìm thấy phim
    unset($movie_list[$index]); // Xóa phim khỏi danh sách
    $movie_list = array_values($movie_list); // Sắp xếp lại các phần tử trong danh sách
  }
}

if (isset($_POST['add_movie'])) {
  $movie_name = $_POST['movie_name'];
  add_movie($movie_name, $_SESSION['movie_list']);
}

if (isset($_POST['remove_movie'])) {
  $movie_name = $_POST['movie_name'];
  remove_movie($movie_name, $_SESSION['movie_list']);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Quản lý phim yêu thích</title>
</head>
<body>
  <h1>Danh sách phim yêu thích</h1>
  <ul>
    <?php foreach ($_SESSION['movie_list'] as $movie) { ?>
      <li><?php echo $movie; ?></li>
    <?php } ?>
  </ul>
  <h2>Thêm phim yêu thích</h2>
  <form method="post">
    <label for="movie_name">Tên phim:</label>
    <input type="text" name="movie_name" id="movie_name">
    <button type="submit" name="add_movie">Thêm</button>
  </form>
  <h2>Xóa phim yêu thích</h2>
  <form method="post">
    <label for="movie_name">Tên phim:</label>
    <select name="movie_name" id="movie_name">
      <?php foreach ($_SESSION['movie_list'] as $movie) { ?>
        <option value="<?php echo $movie; ?>"><?php echo $movie; ?></option>
      <?php } ?>
    </select>
    <button type="submit" name="remove_movie">Xóa</button>
  </form>
</body>
</html>
