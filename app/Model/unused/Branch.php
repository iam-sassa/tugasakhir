<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Branch extends Database{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM branch");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    
    public function create($data){
        {
            $statement= self::$conn->prepare("INSERT INTO branch(name, category, founded_year, address, collab_id, available_seats, created_at, updated_at) VALUES(:name, :category, :founded_year, :address, :collab_id, :available_seats, :created_at, NULL)");
            
            return $statement->execute($data);
        }
    }

    public function one($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM branch where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE branch SET name=:name, category=:category, founded_year = :founded_year, address = :address, collab_id = :collab_id, available_seats = :available_seats, updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM branch WHERE id= $id");

        return $statement->execute();
    }

    public function count(){
        $statement = self::$conn->prepare("SELECT COUNT(*) from branch");
        $statement->execute();
        return $statement->fetchColumn();
	}
}