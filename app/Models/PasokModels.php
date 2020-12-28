<?php

namespace App\Models;

use CodeIgniter\Model;

class PasokModels extends Model
{
    protected $table = 'pasok';

    public function getPasok($id_pasok = false)
    {
        if ($id_pasok === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pasok' => $id_pasok]);
        }
    }

    public function simpanPasok($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePasok($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, ['id' => $id]);
        return $query;
    }

    public function deletePasok($id_pasok)
    {
        $query = $this->db->table($this->table)->delete(['id_pasok' => $id_pasok]);
        return $query;
    }
}
