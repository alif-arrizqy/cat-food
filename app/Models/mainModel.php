<?php

namespace App\Models;

use CodeIgniter\Model;

class mainModel extends Model
{
    public function MyProfile()
    {
        return  $this->db->table('users')->where('id_user', session()->get('id_user'))->get();
    }
    
    public function EditUser($kirimdata)
    {
        $this->db->table('users')->where('id_user', $kirimdata['id_user'])->update($kirimdata);
    }
    
    public function MyCat($id_user)
    {
        $query = $this->db->query("SELECT * FROM cats WHERE id_user = '$id_user'")->getResultArray();
        return $query;
    }

    public function CreateCatData($kirimdata)
    {
        $query = $this->db->table('cats')->insert($kirimdata);
        return $query;
    }
}
