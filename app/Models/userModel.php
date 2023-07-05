<?php namespace App\Models;
use CodeIgniter\Model;

class userModel extends Model
{
	public function get_data($email, $password)
	{
      return $this->db->table('user')
      ->where(array('username' => $email, 'password' => $password))
      ->get()->getRowArray();
	}



}