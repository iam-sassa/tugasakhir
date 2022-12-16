<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Client extends Database{

    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM client");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    
    public function create($data){
        {
            $statement= self::$conn->prepare("INSERT INTO client(name, phone, email, address, created_at, updated_at) VALUES(:name, :phone, :email, :address, :created_at, NULL)");
            
            return $statement->execute($data);
        }
    }

    public function one($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM client where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE client SET name=:name, phone=:phone, email = :email, address = :address, updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM client WHERE id= $id");

        return $statement->execute();
    }

    public function count(){
        $statement = self::$conn->prepare("SELECT COUNT(*) from client");
        $statement->execute();
        return $statement->fetchColumn();
    }
}