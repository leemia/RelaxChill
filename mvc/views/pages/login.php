<h1>Login</h1>
<link rel="stylesheet" href="public/css/login.css">
    <?php 
    if(isset($data['result'])) {
    ?>
    <p style=" margin-top: 40px; text-align: center; font-size: 20px; font-weight: bold;">
    <?php if($data['result'] == 1){
            echo "Sai mật khẩu, xin đăng nhập lại";
        }
        else if($data['result'] == 2){
            echo "Tên đăng nhập sai, xin đăng nhập lại";
        }
    ?>
    <?php } ?>
    </p>

    <form action="./Login/DangNhap" method="post">

        <div class="container">
            <label><b>Username</b></label>
            <input class="input" type="text" placeholder="Enter username" name="Username" required>
            <label><b>Password</b></label>
            <input class="input" type="password" id="myInput" placeholder="Enter password" name="Password" required>
            <input type="checkbox" onclick="myFunction()"> Show Password
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
            <a href="ForgotPassword">Forgot Password ?</a>
            <a href="Register">Sign up</a>

        </div>
    </form>
    


