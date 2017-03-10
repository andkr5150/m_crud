<?php
require_once '../model/model.php';



if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at']) && !empty($_POST['id'])){
    update($_POST['name'], $_POST['description'], $_POST['created_at'], $_POST['id']);
    header("location:edit.php?id=".$id);
}

$stmt = edit($_GET['id']);

$st_id          = $stmt['id'] ;
$st_name        = $stmt['name'] ;
$st_discription = $stmt['discription'];
$st_created_at  = $stmt['created_at'];

require_once '../view/editForm.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    update_id($_POST['name'], $_POST['description'], $_POST['created_at'], $_POST['id']);
    header("location:index.php");
}


