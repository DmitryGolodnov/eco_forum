<?php
require_once "pdo.php";
session_start();
?>
<html>
<head>
</head><body>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
if (isset($_SESSION["login"])) {
echo('<div>'.$_SESSION["login"].'</div>');
echo('<div><a href="logout.php">Log Out</a></div>');
}
else {
echo('<div>
<a href="registration.php">Регистрация</a>
<a href="authorization.php">Авторизация</a>
</div>');
}
$stmt = $pdo->query("SELECT id, title, task, img_name, img_path, login, time, price FROM detmash");
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<h1>";
    echo(htmlentities($row['title']));
    echo("</h1><div>");
    echo(htmlentities($row['task']));
    echo("</div><div>");
    echo("<img  src='");
    echo(htmlentities($row['img_path']));
    echo("'>");
    //echo("src = htmlentities($row['img_path']"));
    echo("</div><div>");
    echo(htmlentities($row['img_name']));
    echo("</div><div>");
    echo(htmlentities($row['login']));
    echo("</div><div>");
    echo(htmlentities($row['time']));
    echo("</div><div>");
    echo(htmlentities($row['price']));
    echo("</div>");
    if (isset($_SESSION['login']) && $row['login'] == $_SESSION["login"]) {
    echo('<a href="edit.php?id='.$row['id'].'">Edit</a> / ');
    echo('<a href="delete.php?id='.$row['id'].'">Delete</a>');
    }
    }
?>

<a href="add_profile.php">ADD_kursach</a>
