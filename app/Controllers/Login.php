<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\PenggunaModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;

class Login extends BaseController
{
   // multi fungsi variable
   protected $PenggunaModel;

   public function __construct()
   {
       // menggunakan model
       $this->PenggunaModel = new PenggunaModel();
   }


   // BAGIAN CONTROLLER LOGIN, LOGOUT dan REGISTER
   public function login()
   {
       if(!empty($this->session->data_login)){
           return redirect()->to('Booking/booking');
       }

       $data = ['title' => 'Login | Salon Ungu'];
       return view('pages/Login', $data);
   }

   public function login_aksi()
   {
       $login = $this->PenggunaModel->cekLogin(); 
       
       if($login!='Login gagal brow, silahkan coba lagi'){
           // berhasil login
           $this->session->set('data_login', $login);

           return redirect()->to('/Booking/booking');
       }else{
           // tidak berhasil login
           echo $login;
       }
   }
   
   public function logout(){
       $this->session->destroy();

       return redirect()->to('/Beranda/index');
   }

   public function register()
   {
       $data = ['title' => 'Register | Salon Ungu'];
       return view('pages/Register', $data);
   }

   public function aksi_register()
   {
       $data['layanan'] = $this->PenggunaModel->insertdataregister(); 

       return redirect()->to('/Login/Login');
   }




}