<?php
namespace App\Models;
use CodeIgniter\Model;

class fileModel extends Model
{
    protected $table = 'file';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $protectFields = false;
    protected $allowedFields = ['nama_matkul', 'file'];

    public function getAllData()
    {
        return $this->findAll();
    }
    public function getFile()
    {
        return $this->getFile();
    }
}

?>
