<?php

namespace OOP\App\Controller;

use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Client;
use OOP\App\Model\Programs;
use OOP\App\Model\Collaboration;

class AdminController
{
    public $header;
    public $header3;
    public $header4;

    public function __construct()
    {
        $this->header = new Client();
        $this->header3 = new Programs();
        $this->header4 = new Collaboration();
    }
    public function index()
    {

        $data = array(
            'client_count' => $this->header->count(),
            'collaboration_count' => $this->header3->count(),
            'programs_count' => $this->header4->count()
        );
        View::admin("index", $data);
    }
}