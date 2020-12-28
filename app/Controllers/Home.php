<?php

namespace App\Controllers;

use App\Models\BukuModels;
use App\Models\PenjualanModels;

class Home extends BaseController
{
	public function index()
	{
		$modelBuku = new BukuModels();
		$data['buku'] = $modelBuku->getBuku();
		echo view('home', $data);
	}

	public function beli($id_buku)
	{
		$modelPenjualan = new PenjualanModels();
		$data['penjualan'] = $modelPenjualan->beliBuku($id_buku)->getRow();
		echo view('penjualan', $data);
	}

}
