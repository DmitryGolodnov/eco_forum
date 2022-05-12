<?php
// Подключаем коннект к БД
require_once 'pdo.php';
session_start();

// Проверка есть ли хеш
if ($_GET['hash']) {

    echo 
    '
        <form method="post">
            <p>New password: <input type="password" name="password"></p>
            <p><input type="submit" value="Submit" name="submit"></p>
        </form>
    ';

    $hash = $_GET['hash'];

    // Получаем id и подтверждено ли Email
    
    $sql = 'SELECT email FROM users WHERE hash=:hash';
    $query = $pdo->prepare($sql);
    $query->execute([':hash' => $hash]);
    $user= $query->fetch(PDO::FETCH_ASSOC);

    if ($_SESSION['password_recovery'] == $user['email']) {
        if (isset($_POST['password'])) {
            
            if ( strlen($_POST['password']) < 6) {
                $_SESSION['error'] = 'Minimum password length 6 characters!';
                header("Location: new_password.php?hash=".$hash);
                return;
            }

            $password = hash('md5', $salt.$_POST['password']);

            $sql = "UPDATE users SET password=:password WHERE hash=:hash";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                ':password' => $password,
                ':hash' => $hash
            ));
            unset($_SESSION['password_recovery']);
            echo "Password has been changed!";
        }        
    }
    else {
        die('<p>To recover your password <a href="password_recovery.php">go here</a></p>');
    }  
}
else {
    echo '<p>To recover your password <a href="password_recovery.php">go here</a></p>';
}

// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>