<?php
class MemberModel extends DB{

    public function InsertNewUser($Username, $Password, $Email){
        $sql = "INSERT INTO member(Username, Pass, Email) VALUES ( '$Username', '$Password', '$Email')";
        
        if (mysqli_query($this->con, $sql) ){
            $result = true;
        }
        else {
            $result = false;
        }            
        return json_encode($result);
    }
    //login
    public function CheckMember($Username, $Password){
        $qr = "SELECT * FROM member WHERE username = '$Username'";
        $row = mysqli_query($this->con, $qr);
        $data = mysqli_fetch_assoc($row);
        //kiểm tra user đã tồn tại hay chưa
        if (mysqli_num_rows($row) == 1 ){
             //nếu pass đã mã hóa thì xài hàm password_verify() để giải mã
            if($Password == $data['pass']){
                //lưu vào session
                $_SESSION['user'] = $data;
                return json_encode($_SESSION['user']);
            }
            else {
                $result = 1;// sai mật khẩu
            }
        }
        else{
            $result  = 2;//sai tên đăng nhập
        }
        return json_encode($result);    
    }
    //register
    public function CheckNewUser($user){
        $sql = "SELECT Id FROM member WHERE Username = '$user' ";
        $row = mysqli_query($this->con, $sql);
        //kiểm tra user trùng
        if (mysqli_num_rows($row) > 0 ){
            // $result = true;
            echo "Username bị trùng!";
        }
        else {
            // $result = false;
            echo "Username không trùng!";
        } 
        // return json_encode(echo);
    }
    //forgot
    public function CheckMail($Username, $Email){
        $qr = "SELECT * FROM member WHERE  Username = '$Username' and Email = '$Email'";
        $row = mysqli_query($this->con, $qr);
        //kiểm tra username và email có tồn tại không
        if (mysqli_num_rows($row) > 0 ){
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
            $PasswordReset = substr(str_shuffle($chars), 0, 8);
            $update = mysqli_query($this->con, "UPDATE  member SET Pass ='$PasswordReset'
            WHERE Email = '$Email'"); 
        }
        else {
            $PasswordReset = false;
        } 
        return json_encode($PasswordReset);
          
    }
}
?>