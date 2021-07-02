<?php 
    class ForgotPassword extends Controller{
        
        public $MemberModel;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
        }
        public function SayHi(){
            $this->view("master1", [
                "page"=>"forgot",
            ]);
        }
        public function Reset(){
            // get data nguoi nhap
            if (isset($_POST["btnReset"]) ){
                $Username = $_POST["Username"];
                $Email = $_POST['Email'];
                $kq=$this->MemberModel->CheckMail($Username, $Email);
                // var_dump ($kq);
                 //show result
                 $this->view("master1", [
                            "page"=>"forgot",
                            "result"=>$kq
                        ]);
                
            }

        }

    }

?>





