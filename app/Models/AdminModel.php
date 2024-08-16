<?php

namespace App\Models;

use CodeIgniter\Model;
// inisialisasi dependensi untu tangkap data POST atau GET
use CodeIgniter\HTTP\RequestInterface;

class AdminModel extends Model
{
   // membuat variable multi function dan turunannya
   protected $db;
   protected $request;

   public function __construct()
   {   
      // inisisalisasi koneksi
      $this->db = \config\Database::connect(); 
      $this->request = \Config\Services::request();
   }

   public function cekLoginAdmin(){
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');
    
      $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

      $query = $this->db->query($sql);

      if($query->getNumRows() > 0){
         $hasil = $query->getResultArray()[0];
      }else{
         $hasil = "Login gagal brow, silahkan coba lagi";
      }

      return $hasil;
   }

   public function insertdataregisterAdmin(){
      // Tangkap data POST
      $username = $this->request->getPost('username');
      $nama = $this->request->getPost('nama');
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      // pembuatan query
      $sql = "INSERT INTO admin(Nama_admin, Username, Email, Password)
                     VALUES('$nama', '$username', '$email', '$password')";

      // mengeksekusi query
      $this->db->query($sql);

      return;

   }

     public function selectdatakontak(){
      // pembuatan query
      $sql = "SELECT * FROM kontak";

      // mengeksekusi query
      $query = $this->db->query($sql);

      // uraikan hasil query dalam bentuk array
      $data = $query->getResultArray();

      // kembalikan hasil query ke controller
      return $data;
   }

   public function selectdatabookingAdmin(){
      
      // pembuatan query
      $sql = "SELECT * FROM booking";

      // mengeksekusi query
      $query = $this->db->query($sql);

      // uraikan hasil query dalam bentuk array
      $data = $query->getResultArray();

      // kembalikan hasil query ke controller
      return $data;
   }

   public function selectdatalayananforAdmin(){
      // pembuatan query
      $sql = "SELECT * FROM layanan";

      // mengeksekusi query
      $query = $this->db->query($sql);

      // uraikan hasil query dalam bentuk array
      $data = $query->getResultArray();

      // kembalikan hasil query ke controller
      return $data;
   }

   public function selectdatauserForAdmin(){
      // pembuatan query
      $sql = "SELECT * FROM pelanggan";

      // mengeksekusi query
      $query = $this->db->query($sql);

      // uraikan hasil query dalam bentuk array
      $data = $query->getResultArray();

      // kembalikan hasil query ke controller
      return $data;
   }

   public function hapusdatakontak($id_kontak) {
      
      $sql = "DELETE FROM kontak WHERE id_kontak='$id_kontak'";

      $this->db->query($sql);

      return;

   }

   public function insertdataUser(){
      // Tangkap data POST
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $nama = $this->request->getPost('nama');
      $alamat = $this->request->getPost('alamat');
      $nomor = $this->request->getPost('nomor');

      // pembuatan query
      $sql = "INSERT INTO pelanggan(Nama_pelanggan, Email, Alamat, No_Handphone, Password)
                     VALUES('$nama', '$email', '$alamat', '$nomor', '$password')";

      // mengeksekusi query
      $this->db->query($sql);

      return;

   }

   public function hapusUserforAdmin($id_pelanggan) {
      
      $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";

      $this->db->query($sql);

      return;

   }

   public function insertdataLayanan(){
      // Tangkap data POST
      $Nama = $this->request->getPost('nama_layanan');
      $Harga = $this->request->getPost('harga');
      $Durasi = $this->request->getPost('durasi');
      $Keterangan = $this->request->getPost('keterangan');

      // pembuatan query
      $sql = "INSERT INTO layanan(Nama_layanan, Harga, Durasi, Keterangan)
                     VALUES('$Nama', '$Harga', '$Durasi', '$Keterangan')";

      // mengeksekusi query
      $this->db->query($sql);

      return;

   }
   
   public function hapusdataLayanan($id_layanan) {
      
      $sql = "DELETE FROM layanan WHERE id_layanan='$id_layanan'";

      $this->db->query($sql);

      return;

   }

