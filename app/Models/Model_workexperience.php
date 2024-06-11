<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_workexperience extends Model
{
    protected $table = 'workexperience';
    protected $primaryKey = 'id_workexperience';
    protected $allowedFields = ['nama_instansi_workexperience', 'posisi_workexperience','keterangan_workexperience','logo_workexperience','tahun_mulai_workexperience','tahun_selesai_workexperience'];

    public function get_workexperience()
    {
        return $this->db->table('workexperience')->get()->getResultArray();
    }
    public function insert_workexperience($data)
    {
        return $this->db->table('workexperience')->insert($data);
    }
    public function edit_workexperience($id_workexperience)
    {
        return $this->db->table('workexperience')->where('id_workexperience', $id_workexperience)->get()->getRowArray();
    }
    public function update_workexperience($data, $id_workexperience)
    {
        return $this->db->table('workexperience')->update($data, array('id_workexperience' => $id_workexperience));
    }
    public function delete_workexperience($id_workexperience)
    {
        return $this->table('workexperience')->where('id_workexperience', $id_workexperience)->delete();
    }
}
