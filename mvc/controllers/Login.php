<?php 
    class Login extends Controller{
        
        public $MemberModel;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
        }
        public function SayHi(){
            $this->view("master1", [
                "page"=>"login",
            ]);
        }
        public function DangNhap(){
            // get data nguoi nhap
            if (isset($_POST["btnLogin"]) ){
                $Username = $_POST["Username"];
                $Password = $_POST["Password"];
                //$Password = password_hash($Password, PASSWORD_DEFAULT);
                // echo $Username;
                // echo "<br/>";
                // echo $Password;
                //check username, password
                $kq=$this->MemberModel->CheckMember($Username, $Password);
                // var_dump ($kq);
                 //show result
                if($kq == '1' || $kq == '2'){
                    $this->view("master1" ,[
                        "page"=>"login",
                        "result"=>$kq
                    ]);
                }
                else{
                    $this->view("master1" ,[
                        "page"=>"home",
                        "result"=>$kq
                    ]);
                }
                
            }
            

           

           
        }

    }



?>





