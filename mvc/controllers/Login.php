<?php 
    class Login extends Controller{
        
        public $MemberModel;
        public $MusicModel;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
            $this->MusicModel = $this->model("MusicModel");
        }
        public function SayHi(){
            $this->view("masterHome", [
                "page"=>"login",
            ]);
        }
        //LOGIN
        public function DangNhap(){
            // get data nguoi nhap
            if (isset($_POST["btnLogin"]) ){
                $Username = $_POST["username"];
                $Password = $_POST["pass"];
                //$Password = password_hash($Password, PASSWORD_DEFAULT);
                $kq=$this->MemberModel->CheckMember($Username, $Password);
                // load link nhạc từ db về để sau khi login nghe nhạc đc
                $song = $this->MusicModel->ourSong();
                $noise = $this->MusicModel->whiteNoise();
                // var_dump ($kq);
                 //show result
                if($kq == '1' || $kq == '2'){
                    $this->view("masterHome" ,[
                        "page"=>"login",
                        "result"=>$kq
                    ]);
                }
                //sau khi đúng acc nếu username = admin thì qua admin
                else{
                   
                    $arr = json_decode($kq, true); 
                    // var_dump($arr);
                    $_SESSION['useradmin'] = $arr;
                    if($arr['username'] == 'admin'){
                        $this->view("masterAdmin" ,[
                            "page"=>"adminhome"
                        ]);
                    }
                    else{
                        $this->view("masterHome" ,[
                            "page"=>"user",
                            "result"=>$kq,
                            "song"=>$song,
                            "noise"=>$noise
                        ]);
                    }
                    
                }
            }
  
        }
        
        //FORGOT PASSWORD
        public function ForgotPassword(){
            $this->view("masterHome", [
                "page"=>"forgot",
            ]);
        }
        public function Reset(){
            // get data nguoi nhap
            if (isset($_POST["btnReset"]) ){
                $username = $_POST["username"];
                $email = $_POST['email'];
                $kq=$this->MemberModel->CheckMail($username, $email);
                // var_dump ($kq);
                 //show result
                 $this->view("masterHome", [
                            "page"=>"forgot",
                            "result"=>$kq
                        ]);
                
            }

        }

        //REGISTER
        public function Register(){
            $this->view("masterHome", [
                "page"=>"register",
            ]);
        }
        public function DangKi(){
            // get data 
            if (isset($_POST["btnResgister"]) ){
                $username = $_POST["username"];
                $pass = $_POST["pass"];
                //$pass = password_hash($pass, PASSWORD_DEFAULT);
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                // insert database by users
                $kq = $this->MemberModel->InsertNewUser($username, $pass, $fullname, $email);
                // echo $kq; 
                //Kiểm tra đăng nhập thành công/thất bại (true/false)

                //show result
                $this->view("masterHome" ,[
                    "page"=>"register",
                    "result"=>$kq
                ]);
               
            }
            
        }



    }
?>





