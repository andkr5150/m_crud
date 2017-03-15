<?php
require_once '../model/model.php';

$m_stmt = new m_crud();
$stmt = $m_stmt->view();
require_once '../view/viewForm.php';

