<?php
function connect()
{
    try {
        $dbh = new PDO ('mysql:host=localhost;dbname=mybaz', 'root', '2209');
        $dbh->exec("set names utf8");
       // $dbh = null;
        return $dbh;
    } catch (PDOException $e) {
        print "Error:" . $e->getMessage() . "<br/>";
        die();
    }
}

function view(){
    $dbh = connect();
    $sql = $dbh->query('SELECT * FROM form');
    $stat = $sql->fetchAll();
    return $stat;
}

function edit($id){
    $dbh = connect();
    $sql = $dbh->query("SELECT * FROM form WHERE `id`='$id'");
    $stat = $sql->fetchAll();
    $res = array_shift($stat);
    return $res;
}

function update($id, $name,$description,$created_at){
    $dbh = connect();
    $sql = "UPDATE `form` SET `name`='$name',`discription`='$description',`created_at`='$created_at' WHERE `id`=$id;";
    $dbh->exec($sql);
}

function add($name, $description, $created_at){
    $dbh = connect();
    $sql = "INSERT INTO `form`(`id`, `name`, `discription`, `created_at`) VALUES (0, '$name','$description','$created_at');";
    $dbh -> exec($sql);
    $id = $dbh ->lastInsertId();
    return $id;
}

function delete($id){
    $dbh = connect();
    $sql = "DELETE FROM `form` WHERE `id`=$id;";
    $dbh->exec($sql);
}

