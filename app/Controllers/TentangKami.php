<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\PenggunaModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class TentangKami extends BaseController
{
   // multi fungsi variable
   protected $PenggunaModel;

   public function __construct()
   {
      // menggunakan model
      $this->PenggunaModel = new PenggunaModel();
   }

   public function about()
   {
       $data = ['title' => 'Tentang kami | Salon Ungu'];
       return view('pages/TentangKami', $data);
   }


}