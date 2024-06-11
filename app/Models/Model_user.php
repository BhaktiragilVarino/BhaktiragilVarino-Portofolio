<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'username', 'password', 'level', 'notelepon', 'email', 'alamat', 'foto', 'barcode', 'created_at'];

    public function get_user()
    {
        return $this->db->table('tbl_user')->get()->getResultArray();
    }
    public function insert_user($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }
    public function edit_user($id_user)
    {
        return $this->db->table('tbl_user')->where('id_user', $id_user)->get()->getRowArray();
    }
    public function update_user($data, $id_user)
    {
        return $this->db->table('tbl_user')->update($data, array('id_user' => $id_user));
    }
    public function delete_user($id_user)
    {
        return $this->table('tbl_user')->where('id_user', $id_user)->delete();
    }
}
