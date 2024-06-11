<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id_project';
    protected $allowedFields = ['kategori_project', 'foto_project', 'nama_project', 'keterangan_project'];

    public function get_project()
    {
        return $this->db->table('project')->get()->getResultArray();
    }
    public function insert_project($data)
    {
        return $this->db->table('project')->insert($data);
    }
    public function edit_project($id_project)
    {
        return $this->db->table('project')->where('id_project', $id_project)->get()->getRowArray();
    }
    public function update_project($data, $id_project)
    {
        return $this->db->table('project')->update($data, array('id_project' => $id_project));
    }
    public function delete_project($id_project)
    {
        return $this->table('project')->where('id_project', $id_project)->delete();
    }
}
