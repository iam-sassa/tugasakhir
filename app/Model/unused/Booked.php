<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Booked extends Database{
    public function all(){ //all
        $statement =  self::$conn->prepare("SELECT booking_detail.id, trx_date, client.name, client.address, programs.name, programs.price  
        FROM `booking_detail`
        LEFT JOIN client
        ON booking_detail.program_id = client.id
        LEFT JOIN programs
        ON booking_detail.program_id = programs.id");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO booking_detail(trx_date, client_id, program_id, created_at)
        VALUES (:trx_date, :client_id, :program_id, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM booking_detail WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE booking_detail SET trx_date = :trx_date, client_id = :client_id, program_id = :program_id, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}