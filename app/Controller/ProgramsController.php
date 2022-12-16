<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Programs;

class ProgramsController {

    public function __construct() {    
        $this->header = new Programs();
    }
    public function index(){
        print_r($this->header->all());
    }

    public function add()
    {
        $insert = [
            'name' =>'Math Teacher',
            'branch_id' => 2,
            'issue_date' => date('Y-m-d'),
            'due_date' => date('Y-m-d'),
            'price' => 200000,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showprograms');
    }

     public function delete($id)
    {
       $this->header->delete($id);
       Router::redirect('showprograms');
    }

    public function update($id){
        $update = [
            'name' =>'English Mentor',
            'branch_id' => 1,
            'issue_date' => date('Y-m-d'),
            'due_date' => date('Y-m-d'),
            'price' => 500000,
            'updated_at' => date('Y-m-d H:i:s')
    ];
       $this->header->update($update, $id);
       Router::redirect('showprograms');
    }

  
}