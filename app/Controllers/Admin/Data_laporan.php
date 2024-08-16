<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// inisialisasi model yang akan digunakan
use App\Models\AdminModel;
// inisialisasi agar bisa terima data seperti POST atau GET
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class Data_laporan extends BaseController
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
    $data['user'] = $this->AdminModel->selectdatauserForAdmin();
    $data['layanan'] = $this->AdminModel->selectdatalayananforAdmin();
    $data['booking'] = $this->AdminModel->selectdataLaporan();
    $data['title'] = "Data Laporan | Salon Ungu";

    return view('admin/Data_laporan', $data);
}

public function generatePDF()
{
    $start_date = $this->request->getPost('start_date');
    $end_date = $this->request->getPost('end_date');

    // Panggil method pada model untuk mengambil data laporan berdasarkan rentang waktu
    $data['laporan'] = $this->AdminModel->getDataByDateRange($start_date, $end_date);

    // Panggil tampilan khusus untuk laporan PDF
    $html = view('admin/laporan_pdf', $data);

    // Gunakan library atau tool yang Anda pilih untuk membuat file PDF
    // Contoh menggunakan library Dompdf
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    // Tampilkan file PDF kepada pengguna atau berikan opsi unduh file
    $dompdf->stream('laporan.pdf', ['Attachment' => false]);
}




}

?>