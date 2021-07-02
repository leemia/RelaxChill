 
<?php
// $arr = array();
// // var_dump($arr);
// while($row = mysqli_fetch_array($data["link"])){
//     // echo $row["SongLink"];
//     array_push($arr, $row["SongLink"]);
// }
// print_r($arr);
// var_dump ($data["result"]);
$user = [];
if(isset($data["result"])){
    $arr = json_decode($data["result"], true);
    // print_r($arr);
    $_SESSION['user'] = $arr;
    // echo $_SESSION['user']['username'];
    $user =  $_SESSION['user'];
    //nếu là admin thì chuyển qua trang admin 
    // if($user['username']=='admin'){
    //     header('location :....')
    // }
}

?>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">️️<img src="public\assets\img\pagetop.png" alt="logo" title="Logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Home">Home</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#donate">Donate</a></li>
                <?php if(isset($user['username'])){?>
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btndd"><?php echo $user['username']     ?></a>
                        <div class="dropdown-content">
                            <a href="userdiary.html">Diary</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
                 <?php } else{ ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Login">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-white text-center">
    <div class="container d-flex align-items-center flex-column ">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="public\assets\img\logo.png" alt="..." width="100" />

    </div>

</header>
<!-- end of header -->
<div class="row my-5">
    <div class="col-md-6 my-4 text-center">
        <ul>
            <button type="button" class="butstyle btn btn-lg ">our song</button>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton0','myAudio0');myStop('playButton0','myAudio0')"><img id="playButton0" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button> Ghibli</p>
                <audio src="public/music/Playlist/nhạc ghibli.mp3" style='display:none' id="myAudio0" controls  loop></audio>
            </li>
            <!-- <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton0','myAudio0');myStop('playButton0','myAudio0')"><img id="playButton0" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button> Ghibli</p>
                <audio src="$arr[0]" style='display:none' id="myAudio0" controls loop></audio>
            </li> -->
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton1','myAudio1');myStop('playButton1','myAudio1');"><img id="playButton1" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Piano</p>
                <audio src="public/music/Playlist/piano.mp3" style='display:none' id="myAudio1" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton2','myAudio2');myStop('playButton2','myAudio2')"><img id="playButton2" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>BTS piano</p>
                <audio src="public/music/Playlist/BTS piano.mp3" style='display:none' id="myAudio2" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton3','myAudio3');myStop('playButton3','myAudio3')"><img id="playButton3" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Lofi</p>
                <audio src="public/music/Playlist/lofi.mp3" style='display:none' id="myAudio3" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton4','myAudio4');myStop('playButton4','myAudio4')"><img id="playButton4" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Blacpink piano</p>
                <audio src="public/music/Playlist/Blackpink piano.mp3" style='display:none' id="myAudio4" controls loop></audio>
            </li>
        </ul>


    </div>
    <div class="col-md-6 my-4 text-center">
        <ul>

            <button type="button" class="butstyle btn btn-lg ">white noise</button>

            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton5','myAudio5');myStop('playButton5','myAudio5');"><img id="playButton5" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Forest</p>
                <audio src="public/music/white_sound/la-cay-xao-xac.mp3" style='display:none' id="myAudio5" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton6','myAudio6');myStop('playButton6','myAudio6')"><img id="playButton6" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Rain</p>
                <audio src="public/music/white_sound/rain-03.wav" style='display:none' id="myAudio6" controls loop></audio>

            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton7','myAudio7');myStop('playButton7','myAudio7')"><img id="playButton7" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Bird</p>
                <audio src="public/music/white_sound/tieng-chim-hot.mp3" style='display:none' id="myAudio7" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton8','myAudio8');myStop('playButton8','myAudio8')"><img id="playButton8" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Windy</p>
                <audio src="public/music/white_sound/tieng-gio-thoi.mp3" style='display:none' id="myAudio8" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton9','myAudio9');myStop('playButton9','myAudio9')"><img id="playButton9" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button>Cafe sound</p>
                <audio src="public/music/white_sound/tieng-noi-chuyen.mp3" style='display:none' id="myAudio8" controls loop></audio>
            </li>
        </ul>
    </div>
</div>
