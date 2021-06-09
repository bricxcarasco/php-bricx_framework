<?php
namespace App;

use App\DotEnv;

(new DotEnv($_SERVER['DOCUMENT_ROOT'] . '/.env'))->load();

class Database
{
    public $host;
    public $username;
    public $password;
    public $database_name;
    public $connection;

    public function __construct()
    {
        $this->host = getenv('DATABASE_HOST');
        $this->username = getenv('DATABASE_USERNAME');
        $this->password = getenv('DATABASE_PASSWORD');
        $this->database_name = getenv('DATABASE_NAME');
        $this->connect();
    }

    public function connect()
    {
        // $connection = mysqli_connect(getenv('DATABASE_HOST'), getenv('DATABASE_USERNAME'), getenv('DATABASE_PASSWORD'), getenv('DATABASE_NAME'));
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database_name);
    }

    public function all($sql)
    {
        $query = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));
        $result = mysqli_fetch_all($query);
        return $result;
    }
}