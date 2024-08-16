<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
   // multi fungsi variable
   protected $AdminModel;

   public function __construct()
   {
       // menggunakan model
       $this->AdminModel = new AdminModel();
   }


    public function index()
   {
      // cek sudah login atau belum (bisa digunakan untuk validasi halaman lain)
      if(empty($this->session->data_loginAdmin)){
         return redirect()->to('Admin/Login_admin');
     }

      $data['layanan'] = $this->AdminModel->selectdatakontak();
      $data['title'] = "Dashboard Admin | Salon Ungu";
      return view('admin/Dashboard', $data);
   }

   public function hapusKontak($id_kontak){
      $this->AdminModel->hapusdatakontak($id_kontak);

      return redirect()->to('Admin/Dashboard/index');
   }
}

?>