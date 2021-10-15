<?php

namespace App\Controllers;

date_default_timezone_set("Asia/Jakarta");

use App\Models\loginModel;

class Login extends BaseController
{
	protected $loginModel;
	public function __construct()
	{
		$this->loginModel = new loginModel();
		helper('form');
	}
	public function index()
	{
		return view('login/index');
	}

	public function cek_login()
	{

		$session = session();
		// $model = new UserModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$data = $this->loginModel->where('username', $username)->first();
		if ($data) {
			$pass = $data['password'];
			// $verify_pass = password_verify($password, $pass);
			if ($password == $pass) {
				$ses_data = [
					'id_user'       => $data['id_user'],
					'username'     => $data['username'],
					'fullname'    => $data['fullname'],
					'email'    => $data['email'],
					'mobile'    => $data['mobile'],
					// 'logged_in'     => TRUE
				];
				$session->set($ses_data);
				return redirect()->to(base_url('Home'));
			} else {
				$session->setFlashdata('gagal', 'Wrong Password');
				return redirect()->to('/');
			}
		} else {
			$session->setFlashdata('gagal', 'Email not Found');
			return redirect()->to('/');
		}
	}

	public function logout()
	{
		session()->remove('username');
		session()->remove('fullname');

		session()->setFlashdata('sukses', 'Anda telah berhasil logout');
		return redirect()->to(base_url('/'));
	}
}
