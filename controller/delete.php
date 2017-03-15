<?php
require_once '../model/model.php';

if (isset($_GET['id'])){

    $m_del = new m_crud();
    $m_del->delete($_GET['id']);
}
header("location:index.php");

