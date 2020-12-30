<?php

namespace App\Controllers;

use TCPDF;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
<<<<<<< HEAD
        $this->email = \Config\Services::email();
=======
        $this->email = \Config\Services::email() ;
>>>>>>> 15468baa5d2e2e3c705c81bfa176061533cf35cd
    }


    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new TransaksiModel();
        $transaksi = $transaksiModel->join('barang', 'barang.id=transaksi.id_barang')
            ->join('user', 'user.id=transaksi.id_pembeli')
            ->where('transaksi.id', $id)
            ->first();

        return view('transaksi/view', [
            'transaksi' => $transaksi,
        ]);
    }
<<<<<<< HEAD
    public function index()
    {
        $transaksiModel = new \App\Models\TransaksiModel();
        $model = $transaksiModel->findAll();
        return view('transaksi/index', [
=======
    public function index(){
        $transaksiModel = new \App\Models\TransaksiModel();
        $model = $transaksiModel->findAll();
        return view('transaksi/index',[
>>>>>>> 15468baa5d2e2e3c705c81bfa176061533cf35cd
            'model' => $model,
        ]);
    }
    // untuk membuat pdf
<<<<<<< HEAD
    public function invoice()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);

        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);

        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);

        $html = view('transaksi/invoice', [
            'transaksi' => $transaksi,
            'pembeli' => $pembeli,
=======
    public function invoice(){
        $id = $this->request->uri->getSegment(3);
    
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);
    
        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);
            
        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);
    
        $html = view('transaksi/invoice',[
            'transaksi'=> $transaksi,
            'pembeli'=> $pembeli,
>>>>>>> 15468baa5d2e2e3c705c81bfa176061533cf35cd
            'barang' => $barang,
        ]);

        $pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('ProgressOn');
        $pdf->SetTitle('Invoice');
        $pdf->SetSubject('Invoice');
        // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->addPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        //untuk format pdf
<<<<<<< HEAD
        $this->response->setContentType('application/pdf');

        //Close and output PDF document
        $pdf->Output(__DIR__ . '/../../public/uploads/invoice.pdf', 'F');

        $attachment = base_url('uploads/Invoice.pdf');

        $message = "<h1>Invoice Pembelian</h1><p>Kepada " . $pembeli->username .
            "Berikut Invoice atas pembelian" . $barang->nama . "";
=======
        // $this->response->setContentType('application/pdf');

        //Close and output PDF document
        $pdf->Output(__DIR__.'/../../public/uploads/invoice.pdf', 'F');

        $attachment = base_url('uploads/Invoice.pdf');

        $message = "<h1>Invoice Pembelian</h1><p>Kepada ". $pembeli->username.
        "Berikut Invoice atas pembelian" .$barang->nama."";
>>>>>>> 15468baa5d2e2e3c705c81bfa176061533cf35cd

        $this->sendEmail($attachment, 'krisspriyargi@gmail.com', 'Invoice', $message);

        return redirect()->to(site_url('transaksi/index'));
<<<<<<< HEAD
    }
    //untuk mengirim ke email
    private function sendEmail($attachment, $to, $title, $message)
    {

        $this->email->setFrom('krisspriyargi@gmail.com', 'krisspriyargi');
        $this->email->setTo($to);

        $this->email->attach($attachment);

        $this->email->setSubject($title);

        $this->email->setMessage($message);

        if (!$this->email->send()) {
            return false;
        } else {
            return true;
        }
    }
=======
        
    }
        //untuk mengirim ke email
        private function sendEmail($attachment, $to, $title, $message){

            $this->email->setFrom('krisspriyargi@gmail.com','krisspriyargi');
            $this->email->setTo($to);

            $this->email->attach($attachment);

            $this->email->setSubject($title);

            $this->email->setMessage($message);

            if(! $this->email->send()){
                return false;
            }else {
                return true;
            }
        }   
>>>>>>> 15468baa5d2e2e3c705c81bfa176061533cf35cd
}
