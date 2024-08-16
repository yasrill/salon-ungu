<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\PenggunaModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Kontak extends BaseController
{
    // multi fungsi variable
    protected $PenggunaModel;

    public function __construct()
    {
        // menggunakan model
        $this->PenggunaModel = new PenggunaModel();
    }

    public function kontak()
    {
        $data = ['title' => 'Kontak | Salon Ungu'];
        return view('pages/Kontak', $data);
    }

    public function aksi_kontak()
    {
        $data['layanan'] = $this->PenggunaModel->insertdatakontak(); 

        return redirect()->to('/Kontak/Kontak');
    }

}