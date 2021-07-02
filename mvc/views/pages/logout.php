<?php
//hủy session theo tên
unset($_SESSION['user']);
//xóa hết tất cả các session
// session_destroy();
header('location: login.php');

?>