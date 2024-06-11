<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id_education';
    protected $allowedFields = ['nama_instansi_education', 'logo_instansi_education', 'prodi_education', 'keterangan_education'];

    public function get_education()
    {
        return $this->db->table('education')->get()->getResultArray();
    }
    public function insert_education($data)
    {
        return $this->db->table('education')->insert($data);
    }
    public function edit_education($id_education)
    {
        return $this->db->table('education')->where('id_education', $id_education)->get()->getRowArray();
    }
    public function update_education($data, $id_education)
    {
        return $this->db->table('education')->update($data, array('id_education' => $id_education));
    }
    public function delete_education($id_education)
    {
        return $this->table('education')->where('id_education', $id_education)->delete();
    }
}
