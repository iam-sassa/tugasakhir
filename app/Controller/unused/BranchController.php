<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Branch;

class BranchController {

    public $header;

    public function __construct() {    
        $this->header = new Branch();
    }

    public function index(){
        View::client('branchlist', $this->header->show());
    }

    public function add(){
        View::input('branchcreate');
    }

    public function insert(){
        $data = [
            'name' => $_POST['name'],
            'category' => $_POST['category'],
            'founded_year' => $_POST['founded_year'],
            'address' => $_POST['address'],
            'collab_id' => $_POST['collab_id'],
            'available_seats' => $_POST['available_seats'],
            'created_at'=>$_POST['created_at']
        ];
        $this->header->create($data);
        Router::redirect('admin/branch');
    }

    public function edit($id){
        View::edit('branchedit', $this->header->one($id));  
    }

    public function save($id)
    {   
        $data = [
            'name' => $_POST['name'],
            'category' => $_POST['category'],
            'founded_year' => $_POST['founded_year'],
            'address' => $_POST['address'],
            'collab_id' => $_POST['collab_id'],
            'available_seats' => $_POST['available_seats'],
            'updated_at'=>$_POST['updated_at']
        ];
        $this->header->update($data, $id);
        Router::redirect('admin/branch');
    }

    public function delete($id)
    {
        $this->header->delete( $id);
        Router::redirect('admin/branch');
    }
  
}