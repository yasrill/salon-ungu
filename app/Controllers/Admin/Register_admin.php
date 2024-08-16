<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Register_admin extends BaseController
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
      $data['title'] = "Register Admin | Salon Ungu";
      return view('admin/Register_admin', $data);
   }


   public function aksi_register()
   {
       $data['layanan'] = $this->AdminModel->insertdataregisterAdmin(); 

       return redirect()->to('Admin/Login_admin');
   }

}

?>