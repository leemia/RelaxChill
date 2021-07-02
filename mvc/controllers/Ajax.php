<!-- kich hoat model - khong hien giao dien -->
<?php
    class Ajax extends Controller{
        public $MemberModel;
        public $Music;

        public function __construct(){
            $this->MemberModel = $this->model("MemberModel");
            $this->Music = $this->model("Music");
        }
        
        public function CheckNewUser(){
            $user = $_POST["user"];
            echo $this->MemberModel->CheckNewUser($user);
        }



    }
?>