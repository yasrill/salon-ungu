<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Login_admin extends BaseController
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
    if(!empty($this->session->data_loginAdmin)){
        return redirect()->to('Admin/Dashboard');
    }

      $data['title'] = "Login Admin | Salon Ungu";
      return view('admin/Login_admin', $data);
   }

   public function aksi_login()
   {
       $login = $this->AdminModel->cekLoginAdmin(); 
       
       if($login!='Login gagal brow, silahkan coba lagi'){
           // berhasil login
           $this->session->set('data_loginAdmin', $login);

           return redirect()->to('/Admin/Dashboard');
       }else{
           // tidak berhasil login
           echo $login;
       }
   }
   
   public function logout(){
       $this->session->destroy();

       return redirect()->to('/Admin/Login_admin');
   }

}

?>