<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_achiev extends Model
{
    protected $table = 'achiev';
    protected $primaryKey = 'id_achiev';
    protected $allowedFields = ['foto_achiv'];

    public function get_achiev()
    {
        return $this->db->table('achiev')->get()->getResultArray();
    }
    public function insert_achiev($data)
    {
        return $this->db->table('achiev')->insert($data);
    }
    public function edit_achiev($id_achiev)
    {
        return $this->db->table('achiev')->where('id_achiev', $id_achiev)->get()->getRowArray();
    }
    public function update_achiev($data, $id_achiev)
    {
        return $this->db->table('achiev')->update($data, array('id_achiev' => $id_achiev));
    }
    public function delete_achiev($id_achiev)
    {
        return $this->table('achiev')->where('id_achiev', $id_achiev)->delete();
    }
}
