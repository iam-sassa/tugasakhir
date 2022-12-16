<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Main;
use OOP\App\Model\Programs;

class MainController {

    public $header;
    public $header2;

    public function __construct() {    
        $this->header = new Main();
        $this->header2 = new Programs();
    }
    public function index(){
        View::index("index", $this->header2->show());
    }

    public function login() {
        View::page('login');
    }

    public function register() {
        View::page('register');
    }

    public function set() {
        View::page('setaccount');
    }

    
    public function programdetail($id){
        View::index('programdetail', $this->header2->one($id));  
    }


    public function ceklogin() {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];
        $userdata = $this->header->ceklogin($data);
        session_start();

        if ($userdata > 0){
            $user = $this->header->cekstatus($data);
            if ($user->status == "admin") {
                $_SESSION['username'] = $user->username;
                $_SESSION['status'] = $user->status;
                Router::redirect('admin');
              
            }
            else if ($user->status == "user") {
                $_SESSION['username'] = $user->username;
                Router::redirect('user');
            }
        }
        else {
            Router::redirect('login');
        }
    }

    public function insertclient() {
        $data = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
        ];
        $this->header->createclient($data);
        Router::redirect('setaccount');

    }

    public function insertuser() {
        $data = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'email' => $_POST['email'],
            'status' => 'user',
            'created_at' => date("Y-m-d H:i:s"),
        ];
        $this->header->createuser($data);
        echo 'berhasil';

    }

    public function booking($id){
        View::index('bookingform', $this->header2->one($id));

    }


    public function logout(){
        session_destroy();
        Router::redirect('');

    }





}

    

  
