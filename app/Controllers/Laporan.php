<?php

namespace App\Controllers;

use App\Models\LaporanModels;

class Laporan extends BaseController
{
    public function index()
    {
        $modelLaporan = new LaporanModels();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $laporan = $modelLaporan->search($keyword);
        } else {
            $laporan = $modelLaporan;
        }
        $data['penjualan'] = $laporan->getLaporan();
        echo view('laporan', $data);
    }

    public function print()
    {
        $modelLaporan = new LaporanModels();
        $data['penjualan'] = $modelLaporan->getLaporan();
        echo view('print', $data);
    }
 
}
