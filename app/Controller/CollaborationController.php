<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Collaboration;

class CollaborationController {

    public function __construct() {    
        $this->header = new Collaboration();
    }

    public function index(){
        View::client('collaborationlist', $this->header->show());
    }

    public function add(){
        View::input('collaborationcreate');
    }

    public function insert(){
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'created_at'=>$_POST['created_at']
        ];
        $this->header->create($data);
        Router::redirect('admin/collaboration');
    }

    public function edit($id){
        View::edit('collaborationedit', $this->header->one($id));  
    }

    public function save($id)
    {   
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'updated_at'=>$_POST['updated_at']
        ];
        $this->header->update($data, $id);
        Router::redirect('admin/collaboration');
    }

    public function delete($id)
    {
        $this->header->delete( $id);
        Router::redirect('admin/collaboration');
    }
  
}