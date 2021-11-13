<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\mainModel;

class Restapi extends ResourceController
{
    use ResponseTrait;

	public function kasih_makan($id_cat)
	{
        $model = new mainModel();
		$data = $model->findPorsiMakan($id_cat)->getResult();
		if ($data){
			return $this->respond($data);
		} else {
			return $this->failNotFound('No data found');
		}
	}
}