<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_technologysuite extends Model
{
    protected $table = 'technologysuite';
    protected $primaryKey = 'id_technologysuite';
    protected $allowedFields = ['nama_keahlian_technologysuite', 'foto_technologysuite', 'keterangan_technologysuite'];

    public function get_technologysuite()
    {
        return $this->db->table('technologysuite')->get()->getResultArray();
    }
    public function insert_technologysuite($data)
    {
        return $this->db->table('technologysuite')->insert($data);
    }
    public function edit_technologysuite($id_technologysuite)
    {
        return $this->db->table('technologysuite')->where('id_technologysuite', $id_technologysuite)->get()->getRowArray();
    }
    public function update_technologysuite($data, $id_technologysuite)
    {
        return $this->db->table('technologysuite')->update($data, array('id_technologysuite' => $id_technologysuite));
    }
    public function delete_technologysuite($id_technologysuite)
    {
        return $this->table('technologysuite')->where('id_technologysuite', $id_technologysuite)->delete();
    }
}
