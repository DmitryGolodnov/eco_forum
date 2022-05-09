<?php
require_once "pdo.php";
session_start();
if ( ! isset($_SESSION['login']) ) {
    die('Not logged in');
}

if ( isset($_POST['title']) && isset($_POST['task'])
     && isset($_POST['img']) && isset($_POST['price'])
     && isset($_POST['id'])) {
    /*if ( $_POST['plays'] + 0 <= 0 || $_POST['rating'] + 0 <= 0 ||
        strlen($_POST['title']) < 1) {
        $_SESSION['error'] = 'Bad value for title, plays or rating';
        header( 'Location: index.php' ) ;
        return;
    }*/
    $sql = "UPDATE detmash SET title = :title,
            task = :task, img = :img, price = :price
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':title' => $_POST['title'],
        ':task' => $_POST['task'],
        ':img' => $_POST['img'],
        ':price' => $_POST['price'],
        ':id' => $_POST['id']));
    $_SESSION['success'] = 'Record updated';
    header( 'Location: index.php' ) ;
    return;
}

$stmt = $pdo->prepare("SELECT * FROM detmash where id = :id");
$stmt->execute(array(":id" => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row['login'] != $_SESSION['login']) {
  die('Not logged in');
}
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for id';
    //header( 'Location: index.php' ) ;
    return;
}

$title = htmlentities($row['title']);
$task = htmlentities($row['task']);
$img = htmlentities($row['img']);
$price = htmlentities($row['price']);
$id = $row['id'];
?>
<html><head></head><body>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>
<p>Edit Record</p>
<form method="post">
<p>Title:
<input type="text" name="title" value="<?= $title ?>"></p>
<p>Текст:<br/>
<textarea name="task" rows="8" cols="80"><?= $task ?></textarea>
<p>
<p>Img:
<input type="text" name="img" value="<?= $img ?>"></p>
<p>Price:
<input type="text" name="price" value="<?= $price ?>"></p>
<input type="hidden" name="id" value="<?= $id ?>">
<p><input type="submit" value="Update"/>
<a href="index.php">Cancel</a></p>
</form>
