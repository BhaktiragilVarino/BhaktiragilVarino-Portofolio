<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    protected $table = 'tbl_user';
    protected $allowedFields = ['nama_user', 'notelepon', 'username', 'password', 'level', 'email', 'alamat', 'foto', 'barcode'];

    public function login($username, $password)
    {
        return $this->db->table('tbl_user')
            ->where([
                'username' => $username,
                'password' => $password,
            ])->get()->getRowArray();
    }

    public function insert_auth($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }

    public function delete_auth($id_user)
    {
        return $this->table('tbl_user')->where('id_user', $id_user)->delete();
    }

    public function edit_user($id_user)
    {
        return $this->db->table('tbl_user')->where('id_user', $id_user)->get()->getRowArray();
    }

    public function update_auth($data, $id_user)
    {
        return $this->db->table('tbl_user')->update($data, array('id_user' => $id_user));
    }
}
