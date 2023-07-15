<?php
namespace App\Models;
use CodeIgniter\Model;

class matkulModel extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id_absen';
    protected $useAutoIncrement = 'true';
    protected $protectFields = false;
    protected $allowedFields = [];

    public function getAllData()
    {
        return $this->findAll();
    }
}

?>
