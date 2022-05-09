<?php
  require_once "pdo.php";
  session_start();

  if (isset($_POST['nickname'])
    && isset($_POST['email'])
    && isset($_POST['password'])) {

    // Data validation
    if ( strlen($_POST['nickname']) < 6) {
      $_SESSION['error'] = 'Minimum nickname length 6 characters!';
      header("Location: registration.php");
      return;
    }

    $nickname = $_POST['nickname'];
    $sql = 'SELECT * FROM users WHERE nickname=:nickname';
    $query = $pdo->prepare($sql);
    $query->execute([':nickname' => $nickname]);
    $user= $query->fetch();
    if ($user) { 
      $_SESSION['error'] = 'Nickname has already been taken!';
      header("Location: registration.php");
      return;
    }

    $email = $_POST['email'];
    $sql = 'SELECT * FROM users WHERE email=:email';
    $query = $pdo->prepare($sql);
    $query->execute([':email' => $email]);
    $user= $query->fetch();
    if ($user) { 
      $_SESSION['error'] = 'User with this email already exists!';
      header("Location: registration.php");
      return;
    }

    if ( strlen($_POST['password']) < 6) {
      $_SESSION['error'] = 'Minimum password length 6 characters!';
      header("Location: registration.php");
      return;
    }

    if ( strpos($_POST['email'],'@') === false ) {
      $_SESSION['error'] = 'Bad data';
      header("Location: registration.php");
      return;
    }    

    $sql = "INSERT INTO users (nickname, email, password)
    VALUES (:nickname, :email, :password)";
    $check = hash('md5', $salt.$_POST['password']);
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':nickname' => $_POST['nickname'],
      ':email' => $_POST['email'],
      ':password' => $check
    ));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: index.html' ) ;
    return;
  }

  // Flash pattern
  if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
  }
?>
<html>

<head></head>

<body>
    <p>Sign up</p>
    <form method="post">
        <p>Nickname:
            <input type="text" name="nickname">
        </p>
        <p>Email:
            <input type="text" name="email">
        </p>
        <p>Password:
            <input type="password" name="password">
        </p>
        <p><input type="submit" value="Add New" /></p>
    </form>
</body>