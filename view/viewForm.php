<?php
$stmt = view();

foreach ($stmt as $row){
    $str_tabl = $row['id'] . " -- " . $row['name']. " -- "  . $row['discription'] . " -- " . $row['created_at'];
    $s_edit = "<a href='../view/editForm.php?id=". $row['id'] . "'>edit</a>";
    $s_delete = "<a href='../controller/delete.php?id=". $row['id'] . "'>delete</a>";
    echo  $s_edit . " " . $s_delete . " - ". $str_tabl;
    echo   "<br/>";
}

//$dbh = null;
