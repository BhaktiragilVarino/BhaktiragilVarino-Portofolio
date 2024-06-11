<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pengaturan extends Model
{
    protected $table = 'tbl_user';
    public function edit_pengaturan($id_user)
    {
        return $this->db->table('tbl_user')->where('id_user', $id_user)->get()->getRowArray();
    }
    public function update_pengaturan($data, $id_user)
    {
        return $this->db->table('tbl_user')->update($data, array('id_user' => $id_user));
    }
}
