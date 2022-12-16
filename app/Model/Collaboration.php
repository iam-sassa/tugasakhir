<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Collaboration extends Database{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM collaboration");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    
    public function create($data){
        {
            $statement= self::$conn->prepare("INSERT INTO collaboration(name, address, email, phone, created_at, updated_at) VALUES(:name, :address, :email, :phone, :created_at, NULL)");
            
            return $statement->execute($data);
        }
    }

    public function one($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM collaboration where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE collaboration SET name=:name, address = :address, email = :email, phone = :phone, updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM collaboration WHERE id= $id");

        return $statement->execute();
    }

    public function count(){
        $statement = self::$conn->prepare("SELECT COUNT(*) from collaboration");
        $statement->execute();
        return $statement->fetchColumn();
	}
}