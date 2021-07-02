<?php 
    class Login extends Controller{
        
        public $MemberModel;
        public $MusicModel;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
            $this->MusicModel = $this->model("MusicModel");
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
                $kq=$this->MemberModel->CheckMember($Username, $Password);
                $song = $this->MusicModel->ourSong();
                $noise = $this->MusicModel->whiteNoise();
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
                        "result"=>$kq,
                        "song"=>$song,
                        "noise"=>$noise
                    ]);
                }
            }
  
        }

    }
?>





