<?php
require_once '../model/model.php';

$str = edit($_GET['id']);

require_once '../view/editForm.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    update($_POST['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);
    header("location:index.php");
}
