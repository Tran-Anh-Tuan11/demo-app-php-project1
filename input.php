<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
echo "<h2>Demo Project I!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Link FB: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <?php
  echo "<br>";
  // define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  
  // Check if variables contain values
  if(!empty($name)) {
    $name_display = "Name: " . $name;
    echo $name_display . "<br>";
  }
  if(!empty($email)) {
    $email_display = "Email: " . $email;
    echo $email_display . "<br>";
  }
  if(!empty($website)) {
    $website_display = "Website: " . $website;
    echo $website_display . "<br>";
  }
  if(!empty($comment)) {
    $comment_display = "Comment: " . $comment;
    echo $comment_display . "<br>";
  }
  if(!empty($gender)) {
    $gender_display = "Gender: " . $gender;
    echo $gender_display . "<br>";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</form>

</body>
</html>
