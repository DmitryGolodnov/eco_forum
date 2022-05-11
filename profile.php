<?php
require_once "pdo.php";
session_start();
if ( ! isset($_SESSION['logged_in']) ) {
    die('Not logged in');
}

if ($_SESSION['email_confirmed'] == NULL){
    echo 
    '<form method="post">
        <p>
            <input type="submit" value="Confirm email" name="Confirm_email">
        </p>
    </form>';

    if (isset($_REQUEST['Confirm_email'])) {

        $sql = 'SELECT hash FROM users WHERE email=:email';
        $query = $pdo->prepare($sql);
        $query->execute([':email' => $_SESSION['email']]);
        $hash= $query->fetch();

        
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <:".$_SESSION['email'].">\r\n";
        $headers .= "From: <mail@example.com>\r\n";

        $message = '
                <html>
                <head>
                <title>Подтвердите Email</title>
                </head>
                <body>
                <p>Что бы подтвердить Email, перейдите по <a href="http://example.com/confirmed.php?hash=' . $hash . '">ссылка</a></p>
                </body>
                </html>
                ';
        
        mail($email, "Подтвердите Email на сайте", $message, $headers);
        echo 'Подтвердите на почте';
    }
}

?>



<p>Hello</p>