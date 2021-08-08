<?php 
     namespace App\Models;

     use CodeIgniter\Model;
     class Modelmahasiswa extends Model{

          function __construct()
          {
               $this->db = db_connect();
          }

          function tampildata(){
               return $this->db->table('mahasiswa')->get();
          }

          function simpan($data){
               return $this->db->table('mahasiswa')->insert($data);
          }

          function hapusdata($no)
          {
               return $this->db->table('mahasiswa')->delete(['no' => $no]);
          }

          function ambildata($no)
          {
               return $this->db->table('mahasiswa')->getWhere(['no' => $no]);
          }

          function editdata($data, $no)
          {
               return $this->db->table('mahasiswa')->update($data, ['no' => $no]);
          }
}

?>