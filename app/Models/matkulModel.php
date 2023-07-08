<?php
use CodeIgniter\Model;

class matkulModel extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id_matkul';
    protected $useAutoIncrement = 'true';
    protected $protectFields = false;
    protected $allowedFields = ['nama_matkul', 'file_matkul'];

    public function getAllData()
    {
        return $this->findAll();
    }
}

?>
