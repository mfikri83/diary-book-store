<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModels extends Model
{
    
    protected $table = 'penjualan';

    public function getLaporan($id_buku = false)
    {
        if ($id_buku === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_buku' => $id_buku]);
        }
    }

    public function search($keyword)
    {
        return $this->table($this->table)->like('id_penjualan', $keyword)->orLike('id_buku', $keyword)->orLike('id_kasir', $keyword);
    }

}