   public function hapusBookingforAdmin($id_booking) {
      
      $sql = "DELETE FROM booking WHERE id_booking='$id_booking'";

      $this->db->query($sql);

      return;

   }

   public function selectdataLayananforBooking(){
      // pembuatan query
      $sql = "SELECT * FROM layanan";

      // mengeksekusi query
      $query = $this->db->query($sql);

      // uraikan hasil query dalam bentuk array
      $data = $query->getResultArray();

      // kembalikan hasil query ke controller
      return $data;
   }

   public function tambahDataBookingforAdmin(){
      // Tangkap data POST
      $Nama = $this->request->getPost('nama_user');
      $id_pelanggan = $this->request->getPost('id_pelanggan');
      $id_Layanan = $this->request->getPost('layanan');
      $Tanggal_booking = $this->request->getPost('tanggal');
      $Jam_booking = $this->request->getPost('jam');
      $Catatan = $this->request->getPost('catatan');
      $Status = $this->request->getPost('status');

      // pembuatan query
      $sql = "INSERT INTO booking(Nama, id_pelanggan, id_layanan, Tanggal_Booking, Jam_Booking, Catatan, Status_booking)
                     VALUES('$Nama', '$id_pelanggan','$id_Layanan', '$Tanggal_booking', '$Jam_booking', '$Catatan', '$Status')";

      // mengeksekusi query
      $this->db->query($sql);

      return;

   }

   public function editDataUserforAdmin($postData)
   {
      $id_pelanggan = $postData['id_pelanggan'];
      $nama = $postData['nama'];
      $email = $postData['email'];
      $alamat = $postData['alamat'];
      $nomor = $postData['nomor'];
      $password = $postData['password'];

      $sql = "UPDATE pelanggan SET Nama_pelanggan = '$nama', Email = '$email', Alamat = '$alamat', No_Handphone = '$nomor', Password = '$password' WHERE id_pelanggan = '$id_pelanggan'";

      $this->db->query($sql);

      return;
   }

   public function editDataLayanan($postData)
   {
      $id_layanan = $postData['id_layanan'];
      $Nama = $postData['nama_layanan'];
      $Harga = $postData['harga'];
      $Durasi = $postData['durasi'];
      $Keterangan = $postData['keterangan'];

      $sql = "UPDATE layanan SET Nama_layanan = '$Nama', Harga = '$Harga', Durasi = '$Durasi', Keterangan = '$Keterangan' WHERE id_layanan = '$id_layanan'";

      $this->db->query($sql);

      return;
   }

   public function editDataBooking($postData)
   {
      $id_booking = $postData['id_booking'];
      $Nama = $postData['nama'];
      $layanan = $postData['layanan'];
      $Tgl = $postData['tanggal'];
      $Jam = $postData['jam'];
      $Catatan = $postData['catatan'];
      $Status = $postData['status'];

      $sql = "UPDATE booking SET Nama = '$Nama', id_layanan = '$layanan', Tanggal_Booking = '$tgl', Jam_Booking = '$jam', Catatan = '$catatan', Status_booking = '$status' WHERE id_booking = '$id_booking'";

      $this->db->query($sql);

      return;
   }

      public function selectdataLaporan()
   {
      $sql = "SELECT * FROM booking b
               INNER JOIN pelanggan p ON p.id_pelanggan=b.id_pelanggan 
               INNER JOIN layanan l ON l.id_layanan=b.id_layanan";
      $query = $this->db->query($sql);
      $data = $query->getResultArray();
      return $data;
   }

   public function getDataByDateRange($start_date, $end_date)
{
    $builder = $this->db->table('booking b');
    $builder->select('*');
    $builder->join('pelanggan p', 'p.id_pelanggan = b.id_pelanggan');
    $builder->join('layanan l', 'l.id_layanan = b.id_layanan');
    $builder->where('b.Tanggal_Booking >=', $start_date);
    $builder->where('b.Tanggal_Booking <=', $end_date);
    $query = $builder->get();

    return $query->getResultArray();
}

   

}