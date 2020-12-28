<?php

namespace App\Controllers;

use App\Models\DistributorModels;

class Distributor extends BaseController
{
    public function index()
    {
        $modelDistributor = new DistributorModels();
        $data['distributor'] = $modelDistributor->getDistributor();
        echo view('distributor', $data);
    }

    public function tambah()
    {
        echo view('crud-distributor/tambah');
    }

    public function simpan()
    {
        $modelDistributor = new DistributorModels();
        $data = [
            'id_distributor' => $this->request->getVar('id_distributor'),
            'nama_distributor' => $this->request->getVar('nama_distributor'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon')
        ];
        $modelDistributor->simpanDistributor($data);
        return redirect()->to('/distributor');
    }

    public function ubah($id_distributor)
    {
        $modelDistributor = new DistributorModels();
        $data['distributor'] = $modelDistributor->getDistributor($id_distributor)->getRow();
        echo view('crud-distributor/ubah', $data);
    }

    public function update()
    {
        $modelDistributor = new DistributorModels();
        $id = $this->request->getVar('id');
        $data = [
            'id_distributor' => $this->request->getVar('id_distributor'),
            'nama_distributor' => $this->request->getVar('nama_distributor'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon')
        ];
        $modelDistributor->updateDistributor($data, $id);
        return redirect()->to('/distributor');
    }

    public function hapus($id_distributor)
    {
        $modelDistributor = new DistributorModels();
        $modelDistributor->deleteDistributor($id_distributor);
        return redirect()->to('/distributor');
    }
}
