<?php

require_once '../model/model.php';

$name        = $_POST['name_ed'];
$description = $_POST['description_ed'];
$created_at  = $_POST['created_at_ed'];

$id = add($name,$description,$created_at);

header("location:index.php");
