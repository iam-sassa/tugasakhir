<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Booked;

class BookingController {

    public function __construct() {    
        $this->header = new Booked();
    }
    public function index(){
        print_r($this->header->all());
    }

    public function add()
    {
        $insert = [
            'trx_date' => date('Y-m-d H:i:s'),
            'client_id' => 1,
            'program_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showbooked');
    }

     public function delete($id)
    {
       $this->header->delete($id);
       Router::redirect('showbooked');
    }

    public function update($id){
        $update = [
            'trx_date' => date('Y-m-d H:i:s'),
            'client_id' => 2,
            'program_id' => 1,
            'updated_at' => date('Y-m-d H:i:s')
    ];
        $this->header->update($update, $id);
        Router::redirect('showbooked');
    }

  
}