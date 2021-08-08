<?php 
     namespace App\Controllers;

     use CodeIgniter\Controller;
     use App\Models\Modelmahasiswa;
use Config\View;

class Mahasiswa extends Controller{

          public function index(){
               $mahs = new Modelmahasiswa();
               $data = [
                    'tampildata' => $mahs->tampildata()->getResult()
               ];

          echo View('viewtampilmahasiswa', $data); 
          }

          public function formtambah()
          {
               helper('form');
               echo View('viewformtambah');
          }

          public function simpandata(){
               $data = [
                    'no' => $this->request->getpost('no'),
                    'nama' => $this->request->getpost('nama'),
                    'alamat' => $this->request->getpost('alamat'),
                    'jenis_kel' => $this->request->getpost('jenis_kel'),
                    'hobby' => $this->request->getpost('hobby'),
                    'agama' => $this->request->getpost('agama'),
                    'tgl_lahir' => $this->request->getpost('tgl_lahir'),
               ];

          $mhsw = new Modelmahasiswa();

          $simpan = $mhsw->simpan($data);

          if ($simpan) {
               return redirect()->to('/mahasiswa/index');
          }
          }
          
          public function hapus($no)
          {

               $uri = service('uri');
               $no = $uri->getSegment('3');
               
               $mhsw = new Modelmahasiswa();
               
               $mhsw->hapusdata($no);

               return redirect()->to('/mahasiswa/index');
     
          }

          function formedit(){

               helper('form');
               $uri = service('uri');
               $no = $uri->getSegment('3');

               $mhsw = new Modelmahasiswa();

               $ambildata = $mhsw->ambildata($no);

               if(count($ambildata->getResult()) > 0){
                    $row = $ambildata->getrow();
                    $data = [
                         'no' => $no,
                         'nama' => $row->nama,
                         'alamat' => $row->alamat,
                         'jenis_kel' => $row->jenis_kel,
                         'hobby' => $row->hobby,
                         'agama' => $row->agama,
                         'tgl_lahir' => $row->tgl_lahir,
                    ];
                    
                    echo view('viewformedit', $data);
               }
          }

          function updatedata()
          {
               $no = $this->request->getpost('no');

               $data = [
                    'nama' => $this->request->getpost('nama'),
                    'alamat' => $this->request->getpost('alamat'),
                    'jenis_kel' => $this->request->getpost('jenis_kel'),
                    'hobby' => $this->request->getpost('hobby'),
                    'agama' => $this->request->getpost('agama'),
                    'tgl_lahir' => $this->request->getpost('tgl_lahir'),
               ];

               $mhsw = new Modelmahasiswa();

               $update = $mhsw->editdata($data, $no);

               if ($update) {
                    return redirect()->to('/mahasiswa/index');
               }
          }
     }

?>