<?php
namespace App\Models;
use CodeIgniter\Model;

class praktikumModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $protectFields = false;
    protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];

    public function getAllData()
    {
        return $this->findAll();
    }
}

?>
