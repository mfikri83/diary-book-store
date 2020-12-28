<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModels extends Model
{
    protected $table = 'buku';

    public function getBuku($id_buku = false)
    {
        if ($id_buku === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_buku' => $id_buku]);
        }
    }

    public function simpanBuku($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateBuku($data, $id)
    {
        $query = $this->db->table($this->table)->update($data,['id' => $id]);
        return $query;
    }

    public function deleteBuku($id_buku)
    {
        $query = $this->db->table($this->table)->delete(['id_buku' => $id_buku]);
        return $query;
    }
    
    public function search($keyword)
    {
        return $this->table($this->table)->like('judul', $keyword)->orLike('penulis', $keyword)->orLike('id_buku', $keyword)->orLike('penerbit', $keyword)->orLike('tahun', $keyword);
    }

    public function detailBuku($id_buku = NULL)
    {
        if ($id_buku === NULL) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_buku' => $id_buku]);
        }
    }
}
