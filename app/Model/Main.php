<?php
namespace OOP\App\Model;
use OOP\App\Core\View;
use OOP\App\Config\Database;

class Main extends Database{
    
    public function createclient($data){
        {
            $data+=[
                'created_at' => date("Y-m-d H:i:s")
            ];
            $statement= self::$conn->prepare("INSERT INTO client(name, phone, address, created_at, updated_at) VALUES(:name, :phone, :address, :created_at, NULL)");
            return $statement->execute($data);
        }
    }

    public function createuser($data){
        {
            $statement= self::$conn->prepare("INSERT INTO admin(name, username, password, email, status, created_at, updated_at) VALUES(:name, :username, :password, :email, :status, :created_at, NULL)");
            return $statement->execute($data);
        }
    }

    public function ceklogin($data){
        {
            $statement= self::$conn->prepare("SELECT * FROM admin WHERE username= :username AND password = :password");
            $statement->execute($data);
            return $statement->fetchColumn();
        }
    }

    public function cekstatus($data){
        $statement = self::$conn->prepare("SELECT * FROM admin WHERE username= :username AND password = :password");
        $statement->execute($data);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function cekname($name){
        $statement = self::$conn->prepare("SELECT id FROM client WHERE name= '$name");
        $statement->execute($name);
        return $statement->fetch();

    }

}