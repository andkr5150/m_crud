<?php
require_once '../model/model.php';

$id=$_POST['id_ed'];
$name=$_POST['name_ed'];
$description=$_POST['description_ed'];
$created_at=$_POST['created_at_ed'];
if ($created_at=='')  $created_at= date("Y-m-d H:i:s");
update($id, $name,$description,$created_at);

header("location:index.php");

