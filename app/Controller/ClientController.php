<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Client;

class ClientController {

    public $header;

    public function __construct() {    
        $this->header = new Client();
    }
    public function index(){
        View::client('clientlist', $this->header->show());
    }

    public function add(){
        View::input('create');
    }

    public function insert(){
        $data = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'created_at'=>$_POST['created_at']
        ];
        $this->header->create($data);
        Router::redirect('admin/client');
    }

    public function edit($id){
        View::edit('edit', $this->header->one($id));  
    }

    public function save($id)
    {   
        $data = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'updated_at'=>$_POST['updated_at']
        ];
        $this->header->update($data, $id);
        Router::redirect('admin/client');
    }

    public function delete($id)
    {
        $this->header->delete( $id);
        Router::redirect('admin/client');
    }
}