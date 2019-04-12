<?php
$table = $_SESSION['table'];
$id = $_GET['delete'];
$row = $db->selectById($table,$id);
$db->delete($table,$id);
$_SESSION['headerInfo'] = "Вы удалили   " . $row['description'];
header("location: admin.php?show=phones");


