<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_about extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id_about';
    protected $allowedFields = ['foto_about', 'link_youtube_about','judul_about','quote_about','isi_about','ttd_about'];

    public function get_about()
    {
        return $this->db->table('about')->get()->getResultArray();
    }
    public function insert_about($data)
    {
        return $this->db->table('about')->insert($data);
    }
    public function edit_about($id_about)
    {
        return $this->db->table('about')->where('id_about', $id_about)->get()->getRowArray();
    }
    public function update_about($data, $id_about)
    {
        return $this->db->table('about')->update($data, array('id_about' => $id_about));
    }
    public function delete_about($id_about)
    {
        return $this->table('about')->where('id_about', $id_about)->delete();
    }
}
