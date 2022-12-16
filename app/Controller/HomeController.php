<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Home;

class HomeController {

    public function __construct() {    
        $this->header = new Home();
    }
    public function index(){
        View::user("user/body");
    }

    public function programs(){
        View::user("user/example");
    }

    public function admin(){
        View::admin("admin/body");
    }

    public function client(){
        View::admin("admin/client");
    }

    public function booking(){
        View::admin("admin/booking");
    }

    public function dataadmin(){
        View::admin("admin/admin");
    }

    public function invoice(){
        View::admin("admin/invoice");
    }

    public function order(){
        View::user("user/bookingform");
    }

    public function note(){
        View::user("user/invoicepage");
    }

    public function data(){
        View::admin("admin/programs/index");
    }


  
}