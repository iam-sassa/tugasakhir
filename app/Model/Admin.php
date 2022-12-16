<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Admin extends Database{
    public function index(){ //all
        $statement =  self::$conn->prepare("select * from admin");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO admin(name,
        username, password, email, created_at)
        VALUES (:name, :username, :password, :email, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM admin WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE admin SET name = :name, username = :username, password = :password, 
        email = :email, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}

try {
   $admin = new Admin();

} catch (\Throwable $th) {
    throw $th;
}