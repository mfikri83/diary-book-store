<?php

namespace App\Models;

use CodeIgniter\Model;

class DistributorModels extends Model
{
    protected $table = 'distributor';

    public function getDistributor($id_distributor = false)
    {
        if ($id_distributor === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_distributor' => $id_distributor]);
        }
    }

    public function simpanDistributor($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDistributor($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, ['id' => $id]);
        return $query;
    }

    public function deleteDistributor($id_distributor)
    {
        $query = $this->db->table($this->table)->delete(['id_distributor' => $id_distributor]);
        return $query;
    }

}
