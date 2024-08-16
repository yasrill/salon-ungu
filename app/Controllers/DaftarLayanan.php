<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\PenggunaModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class DaftarLayanan extends BaseController
{
   // multi fungsi variable
   protected $PenggunaModel;

   public function __construct()
   {
       // menggunakan model
       $this->PenggunaModel = new PenggunaModel();
   }

   public function layanan()
   {
       $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
       $data['title'] = "Daftar Layanan | Salon Ungu";

       return view('pages/DaftarLayanan', $data);
   }

}