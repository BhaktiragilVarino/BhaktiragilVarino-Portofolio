<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_home extends Model
{
    protected $table = 'home';

    protected $primaryKey = 'id_home';
    protected $allowedFields = ['nama_home', 'minat_home', 'cv_home'];

    public function get_home()
    {
        return $this->db->table('home')->get()->getResultArray();
    }
    public function insert_home($data)
    {
        return $this->db->table('home')->insert($data);
    }
    public function edit_home($id_home)
    {
        return $this->db->table('home')->where('id_home', $id_home)->get()->getRowArray();
    }
    public function update_home($data, $id_home)
    {
        return $this->db->table('home')->update($data, array('id_home' => $id_home));
    }
    public function delete_home($id_home)
    {
        return $this->table('home')->where('id_home', $id_home)->delete();
    }

}
