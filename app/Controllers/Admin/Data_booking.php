<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Data_booking extends BaseController
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
      $data['layanan'] = $this->AdminModel->selectdatabookingAdmin();
      $data['menu'] = $this->AdminModel->selectdataLayananforBooking();
      $data['title'] = "Data Booking | Salon Ungu";
      return view('admin/Data_booking', $data);
   }

   public function hapusBooking($id_booking){
      $this->AdminModel->hapusBookingforAdmin($id_booking);

      return redirect()->to('Admin/Data_booking/index');
   }

   public function editBooking($id_booking){
      $data['layanan'] = $this->AdminModel->editBookingAdmin(); 

      return redirect()->to('Admin/Data_booking/index');
   }

   public function tambahBookAdmin()
   {
       $data['layanan'] = $this->AdminModel->tambahDataBookingforAdmin(); 

       return redirect()->to('Admin/Data_booking/index');
   }

   public function editDataBooking()
{
   // Panggil fungsi model untuk melakukan update data user
   $this->AdminModel->editDataBooking($this->request->getPost());

   return redirect()->to('Admin/Data_booking/index');
}

}

?>