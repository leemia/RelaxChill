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

    public function CheckMember($Username, $Password){
        $qr = "SELECT * FROM member WHERE username = '$Username'";
        $row = mysqli_query($this->con, $qr);
        $data = mysqli_fetch_assoc($row);
        //kiểm tra user đã tồn tại hay chưa
        if (mysqli_num_rows($row) == 1 ){
             //nếu pass đã mã hóa thì xài hàm password_verify() để giải mã
            if($Password == $data['pass']){
                //lưu vào session
                return json_encode($data);
                // $_SESSION['user'] = $data;
                // header('location: Home.php');
            }
            else {
                $result = 1;// sai mật khẩu
            }
        }
        else{
            $result  = 2;//sai tên đăng nhập
        }
        return json_encode($result);    
        // $row = mysqli_query($this->con, $qr);
        // $data = mysqli_fetch_assoc($row);
        // var_dump($row);
        // //kiểm tra user đã tồn tại hay chưa
        // if (mysqli_num_rows($row) == 1 ){
        //      //nếu pass đã mã hóa thì xài hàm password_verify() để giải mã
        //     if($Password == $data['pass']){
        //         //lưu vào session
        //         $_SESSION['user'] = $data;
        //         header('location: Home.php');
        //     }
        //     else {
        //         // $result = false;
        //         echo "Sai mật khẩu";
        //     } 
           
        // }
        // else{
        //     echo "Username không tồn tại";
        // }
       

    }

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
}
?>