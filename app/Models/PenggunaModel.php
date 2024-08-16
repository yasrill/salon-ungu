<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class PenggunaModel extends Model
{
    protected $db;
    protected $request;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    public function cekLogin()
    {
        $username = $this->request->getPost('uname');
        $password = $this->request->getPost('password');

        $sql = "SELECT * FROM pelanggan WHERE Nama_pelanggan='$username' AND password='$password'";

        $query = $this->db->query($sql);

        if ($query->getNumRows() > 0) {
            $hasil = $query->getResultArray()[0];
        } else {
            $hasil = "Login gagal brow, silahkan coba lagi";
        }

        return $hasil;
    }

    public function selectdatalayanan()
    {
        $sql = "SELECT * FROM layanan";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }

    public function insertdatabooking()
    {
        $id_pelanggan = $this->request->getPost('id_pelanggan');
        $id_layanan = $this->request->getPost('id_layanan');
        $nama = $this->request->getPost('nama');
        $tanggal = $this->request->getPost('tanggal');
        $jam = $this->request->getPost('jam');
        $pembayaran = $this->request->getPost('pembayaran');
        $catatan = $this->request->getPost('catatan');

        $sql = "INSERT INTO booking(id_pelanggan, id_layanan, Nama, Tanggal_Booking, Jam_Booking, Metode_pembayaran, Catatan)
                VALUES('$id_pelanggan','$id_layanan','$nama', '$tanggal', '$jam', '$pembayaran', '$catatan')";

        $this->db->query($sql);

        $cari_booking_id = $this->db->query("SELECT * FROM booking ORDER BY id_booking DESC LIMIT 1");
        $data = $cari_booking_id->getResultArray()[0]['id_booking'];
        return $data;
    }

    public function insertdatakontak()
    {
        $nama = $this->request->getPost('nama');
        $nomor = $this->request->getPost('nomorTelp');
        $email = $this->request->getPost('email');
        $pesan = $this->request->getPost('pesan');

        $sql = "INSERT INTO kontak(Nama, Email, No_Telpon, Pesan)
                VALUES('$nama', '$nomor', '$email', '$pesan')";

        $this->db->query($sql);

        return;
    }

    public function selectdatauser()
    {
        $sql = "SELECT * FROM pelanggan";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }

    public function selectdatabooking()
    {
        $id_booking = $this->request->getGet('id_booking');
        $sql = "SELECT * FROM booking b
                INNER JOIN pelanggan p ON p.id_pelanggan=b.id_pelanggan 
                INNER JOIN layanan l ON l.id_layanan=b.id_layanan 
                WHERE b.id_booking='$id_booking'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }

    public function insertdataregister()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $nomor = $this->request->getPost('nomor');

        $sql = "INSERT INTO pelanggan(Nama_pelanggan, Email, Alamat, No_Handphone, Password)
                VALUES('$nama', '$email', '$alamat', '$nomor', '$password')";

        $this->db->query($sql);

        return;
    }

    public function insertkonfirmasi()
    {
        $id_booking = $this->request->getGet('id_booking');
        $sql = "UPDATE booking SET Status_booking='Terkonfirmasi' WHERE id_booking='$id_booking'";
        $this->db->query($sql);
        return;
    }

    public function insertbatalkan()
    {
        $id_booking = $this->request->getGet('id_booking');
        $sql = "UPDATE booking SET Status_booking='Dibatalkan' WHERE id_booking='$id_booking'";
        $this->db->query($sql);
        return;
    }

   public function insertBuktiPembayaran($id_booking)
{
    $file = $this->request->getFile('bukti_pembayaran');

    if ($file->isValid() && !$file->hasMoved()) {
        // Generate nama file yang unik
        $name = $file->getRandomName();

        // Pindahkan file ke direktori tujuan
        $file->move('./public/buktibayar', $name);

        // Simpan nama file ke dalam database
        $sql = "UPDATE booking SET Bukti_bayar='$name' WHERE id_booking='$id_booking'";
        $this->db->query($sql);

        return true; // Atau lakukan sesuatu yang sesuai setelah berhasil
    }

    return false; // Atau lakukan penanganan kesalahan jika gagal
}

public function insertAlasanBatal($id_booking)
{
    $alasan = $this->request->getPost('alasan_batal');

    $sql = "UPDATE booking SET Alasan_batal ='$alasan' WHERE id_booking='$id_booking'";
    $this->db->query($sql);

    return;
}





    

}
