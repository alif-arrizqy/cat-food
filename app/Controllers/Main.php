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

	public function save_sampah_organik($tinggi, $metana, $status)
	{
		$date = time();
		$kirimdata['tinggi'] = $tinggi;
		$kirimdata['metana'] = $metana;
		$kirimdata['status'] = $status;
		$kirimdata['bulan'] = date("m", $date);
		// $kirimdata['jam'] = date("h:i:sa");
		$this->mainModel->add_sampah_organik($kirimdata);
		return redirect()->to('/');
	}
}
