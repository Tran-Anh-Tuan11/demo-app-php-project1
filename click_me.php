<html>
<head>
<title>Multiple Button Example</title>
</head>
<body>
<?php
    if(isset($_POST['button1'])) {
        echo "You clicked Button 1"; // Thông báo sẽ được hiển thị khi người dùng nhấn nút Button 1
    }
    if(isset($_POST['button2'])) {
        echo "You clicked Button 2"; // Thông báo sẽ được hiển thị khi người dùng nhấn nút Button 2
    }
?>
<form method="post">
    <input type="submit" name="button1" value="Button 1"/> <!-- Nút "Button 1" sẽ được hiển thị trên trang web -->
    <input type="submit" name="button2" value="Button 2"/> <!-- Nút "Button 2" sẽ được hiển thị trên trang web -->
</form>
</body>
</html>
