<?php
require_once '../model/model.php';

if (isset($_GET['id'])){
    delete($_GET['id']);
}
header("location:index.php");

