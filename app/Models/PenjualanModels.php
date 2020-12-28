<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModels extends Model
{
    protected $table = 'penjualan';

    public function getPenjualan($id_penjualan = false)
    {
        if ($id_penjualan === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_penjualan' => $id_penjualan]);
        }
    }

    public function prosesBuku($id_buku = NULL)
    {
        if ($id_buku === NULL) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_buku' => $id_buku]);
        }
    }

    public function beliBuku($data){
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    
}
