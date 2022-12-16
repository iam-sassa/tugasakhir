<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Main;
use OOP\App\Model\Programs;

class UserController
{

    public $header;
    public $header2;

    public function __construct()
    {
        $this->header = new Main();
        $this->header2 = new Programs();
    }
    public function index()
    {
        View::user("index", $this->header2->show());
    }

    public function insertbooking(){

        $client =  $this->header->cekname($_POST['name']);
        $program = $this->header2->cekprogram($_POST['program']);

        echo $client->id;
        echo $program->id;
    }

}