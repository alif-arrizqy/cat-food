<?php

namespace App\Controllers;

date_default_timezone_set("Asia/Jakarta");

use App\Models\mainModel;
use KnnCsv;

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
		return redirect()->to($_SERVER['HTTP_REFERER']);
	}


	// ================ My Cat =========================
	public function my_cat($id_user)
	{
		$data_cat['data_cat'] = $this->mainModel->MyCat($id_user);
		$data_cat['data_user'] = $this->mainModel->get_id_user($id_user);
		return view('pages/my_cat', $data_cat);
	}

	public function add_cat($id_user)
	{
		$id_user = $this->request->getPost('id_user');
		$name = $this->request->getPost('cat_name');
		$age = $this->request->getPost('age');
		$weight = $this->request->getPost('weight');
		// KNN method
		// panggil library KNN
		require('Knn.php');
		// dataset kucing
		$csvFileName = base_url('public/dist/Dataset/train.csv'); 
		$predict = [$weight, $age]; //predict [weight, age] {required}
		$key = 3; //key {optional: default is 3}
		$inputToCsv = false; //true, so the result will be inputed to csv file as the new sample. {optional: default is false}

		// membuat objek baru dari library KNN
		$data = new KnnCsv($csvFileName, $predict, $key, $inputToCsv);
		// hasil dari metode KNN
		$porsi = $data->result;
		$kirimdata = [
			'id_user' => $id_user,
			'cat_name' => $name,
			'age' => $age,
			'weight' => $weight,
			'porsi' => $porsi
		];
		$success = $this->mainModel->CreateCatData($kirimdata);
		if ($success) {
			session()->setFlashdata('sukses', 'Data kucing kamu tersimpan!');
			return redirect()->to($_SERVER['HTTP_REFERER']);
		} else {
			session()->setFlashdata('gagal', 'Data kucing kamu gagal tersimpan!');
			return redirect()->to($_SERVER['HTTP_REFERER']);
		}
	}

	public function camera()
	{
		return view('pages/camera');
	}

	public function hapus_kucing($id_cat, $id_user)
	{
		$this->mainModel->DeleteCat($id_cat);
		session()->setFlashData('hapus', 'Data berhasil dihapus');
		return redirect()->to('MyCat/'.$id_user);
	}

	public function kasih_makan($id_user)
	{
		session()->setFlashData('sukses', 'Porsi Makanan Kucing Sudah Terkirim');
		return redirect()->to('MyCat/'.$id_user);
	}
}
