<html>
<body>
  <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["ename"];
  $email = $_POST["email"];
}
?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name : <input type="text" name="ename"><br>
    <br>
    Email : <input type="email" name="email"><br>
    <br>
    <input type="submit">
  </form>
  <?php
    echo "Welcome<br>";
    echo $name;
    echo "<br>Your email is<br>";
    echo $email;
  ?>
</body>
</html>
