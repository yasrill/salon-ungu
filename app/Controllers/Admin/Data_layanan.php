<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Data_layanan extends BaseController
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
      $data['layanan'] = $this->AdminModel->selectdatalayananforAdmin();
      $data['title'] = "Data layanan | Salon Ungu";
      return view('admin/Data_layanan', $data);
   }

   public function tambahDataLayanan()
   {
       $data['layanan'] = $this->AdminModel->insertdataLayanan(); 

       return redirect()->to('Admin/Data_layanan/index');
   }

   public function hapusLayanan($id_layanan){
      $this->AdminModel->hapusdataLayanan($id_layanan);

      return redirect()->to('Admin/Data_layanan/index');
   }

   public function editDataLayanan()
{
   // Panggil fungsi model untuk melakukan update data user
   $this->AdminModel->editDataLayanan($this->request->getPost());

   return redirect()->to('Admin/Data_layanan/index');
}

}

?>