<?php namespace App\Controllers;

use App\Models\userModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login/user_form');
   }
   
   public function login_action() 
   {
      $userModel = new userModel();

      $email = $this->request->getPost('username');
      $password = $this->request->getPost('password');

      $cek = $userModel->get_data($email, $password);

      if (($cek['username'] == $email) && ($cek['password'] == $password))
      {
         session()->set('username', $cek['username']);
         session()->set('nama', $cek['nama']);
         session()->set('user_id', $cek['user_id']);
         return redirect()->to(base_url('prak/dash'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }

	//--------------------------------------------------------------------

}