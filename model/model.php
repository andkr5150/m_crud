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
    $sth = $dbh ->prepare('SELECT * FROM form');
    $sth -> execute();
    $stat = $sth->fetchAll();
    return $stat;
}

function edit($id){
    $dbh = connect();
    $sth = $dbh ->prepare('SELECT * FROM form WHERE id=:id');
    $sth -> bindValue(':id', $id, PDO::PARAM_INT);
    $sth -> execute();
    $res = $sth->fetch();
    return $res;
}

function update($id, $name,$description,$created_at){
    $dbh = connect();
    $sth = $dbh ->prepare('UPDATE form SET name=:name, discription =:description, created_at=:created_at WHERE id=:id');
    $sth -> bindValue(':id', $id, PDO::PARAM_INT);
    $sth -> bindValue(':name', $name, PDO::PARAM_STR);
    $sth -> bindValue(':description', $description, PDO::PARAM_STR);
    $sth -> bindValue(':created_at', $created_at, PDO::PARAM_STR);
    $sth -> execute();
}

function add($name, $description, $created_at){
    $dbh = connect();
    $sth = $dbh ->prepare('INSERT INTO form (id, name, discription, created_at) VALUES (0, :name, :description, :created_at)');
    $sth -> bindValue(':name', $name, PDO::PARAM_STR);
    $sth -> bindValue(':description', $description, PDO::PARAM_STR);
    $sth -> bindValue(':created_at', $created_at, PDO::PARAM_STR);
    $sth -> execute();
    $id = $dbh ->lastInsertId();
    return $id;
}

function delete($id){
    $dbh = connect();
    $sth = $dbh ->prepare('DELETE FROM form WHERE id=:id');
    $sth -> bindValue(':id', $id, PDO::PARAM_INT);
    $sth -> execute();
}

