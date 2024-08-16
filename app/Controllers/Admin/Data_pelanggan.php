<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Data_pelanggan extends BaseController
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
      $data['layanan'] = $this->AdminModel->selectdatauserForAdmin();
      $data['title'] = "Data User Pelanggan | Salon Ungu";
      return view('admin/Data_pelanggan', $data);
   }

   public function tambahDataUserforAdmin()
   {
       $data['layanan'] = $this->AdminModel->insertdataUser(); 

       return redirect()->to('Admin/Data_pelanggan/index');
   }

   public function hapusUser($id_pelanggan){
      $this->AdminModel->hapusUserforAdmin($id_pelanggan);

      return redirect()->to('Admin/Data_pelanggan/index');
   }

   public function editDataUserforAdmin()
{
   // Panggil fungsi model untuk melakukan update data user
   $this->AdminModel->editDataUserforAdmin($this->request->getPost());

   return redirect()->to('Admin/Data_pelanggan/index');
}

}

?>