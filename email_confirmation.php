<?php
// Подключаем коннект к БД
require_once 'pdo.php';
 
// Проверка есть ли хеш
if ($_GET['hash']) {
    $hash = $_GET['hash'];
    // Получаем id и подтверждено ли Email

    $sql = 'SELECT id, email_confirmed FROM users WHERE hash=:hash';
    $query = $pdo->prepare($sql);
    $query->execute([':hash' => $hash]);
    $user= $query->fetch(PDO::FETCH_ASSOC);

    if (($row["email_confirmed"] == Null) || ($row["email_confirmed"] == 0)) {        
        $sql = "UPDATE users SET email_confirmed=1 WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute([':id' => $user['id']]);
        echo "Email подтверждён";
    }
    else {
        echo "Email уже подтверждён";
    }
} else {
    echo "Что то пошло не так2";
}
?>