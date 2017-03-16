<?php

class m_crud {
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "2209";
    private $dbName     = "mybaz";

    /**
     * @return PDO
     */
    public function connect()
    {
        try {
            $dbh = new PDO ("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
            $dbh->exec("set names utf8");
           // $dbh = null;
            return $dbh;
        } catch (PDOException $e) {
            print "Error:" . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**
     * @return array
     */
    public function view(){
        $dbh = $this->connect();
        $sth = $dbh->prepare('SELECT * FROM form');
        $sth->execute();
        $stat = $sth->fetchAll();
        return $stat;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id){
        $dbh = $this->connect();
        $sth = $dbh->prepare('SELECT * FROM form WHERE id=:id');
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $res = $sth->fetch();
        return $res;
    }

    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $created_at
     */
    public function update($id, $name, $description, $created_at){
        $dbh = $this->connect();
        $sth = $dbh ->prepare('UPDATE form SET name=:name, discription =:description, created_at=:created_at WHERE id=:id');
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->bindValue(':name', $name, PDO::PARAM_STR);
        $sth->bindValue(':description', $description, PDO::PARAM_STR);
        $sth->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $sth->execute();
    }

    /**
     * @param $name
     * @param $description
     * @param $created_at
     * @return string
     */
    public function add($name, $description, $created_at){
        $dbh = $this->connect();
        $sth = $dbh ->prepare('INSERT INTO form (id, name, discription, created_at) VALUES (0, :name, :description, :created_at)');
        $sth->bindValue(':name', $name, PDO::PARAM_STR);
        $sth->bindValue(':description', $description, PDO::PARAM_STR);
        $sth->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $sth->execute();
        $id = $dbh->lastInsertId();
        return $id;
    }

    /**
     * @param $id
     */
    public function delete($id){
        $dbh = $this->connect();
        $sth = $dbh->prepare('DELETE FROM form WHERE id=:id');
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }
}