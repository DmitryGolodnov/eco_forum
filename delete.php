<?php
require_once "pdo.php";
session_start();
if ( ! isset($_SESSION['login']) ) {
    die('Not logged in');
}

if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $sql = "DELETE FROM detmash WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':id' => $_POST['id']));
    $_SESSION['success'] = 'Record deleted';
    header( 'Location: index.php' ) ;
    return;
}


$stmt = $pdo->prepare("SELECT title, id, login FROM detmash where id = :id");
$stmt->execute(array(":id" => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row['login'] != $_SESSION['login']) {
  die('Not logged in');
}
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for user_id';
    header( 'Location: index.php' ) ;
    return;
}

?>
<p>Confirm: Deleting <?= htmlentities($row['title']) ?></p>

<form method="post">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="submit" value="Delete" name="delete">
<a href="index.php">Cancel</a>
</form>
