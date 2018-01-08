<?php
    //include class model
    include "model/model.php";
    
    class controller{
        //variabel public
        public $model;
        
        //inisialisasi awal untuk class
        function __construct(){
            $this->model = new model(); //variabel model merupakan objek baru yang dibuat
            }
            
            function index(){
                $data = $this->model->selectAll(); //pada class ini (controller), akses variabel
                include "view/view.php"; //memanggil view.php pada folder view
            }
            
            function viewEdit($nim){
                $data = $this->model->selectMhs($nim); //select data mahasiswa dengan nim...
                $row =$this->model->fetch($data); //fetch hasil select
                include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
            }
            
            function viewInsert(){
                include "view/view_add.php"; //menampilkan halaman add data
            }
            
            function viewFunct(){
                include 'view/view_function.php';
            }
            
            //fungsi updata data
            function updata(){
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $angkatan = $_POST['angkatan'];
                $fakultas = $_POST['fakultas'];
                $prodi = $_POST['prodi'];
                
                $update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
                header("location:index.php");
            }
            
            function __destruct(){
            }
        }
?>