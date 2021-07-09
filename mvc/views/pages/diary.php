<?php 
//lấy username
 $username = $data["username"];
 if(isset($data["alllog"])) {
    $row = mysqli_fetch_assoc($data["alllog"]);
}
if(isset($data["currentpage"])){
    $currentPage = $data["currentpage"];
}
// echo $username;
?>
<link href='public/admin/DataTables/datatables.min.css?v=1' rel='stylesheet' type='text/css'>
<link href='public/css/table.css' rel='stylesheet' type='text/css'>
<!-- <link href="public/admin/css/stylesadmin.css" rel="stylesheet" /> -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="Home">️️<img src="public\assets\img\pagetop.png" alt="logo" title="Logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btndd"><?php echo $username;?></a>
                        <div class="dropdown-content">
                            <a href="./User/Profile/<?php echo $username;?>">Profile</a>
                            <a href="./User/LoadDiary/<?php echo $username; ?>/10/1">Diary</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#donate">Donate</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="User/Home/<?php echo $username; ?>">Back</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-white text-center">
    <div class="container d-flex align-items-center flex-column ">
        <!-- Masthead Avatar Image-->
        <!-- <img class="masthead-avatar mb-5" src="public\assets\img\logo.png" alt="..." width="100" /> -->

    </div>

</header>
<!-- end of header -->

<!-- Table -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Diary</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Diary
            </div>
            <div class="card-body">
                
                <form method = "POST" action="./User/SearchDiary/<?php echo $username;?>/<?php echo $data["logperpage"];?>/<?php echo $data["currentpage"];?>">
                    <div class="row">
                        <div class="input-wrap col-sm-12">
                        <input class="rbtn" type="submit" value="Search" name="search" />
                            <input type="text" placeholder="Type username" name="searchdiary" autocomplete="off" />
                            <!-- <button class="rbtn" type="button" onclick="window.location.href='./User/LoadDiary/<?php echo $userID; ?>/10/1'">Reset</button> -->
                        </div>
                    </div>
                </form>
                    <br/>
                    <?php 
                    if(isset($data["result"])) 
                    {
                        echo $data["result"];
                    } 
                    ?>
                    <br/>
                
                <br/>
                <form method = "POST" action = "./User/DeleteDiary/<?php echo $username;?>/<?php echo $data["logperpage"];?>/<?php echo $data["currentpage"];?>">
                    <table id="userTable" class='display dataTable' width='100%'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>SongTitle</th>
                            <th>Type</th>
                            <th><button name="deletediary" value="delete" style="border:none; background-color:#D0B28B; color:#fff"> <i class="fa fa-trash" aria-hidden="true"></i></button ></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arrDiaryId = [];
                        if(isset($data["limitlog"])) {
                            $i=1;
                            while ($row = mysqli_fetch_array($data["limitlog"])) {
                                // $username = $row["username"];
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row["date"]; ?></td>
                                <td><?php echo $row["time"]; ?></td>
                                <td><?php echo $row["songtitle"]; ?></td>
                                <td><?php echo $row["typemusic"]; ?></td>
                                <td>
                                    <input type="checkbox" name="checkbox[]" value = "<?php  echo $row['idlh'] ?>" >
                                </td>
                            </tr>

                         <?php
                            }
                        }
                
                    ?>
                    </tbody>
                    </table>
                </form>
            </div>
            <!-- pagination -->
            <div>
            <?php
            //nếu có trả result thì mới gọi phân trang
            if(isset($data["alllog"])){
                $logCount = mysqli_num_rows($data["alllog"]);
                // echo $logCount;
                $logPerPage = 10;
                $totalPages = ceil($logCount/$logPerPage);
                // echo $totalPages;
                // echo $currentPage;
                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                if($totalPages > 1){
                    if ($currentPage > 1){
                        echo '<a class = "button" style="margin:0 5px;text-decoration:none;" href = "User/LoadDiary/'.$userID.'/'.$logPerPage.'/'.($currentPage-1).'">Previous</a>'; 
                    }
                    for($i=1; $i<=$totalPages; $i++){
                        if ($i == $currentPage){
                            echo '<button style="border:none">'.$i.'</button>  ';
                        }
                        else{
                            echo '<a  class = "button" style="margin:0 5px;text-decoration:none;" href = "User/LoadDiary/'.$userID.'/'.$logPerPage.'/'.$i.'">'.$i .'</a>'; 
                        }
                    }
                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
                    if ($currentPage < $totalPages){
                        echo '<a class = "button" style="margin:0 5px;text-decoration:none;" href = "User/LoadDiary/'.$userID.'/'.$logPerPage.'/'.($currentPage+1).'">Next</a>'; 
                    }
                }
                
            }
            
            ?>
            </div>
        </div>
    </div>
</main>

