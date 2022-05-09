<?php
require_once "pdo.php";
    session_start();

    if ( $_POST['login'] !='' && $_POST['password'] !='') {
      //unset($_SESSION["login"]);

    $sql = "SELECT * FROM users
        WHERE login = :l AND password = :pw";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':l' => $_POST['login'],
        ':pw' => $_POST['password']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ( $row === FALSE ) {
      $sql = "SELECT * FROM users
          WHERE email = :em AND password = :pw";

      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
          ':em' => $_POST['login'],
          ':pw' => $_POST['password']));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if ( $row === FALSE ) {
      $sql = "SELECT * FROM users
          WHERE phone = :ph AND password = :pw";

      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
          ':ph' => $_POST['login'],
          ':pw' => $_POST['password']));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }


   if ( $row === FALSE ) {
      $_SESSION["error"] = "Incorrect password.";
      header( 'Location: authorization.php' ) ;
      $check = crypt($_POST['password']);
      error_log("Login fail ".$_POST['login']." $check");
      return;
   }
   else {
     $sql = "SELECT * FROM users
         WHERE login = :l AND password = :pw";

     $stmt = $pdo->prepare($sql);
     $stmt->execute(array(
         ':l' => $_POST['login'],
         ':pw' => $_POST['password']));
     $row = $stmt->fetch(PDO::FETCH_ASSOC);

      $_SESSION["login"] = $_POST["login"];
      $_SESSION["success"] = "Logged in.";
      $_SESSION["id"] = urlencode($row["id"]);
      header( 'Location: index.php' ) ;
      error_log("Login success ".$_POST['login']);
      return;
   }
 }

if ( $_POST['login'] == '' && $_POST['password'] == '') {
  if (isset($_POST['login'])) {
echo "<p>Email and password are required</p>";
}
}
?>
<html>

<head>
    <title>Sign in</title>
</head>
<a>Please Log In</a>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
?>
<form method="POST">
    <p>login:
        <input type="text" size="40" name="login">
    </p>
    <p>Password:
        <input type="text" size="40" name="password">
    </p>
    <p><input type="submit" value="Log In" name="log" />
        <a href="logout.php">Log Out</a>
</form>

</html>