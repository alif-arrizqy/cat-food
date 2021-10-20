<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id_user', 'username', 'password', 'fullname', 'email', 'mobile'];

    public function AddUser($kirimdata)
    {
        $query = $this->db->table('users')->insert($kirimdata);
        return $query;
    }
}
