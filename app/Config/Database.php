<?php 
namespace OOP\App\Config;

class Database{
    public static $conn = null;
    protected static $username = 'root';
    protected static $password = '';
    protected static $hostname = 'localhost'; //127.0.0.1
    protected static $dbname = 'savoirfaire';

    public function __construct()
        {
            Database::setConnection();
        }

    public static function setConnection(){
        self::$conn = new \PDO(
            "mysql:host=".self::$hostname.";dbname=".
            self::$dbname,
            self::$username,
            self::$password

        );

        self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function setConnection2(){
        self::$conn = new \PDO(
            "mysql:host=".self::$hostname.";dbname=".
            self::$dbname,
            self::$username,
            self::$password

        );

        self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection(){
        return self::$conn;
    }

}

try {
    // $db1 = Database::setConnection();
    $db2 = new Database;
    $db2->setConnection2();
    $conn = $db2->getConnection();
    $statement = $conn->prepare("select * from admin");
    $statement->execute();

    // $dataTable =  $statement->fetchAll(\PDO::FETCH_OBJ);
    // print_r ($dataTable);
}   catch (\Throwable $th){
        echo $th->getMessage();
    }