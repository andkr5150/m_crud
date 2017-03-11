<?php
require_once '../model/model.php';

$ss = $_POST;
var_dump($ss);


if ( !empty($_POST['id_ed']) && !empty($_POST['name_ed']) && !empty($_POST['description_ed']) && !empty($_POST['created_at_ed'])){
    update($_POST['id_ed'], $_POST['name_ed'], $_POST['description_ed'], $_POST['created_at']);

    header("location:edit.php?id=".$id);
}

$str = edit($_GET['id']);
require_once '../view/editForm.php';

if (isset($_POST['name_ed']) && isset($_POST['description_ed']) && isset($_POST['created_at_ed'])) {
    update($_POST['id_ed'], $_POST['name_ed'], $_POST['description_ed'], $_POST['created_at_ed']);

    header("location:index.php");
}


