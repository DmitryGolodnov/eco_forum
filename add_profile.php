<?php
require_once "pdo.php";
session_start();
if ( ! isset($_SESSION['login']) ) {
    die('Not logged in');
}

if ( isset($_POST['title'])) {

  $upload_image = $_FILES['img']['name'];

 $folder = "images/";
 $path = "$folder".$upload_image;
 $file = $_FILES['img'];
  if (move_uploaded_file($file['tmp_name'], $path)) {
    $_SESSION['test'] = "true";
  }
  else {
    $_SESSION['test'] = "false";
  }


    $stmt = $pdo->prepare('INSERT INTO detmash
      (title, task, login, img_name, img_path, price)
      VALUES ( :title, :task, :login, :img_name, :img_path, :price)');

    $stmt->execute(array(
      ':title' => $_POST['title'],
      ':task' => $_POST['task'],
      ':login' => $_SESSION['login'],
      ':img_name' => $upload_image,
      ':img_path' => $path,
      ':price' => $_POST['price']
    ));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: add_profile.php' ) ;
    return;
}

// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
if ( isset($_SESSION['test']) ) {
    echo '<p style="color:green">'.$_SESSION['test']."</p>\n";
    unset($_SESSION['test']);
}
?>
<p>Add A New Kursach</p>
<form method="post" ENCTYPE="multipart/form-data" action="<?php echo $PHP_SELF; ?>">
  <p>Название:
  <input type="text" name="title" size="60"/></p>
  <p>Фото:<br/>
  <input type="file" name="img"/></p>
  <p>Цена:<br/>
  <input type="text" name="price" size="80"/></p>
  <p>Текст:<br/>
  <textarea name="task" rows="8" cols="80"></textarea>
  <p>
<p><input type="submit" value="Add New"/>
</form>
