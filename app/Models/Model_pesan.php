<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pesan extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $allowedFields = ['email', 'pesan'];

    public function get_pesan()
    {
        return $this->db->table('pesan')->get()->getResultArray();
    }
    public function insert_pesan($data)
    {
        return $this->db->table('pesan')->insert($data);
    }
    public function edit_pesan($id_pesan)
    {
        return $this->db->table('pesan')->where('id_pesan', $id_pesan)->get()->getRowArray();
    }
    public function update_pesan($data, $id_pesan)
    {
        return $this->db->table('pesan')->update($data, array('id_pesan' => $id_pesan));
    }
    public function delete_pesan($id_pesan)
    {
        return $this->table('pesan')->where('id_pesan', $id_pesan)->delete();
    }
}
