<?php

require_once '../model/model.php';

if (!empty($_POST['name']) && !empty($_POST['description']) && !empty(['created_at'])){
    $name        = $_POST['name'];
    $description = $_POST['description'];
    $created_at  = $_POST['created_at'];

    $m_add = new m_crud();
    $id = $m_add->add($name,$description,$created_at);
    header("location:../controller/edit.php?id=".$id);
}

$created_at = date("Y-m-d H:i:s");
require_once '../view/addForm.php';


