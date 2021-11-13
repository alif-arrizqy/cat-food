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

    public function get_id_user($id_user)
    {
        $query = $this->db->query("SELECT * FROM users WHERE id_user = '$id_user'")->getResultArray();
        return $query;
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

    public function findPorsiMakan($id_cat)
    {
        $query = $this->db->query("SELECT * FROM cats WHERE id_cat = '$id_cat'");
        return $query;
    }
}
