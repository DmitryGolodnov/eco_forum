<?php
require_once 'pdo.php';
session_start();
 
// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['send_email'])) {

    $email = $_POST['email'];
    $sql = 'SELECT * FROM users WHERE email=:email';
    $query = $pdo->prepare($sql);
    $query->execute([':email' => $email]);
    $user= $query->fetch();
    if (isset($user)) {
        
        // New hash creation
        $hash = md5($email . time());

        $_SESSION['password_recovery'] = $email;
        
        // $headers
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <$email>\r\n";
        $headers .= "From: <mail@example.com>\r\n";
        // Email messange
        $message = '
                <html>
                <head>
                <title>Password recovery</title>
                </head>
                <body>
                <p>To change password follow <a href="http://example.com/newpass.php?hash=' . $hash . '"> link</a></p>
                </body>
                </html>
                ';
        
        // Change db hash
        $sql = "UPDATE users SET hash='$hash' WHERE email=:email";
        $query = $pdo->prepare($sql);
        $query->execute([':email' => $email]);

        mail($email, "Password recovery", $message, $headers);
        echo "Email has been sent. Follow the instructions."; 
    }
    else {
        echo "Email not found"; 
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password recovery</title>
</head>

<body>
    <form method="post">
        <p>Email: <input type="email" name="email"></p>
        <p><input type="submit" value="Send" name="send_email"></p>
    </form>
</body>

</html>