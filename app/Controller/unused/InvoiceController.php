<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Invoice;

class InvoiceController {

    public function __construct() {    
        $this->header = new Invoice();
    }
    public function index($id){
        print_r($this->header->index($id));
    }

    public function add()
    {
        $insert = [
           'booking_id' => 2,
           'discount' => 10000,
           'total_paid'=> 1000000,
           'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showinvoice');
    }

  
}