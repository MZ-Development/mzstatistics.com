<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;

class ClientDatabase extends Model
{

    /**
     * @var false|\mysqli
     */
    private $link;
    /**
     * @var mixed
     */
    public $ERROR;
    private $db_host;
    private $db_port;
    private $db_name;
    private $db_username;
    private $db_password;

    public function __construct($db_host, $db_port , $db_name, $db_username, $db_password)
    {
        $this->db_host = $db_host;
        $this->db_port = $db_port;
        $this->db_name = $db_name;
        $this->db_username = $db_username;
        $this->db_password = $db_password;
    }

    public function getConnection()
    {
            $this->link = mysqli_connect($this->db_host, $this->db_username,
                $this->db_password, $this->db_name, $this->db_port);
    }


    use HasFactory;
}
