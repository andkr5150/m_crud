<?php
require_once '../model/model.php';

$str = edit($_GET['id']);

require_once '../view/editForm.php';

if (isset($_POST['name_ed']) && isset($_POST['description_ed']) && isset($_POST['created_at_ed'])) {
    update($_POST['id_ed'], $_POST['name_ed'], $_POST['description_ed'], $_POST['created_at_ed']);
    header("location:index.php");
}
