<?php

use OOP\App\Controller\AdminController;
use OOP\App\Controller\HomeController;
use OOP\App\Controller\CollaborationController;
use OOP\App\Controller\ClientController;


use OOP\App\Controller\MainController;
use OOP\App\Controller\UserController;

use OOP\App\Controller\ProgramsController;
use OOP\App\Controller\InvoiceController;
use OOP\App\Controller\BookingController;


use OOP\App\Core\Router;
use OOP\App\Middleware\Auth;
use OOP\App\Middleware\Guest;


require_once __DIR__ . '/../vendor/autoload.php';
session_start();


Router::addRoute('GET', '/', MainController::class, 'index', []);
Router::addRoute('GET', '/login', MainController::class, 'login', []);
Router::addRoute('GET', '/register', MainController::class, 'register', []);
Router::addRoute('GET', '/setaccount', MainController::class, 'set', []);
Router::addRoute('GET', '/logout', MainController::class, 'logout', []);

Router::addRoute('POST', '/ceklogin', MainController::class, 'ceklogin', []);
Router::addRoute('POST', '/insertclient', MainController::class, 'insertclient', []);
Router::addRoute('POST', '/insertuser', MainController::class, 'insertuser', []);

Router::addRoute('GET', '/programdetail/:id', MainController::class, 'programdetail', []);
Router::addRoute('GET', '/booking/:id', MainController::class, 'booking', []);
Router::addRoute('POST', '/insertbooking', UserController::class, 'insertbooking', []);



// Router::addRoute('GET', '/', HomeController::class, 'index', []);
Router::addRoute('GET', '/user', UserController::class, 'index', []);
Router::addRoute('GET', '/admin', AdminController::class, 'index', []);


Router::addRoute('GET', '/admin/client', ClientController::class, 'index', []);
Router::addRoute('GET', '/admin/client/add', ClientController::class, 'add', []);
Router::addRoute('GET', '/admin/client/edit/:id', ClientController::class, 'edit', []);
Router::addRoute('GET', '/admin/client/delete/:id', ClientController::class, 'delete', []);


// Router::addRoute('GET', '/admin/branch', BranchController::class, 'index', []);
// Router::addRoute('GET', '/admin/branch/add', BranchController::class, 'add', []);
// Router::addRoute('GET', '/admin/branch/edit/:id', BranchController::class, 'edit', []);
// Router::addRoute('GET', '/admin/branch/delete/:id', BranchController::class, 'delete', []);

Router::addRoute('GET', '/admin/collaboration', CollaborationController::class, 'index', []);
Router::addRoute('GET', '/admin/collaboration/add', CollaborationController::class, 'add', []);
Router::addRoute('GET', '/admin/collaboration/edit/:id', CollaborationController::class, 'edit', []);
Router::addRoute('GET', '/admin/collaboration/delete/:id', CollaborationController::class, 'delete', []);

Router::addRoute('GET', 'admin/program', ProgramsController::class, 'index', []);



// Router::addRoute('POST', '/clientinsert', ClientController::class, 'insert', []);
// Router::addRoute('POST', '/clientupdate/:id', ClientController::class, 'save', []);


// Router::addRoute('POST', '/branchinsert', BranchController::class, 'insert', []);
// Router::addRoute('POST', '/branchupdate/:id', BranchController::class, 'save', []);

// Router::addRoute('POST', '/collaborationinsert', CollaborationController::class, 'insert', []);
// Router::addRoute('POST', '/collaborationupdate/:id', CollaborationController::class, 'save', []);



// Router::addRoute('GET', '/booking', HomeController::class, 'booking', []);
// Router::addRoute('GET', '/invoice', HomeController::class, 'invoice', []);
// Router::addRoute('GET', '/dataadmin', HomeController::class, 'dataadmin', []);
// Router::addRoute('GET', '/placeorder', HomeController::class, 'order', []);
// Router::addRoute('GET', '/note', HomeController::class, 'note', []);
// Router::addRoute('GET', '/dataprogram', HomeController::class, 'data', []);




// Router::addRoute('GET', '/showadmin', AdminController::class, 'index', []);
// Router::addRoute('GET', '/addadmin', AdminController::class, 'add', []);
// Router::addRoute('GET', '/updateadmin/:id', AdminController::class, 'update', []);
// Router::addRoute('GET', '/deleteadmin/:id', AdminController::class, 'delete', []);


// Router::addRoute('GET', '/showcollaboration', CollaborationController::class, 'index', []);
// Router::addRoute('GET', '/addcollaboration', CollaborationController::class, 'add', []);
// Router::addRoute('GET', '/updatecollaboration/:id', CollaborationController::class, 'update', []);
// Router::addRoute('GET', '/deletecollaboration/:id', CollaborationController::class, 'delete', []);

// Router::addRoute('GET', '/showclient', ClientController::class, 'index', []);
// Router::addRoute('GET', '/addclient', ClientController::class, 'add', []);
// Router::addRoute('GET', '/updateclient/:id', ClientController::class, 'update', []);
// Router::addRoute('GET', '/deleteclient/:id', ClientController::class, 'delete', []);

// Router::addRoute('GET', '/showbranch', BranchController::class, 'index', []);
// Router::addRoute('GET', '/addbranch', BranchController::class, 'add', []);
// Router::addRoute('GET', '/updatebranch/:id', BranchController::class, 'update', []);
// Router::addRoute('GET', '/deletebranch/:id', BranchController::class, 'delete', []);

// Router::addRoute('GET', '/showprograms', ProgramsController::class, 'index', []);
// Router::addRoute('GET', '/addprograms', ProgramsController::class, 'add', []);
// Router::addRoute('GET', '/updateprograms/:id', ProgramsController::class, 'update', []);
// Router::addRoute('GET', '/deleteprograms/:id', ProgramsController::class, 'delete', []);

// Router::addRoute('GET', '/showbooked', BookingController::class, 'index', []);
// Router::addRoute('GET', '/addbooked', BookingController::class, 'add', []);
// Router::addRoute('GET', '/updatebooked/:id', BookingController::class, 'update', []);
// Router::addRoute('GET', '/deletebooked/:id', BookingController::class, 'delete', []);

// Router::addRoute('GET', '/showinvoice/:id', InvoiceController::class, 'index', []);
// Router::addRoute('GET', '/addinvoice', InvoiceController::class, 'add', []);

Router::run();