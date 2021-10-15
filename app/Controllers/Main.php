<?php

namespace App\Controllers;

date_default_timezone_set("Asia/Jakarta");

use App\Models\mainModel;

class Main extends BaseController
{
	protected $mainModel;
	public function __construct()
	{
		$this->mainModel = new mainModel();
		helper('form');
	}

	public function index()
	{
		return view('pages/index');
	}

	public function my_data()
	{
		$data_user['data_user'] = $this->mainModel->MyProfile()->getRow();
		return view('pages/my_data', $data_user);
	}

	public function edit_user($id_user)
	{
		$username = $this->request->getPost('username');
		$fullname = $this->request->getPost('fullname');
		$email = $this->request->getPost('email');
		$mobile = $this->request->getPost('mobile');

		$kirimdata = [
			'id_user' => $id_user,
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email,
			'mobile' => $mobile,
		];
		$this->mainModel->EditUser($kirimdata);
		session()->setFlashData('sukses', 'Data Berhasil Di Simpan');
		return redirect()->to('MyData');
	}


	// ================ My Cat =========================
	public function my_cat($id_user)
	{
		$data_cat['data_cat'] = $this->mainModel->MyCat($id_user);
		return view('pages/my_cat', $data_cat);
	}

	public function add_cat($id_user)
	{
		
	}
}
