<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Invoice extends Database{
    public function index($id){ //all
        $statement =  self::$conn->prepare("SELECT invoice.id, booking_detail.trx_date, client.name, programs.price as programs_price, discount, (programs.price - discount) as total_price,
        total_paid, (total_paid - (programs.price - discount)) as total_change
        FROM invoice
        LEFT JOIN booking_detail
        ON invoice.booking_id = booking_detail.id
        LEFT JOIN client
        ON booking_detail.client_id = client.id
        LEFT JOIN programs
        On booking_detail.program_id = programs.id
        
        
        WHERE invoice.id='$id'");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO invoice(booking_id, discount, total_paid, created_at)
        VALUES (:booking_id, :discount, :total_paid, :created_at)");

        return $statement->execute($data);

    }
}