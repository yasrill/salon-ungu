<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class Booking extends BaseController
{
    protected $PenggunaModel;

    public function __construct()
    {
        $this->PenggunaModel = new PenggunaModel();
    }

    public function booking()
    {
        if (empty(session()->get('data_login'))) {
            return redirect()->to('/Login/login');
        }

        $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
        $data['title'] = "Booking | Salon Ungu";
        $data['login_status'] = session()->get('data_login');

        return view('pages/Booking', $data);
    }

    public function aksi_booking()
{
    $id_booking = $this->PenggunaModel->insertdatabooking();
    $pembayaran = $this->request->getPost('pembayaran');

    if ($pembayaran == 'Online') {
        return redirect()->to('/Booking/konfirmasiBookOnline?id_booking=' . $id_booking);
    } elseif ($pembayaran == 'Offline') {
        return redirect()->to('/Booking/konfirmasiBookOffline?id_booking=' . $id_booking);
    }

}

    public function konfirmasiBookOffline()
    {
        $data['user'] = $this->PenggunaModel->selectdatauser();
        $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
        $data['booking'] = $this->PenggunaModel->selectdatabooking();
        $data['title'] = "Konfirmasi Booking Offline | Salon Ungu";

        return view('/pages/KonfirmasiBookOffline', $data);
    }

    public function konfirmasiBookOnline()
    {
        $data['user'] = $this->PenggunaModel->selectdatauser();
        $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
        $data['booking'] = $this->PenggunaModel->selectdatabooking();
        $data['title'] = "Konfirmasi Booking Online | Salon Ungu";

        return view('/pages/KonfirmasiBookOnline', $data);
    }
    
    public function terkonfirmasiOnline()
    {
        $this->PenggunaModel->insertkonfirmasi();
        $data['booking'] = $this->PenggunaModel->selectdatabooking();
        $data['title'] = "Bukti Pembayaran | Salon Ungu";

        // return redirect()->to('/Beranda/index');
        return view('/pages/BuktiPembayaran', $data);
    }



    public function terkonfirmasiOffline()
    {
        $this->PenggunaModel->insertkonfirmasi();

        return redirect()->to('/Beranda/index');
    }

    public function dibatalkan()
    {
        $this->PenggunaModel->insertbatalkan();
        $data['booking'] = $this->PenggunaModel->selectdatabooking();
        $data['title'] = "Verifikasi Pembatalan | Salon Ungu";

        // return redirect()->to('/Booking/booking');
        return view('/pages/VerifikasiBatal', $data);
    }

    public function buktiBayarOnline()
    {
        $id_booking = $this->request->getGet('id_booking');
        $file = $this->request->getFile('bukti_pembayaran');

        if ($file->isValid() && !$file->hasMoved()) {
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
            $fileExtension = $file->getClientExtension();

            if (in_array($fileExtension, $allowedExtensions)) {
                // Panggil model untuk menyimpan bukti pembayaran
                $this->PenggunaModel->insertBuktiPembayaran($id_booking, $file);

                return redirect()->to('/Beranda/index');
                // ->with('status', 'Anda telah berhasil, datang tepat waktu')
            } else {
                // Handle jika ekstensi file tidak diizinkan
                $error = 'Jenis file yang diunggah tidak diizinkan. Mohon unggah file dengan ekstensi JPG, PNG, atau PDF.';
            }
        } else {
            // Handle kesalahan jika unggah file gagal
            $error = 'Gagal mengunggah bukti pembayaran.';
        }

        return redirect()->back()->withInput()->with('error', $error);
    }

    public function verifikasiBatal()
    {
        $id_booking = $this->request->getGet('id_booking');
        $this->PenggunaModel->insertAlasanBatal($id_booking);
    
        return redirect()->to('/Beranda/index');
    }

    public function printpdfBookOff()
{
    $data['user'] = $this->PenggunaModel->selectdatauser();
    $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
    $data['booking'] = $this->PenggunaModel->selectdatabooking();
    $data['title'] = "Konfirmasi Booking Offline | Salon Ungu";

    $html = view('pages/printpdfBookOff', $data);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Opsi) Mengatur ukuran kertas dan orientasi
    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    // Menyimpan file PDF ke server jika diperlukan
    // $output = $dompdf->output();
    // file_put_contents('path/to/save.pdf', $output);

    // Mengirim file PDF kepada pengguna
    $dompdf->stream("Konfirmasi_Booking_Offline.pdf");
}

public function printpdfBookOn()
{
    $data['user'] = $this->PenggunaModel->selectdatauser();
    $data['layanan'] = $this->PenggunaModel->selectdatalayanan();
    $data['booking'] = $this->PenggunaModel->selectdatabooking();
    $data['title'] = "Konfirmasi Booking Online | Salon Ungu";

    $html = view('pages/printpdfBookOn', $data);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Opsi) Mengatur ukuran kertas dan orientasi
    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    // Menyimpan file PDF ke server jika diperlukan
    // $output = $dompdf->output();
    // file_put_contents('path/to/save.pdf', $output);

    // Mengirim file PDF kepada pengguna
    $dompdf->stream("Konfirmasi_Booking_Online.pdf");
}





}

   