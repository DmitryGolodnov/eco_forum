<?php
require_once "pdo.php";
    session_start();

    if ( $_POST["email"] !="" && $_POST["password"] !="") {
      unset($_SESSION["email"]);
      if (stripos($_POST["email"], "@") === FALSE) {
        $_SESSION["error"] = "Email must have an at-sign (@)";
        header( "Location: authorization.php" ) ;
        return;
    }
      else {

        $sql = "SELECT * FROM users
            WHERE email = :email AND password = :password";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ":email" => $_POST["email"],
            ":password" => hash('md5', $salt.$_POST['password'])));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


       if ( $row === FALSE ) {
          $_SESSION["error"] = "Incorrect password.";
          header( "Location: login.php" ) ;
          $check = crypt($_POST["password"]);
          error_log("Login fail ".$_POST["email"]." $check");
          return;
       }
       else {         
          $_SESSION["nickname"] = $row['nickname'];
          $_SESSION["email"] = $_POST["email"];
          $_SESSION["logged_in"] = "Success";
          $_SESSION["id"] = urlencode($row['id']);
          header( "Location: index.php" );
          error_log("Login success ".$_POST["email"]);
          return;
       }
    }
    }
    if ( $_POST["email"] =="" || $_POST["password"] =="") {
        if (isset($_POST["Login"])) {
            $_SESSION["error"] = "Email and password are required";
            header( "Location: authorization.php" ) ;
            return;
        }
    }

?>
<html>

<head>
    <title>Sign In</title>
</head>

<body>
    <div class="container">
        <a>Please Log In</a>
        <?php
    if ( isset($_SESSION["error"]) ) {
        echo('<p style="color:red">'.$_SESSION["error"].'</p>\n');
        unset($_SESSION["error"]);
    }
?>
        <div class="container">
            <form method="post">
                <p>Email: <input type="text" name="email" value=""></p>
                <p>Password: <input type="text" name="password" value=""></p>
                <a href="password_recovery.php">Forgot password?</a>
                <p><input type="submit" name="Login" value="Log In">
                    <a href="add.php">Add New</a>
            </form>
</body>