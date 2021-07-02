<head>
    <link rel="stylesheet" href="public/css/login.css">
</head>

<?php if(isset($data["result"])){?>
    <h2 style="text-align: center"><?php 
    if($data["result"] == true){
        echo "Đăng ký thành công!";
    }
    else 
        echo "Đăng ký không thành công!";
    ?></h2>  
<?php } ?>

<form action="./Register/DangKi" method="post">
    <h1>Sign up</h1>
    <div class="container">
        <label><b>Username</b></label>
        <input class="input" id="Username" type="text" placeholder="Enter username" name="Username" required>
        <div id="messageUser" ></div>
        <label><b>Password</b></label>
        <input class="input" type="password" id="myInput" placeholder="Enter password" name="Password" pattern=".{8,}" required title="8 characters minimum">

        <!-- <label><b>Confirm Password</b></label>
        <input class="input" type="password" id="myInput" placeholder="Confirm password" name="Confirm" require> -->

        <label><b>Email</b></label>
        <input class="input" type="text" placeholder="Enter email: username@gmail.com" name="Email" pattern=".+@gmail.com" required>

        <input type="checkbox" onclick="myFunction()"> Show Password
        <button type="submit" name="btnResgister" class="btn btn-primary">Submit</button>
        <label><b>Already have an account ?</b></label>
        <a href="login.php"> Login</a>
    </div>
</form>

