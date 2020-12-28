<?php

namespace App\Controllers;

use App\Models\PasokModels;

class Pasok extends BaseController
{
    public function index()
    {
        $modelPasok = new PasokModels();
        $data['pasok'] = $modelPasok->getPasok();
        echo view('pasok', $data);
    }

    public function tambah()
    {
        echo view('crud-pasok/tambah');
    }

    public function simpan()
    {
        $modelPasok = new PasokModels();
        $data = [
            'id_pasok' => $this->request->getVar('id_pasok'),
            'id_distributor' => $this->request->getVar('id_distributor'),
            'id_buku' => $this->request->getVar('id_buku'),
            'jumlah' => $this->request->getVar('jumlah'),
            'tanggal' => $this->request->getVar('tanggal')
        ];
        $modelPasok->simpanPasok($data);
        return redirect()->to('/pasok');
    }

    public function ubah($id_pasok)
    {
        $modelPasok = new PasokModels();
        $data['pasok'] = $modelPasok->getPasok($id_pasok)->getRow();
        echo view('crud-pasok/ubah', $data);
    }

    public function update()
    {
        $modelPasok = new PasokModels();
        $id = $this->request->getVar('id');
        $data = [
            'id_pasok' => $this->request->getVar('id_pasok'),
            'id_distributor' => $this->request->getVar('id_distributor'),
            'id_buku' => $this->request->getVar('id_buku'),
            'jumlah' => $this->request->getVar('jumlah'),
            'tanggal' => $this->request->getVar('tanggal')
        ];
        $modelPasok->updatePasok($data, $id);
        return redirect()->to('/pasok');
    }

    public function hapus($id_pasok)
    {
        $modelPasok = new PasokModels();
        $modelPasok->deletePasok($id_pasok);
        return redirect()->to('/pasok');
    }
}
