<?php 
    class Register extends Controller{
        
        public $MemberModel;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
        }
        public function SayHi(){
            $this->view("master1", [
                "page"=>"register",
            ]);
        }
        public function DangKi(){
            // get data nguoi nhap
            if (isset($_POST["btnResgister"]) ){
                $Username = $_POST["Username"];
                $Password = $_POST["Password"];
                //$Password = password_hash($Password, PASSWORD_DEFAULT);
                $Email = $_POST["Email"];
                
            }
            // insert database by users
            $kq = $this->MemberModel->InsertNewUser($Username, $Password, $Email);
            // echo $kq;

            //show result
            $this->view("master1" ,[
                "page"=>"register",
                "result"=>$kq
            ]);

           
        }

    }



?>





