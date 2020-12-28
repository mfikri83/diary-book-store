<?php

namespace App\Controllers;

use App\Models\PenjualanModels;
use App\Models\BukuModels;

class Penjualan extends BaseController
{
    public function index()
    {
        $modelBuku = new BukuModels();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $buku = $modelBuku->search($keyword);
        } else {
            $buku = $modelBuku;
        }
        $data['buku'] = $buku->getBuku();
        echo view('penjualan', $data);
    }

    public function prosesBeli($id_buku)
    {
        $modelPenjualan = new PenjualanModels();
        $data['penjualan'] = $modelPenjualan->prosesBuku($id_buku)->getRow();
        echo view('crud-penjualan/beli', $data);
    }

    public function beli()
    {
        $modelPenjualan = new PenjualanModels();
        $data = [
            'id_penjualan' => $this->request->getVar('id_penjualan'),
            'id_buku' => $this->request->getVar('id_buku'),
            'id_kasir' => $this->request->getVar('id_kasir'),
            'jumlah' => $this->request->getVar('jumlah'),
            'total' => $this->request->getVar('total'),
            'tanggal' => $this->request->getVar('tanggal'),
        ];
        $modelPenjualan->beliBuku($data);
        return redirect()->to('/laporan');
    }

}
