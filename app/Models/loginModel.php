<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    // public function cek_login($username, $password)
    // {
    //     return $this->db->table('users')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    // }

    protected $table = 'users';
    protected $allowedFields = ['id_user', 'username', 'password', 'fullname', 'email', 'mobile'];
}
