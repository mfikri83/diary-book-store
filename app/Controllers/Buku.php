<?php

namespace App\Controllers;

use App\Models\BukuModels;

class Buku extends BaseController
{
    public function index()
    {
        $modelBuku = new BukuModels(); 
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $buku = $modelBuku->search($keyword);
        }else {
            $buku = $modelBuku;
        }
        $data['buku'] = $buku->getBuku();
        echo view('buku', $data);
    }

    public function tambah(){
        echo view('crud-buku/tambah');
    }

    public function simpan(){
        $modelBuku = new BukuModels();
        $data = [
            'id_buku' => $this->request->getVar('id_buku'),
            'judul' => $this->request->getVar('judul'),
            'no_isbn' => $this->request->getVar('no_isbn'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun' => $this->request->getVar('tahun'),
            'stok' => $this->request->getVar('stok'),
            'harga_pokok' => $this->request->getVar('harga_pokok'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'ppn' => $this->request->getVar('ppn'),
            'diskon' => $this->request->getVar('diskon')
        ];
        $modelBuku->simpanBuku($data);
        return redirect()->to('/buku');
    }

    public function ubah($id_buku){
        $modelBuku = new BukuModels();
        $data['buku'] = $modelBuku->getBuku($id_buku)->getRow();
        echo view('crud-buku/ubah', $data);
    }

    public function update(){
        $modelBuku = new BukuModels();
        $id = $this->request->getVar('id');
        $data = [
            'id_buku' => $this->request->getVar('id_buku'),
            'judul' => $this->request->getVar('judul'),
            'no_isbn' => $this->request->getVar('no_isbn'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun' => $this->request->getVar('tahun'),
            'stok' => $this->request->getVar('stok'),
            'harga_pokok' => $this->request->getVar('harga_pokok'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'ppn' => $this->request->getVar('ppn'),
            'diskon' => $this->request->getVar('diskon')
        ];
        $modelBuku->updateBuku($data,$id);
        return redirect()->to('/buku');
    }

    public function hapus($id_buku)
    {
        $modelBuku = new BukuModels();
        $modelBuku->deleteBuku($id_buku);
        return redirect()->to('/buku');
    }

    public function detail($id_buku)
    {
        $modelBuku = new BukuModels();
        $data['buku'] = $modelBuku->detailBuku($id_buku)->getRow();
        echo view('detail/detailBuku', $data);
    }
}
