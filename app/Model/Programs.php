<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Programs extends Database{
    public function show(){
        $statement =  self::$conn->prepare("SELECT * FROM programs ");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function one($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM programs where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }


    public function cekprogram($program){
        $statement = self::$conn->prepare("SELECT * FROM client WHERE name= '$program");
        $statement->execute($program);
        return $statement->fetch(\PDO::FETCH_OBJ);

    }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO programs(name, branch_id, issue_date, due_date, price, created_at)
        VALUES (:name, :branch_id, :issue_date, :due_date, :price, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM programs WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE programs SET name = :name, branch_id = :branch_id, issue_date = :issue_date, due_date = :due_date, price = :price, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 

    public function count(){
        $statement = self::$conn->prepare("SELECT COUNT(*) from programs");
        $statement->execute();
        return $statement->fetchColumn();
	}
}