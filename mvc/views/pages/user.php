<?php
//hứng kết quả truyền qua từ Musicmodel từ Home.php
if(!isset($_SESSION['login'])){
    header("location:http://localhost/RelaxChill/Login");
}
$username = $_SESSION['login']["username"];
$userId = $_SESSION['login']["id"];
$arrSongLink = [];
$arrSongName = [];
$arrSongId = [];
if(isset($data["song"])){
    while($row = mysqli_fetch_array($data["song"])){
        // echo $row["songlink"];
        array_push($arrSongLink, $row["songlink"]);
        array_push($arrSongName, $row["songtitle"]);
        array_push($arrSongId, $row["idmusic"]);
    }
}
$arrNoiseLink = [];
$arrNoiseName = [];
$arrNoiseId = [];
if(isset($data["noise"])){
    while($row = mysqli_fetch_array($data["noise"])){
        // echo $row["songlink"];
        array_push($arrNoiseLink, $row["songlink"]);
        array_push($arrNoiseName, $row["songtitle"]);
        array_push($arrNoiseId, $row["idmusic"]);
    }
}
// print_r($arrNoiseId);
// var_dump ($data["result"]);
//hứng kết quả truyền qua từ Membermodel từ Login.php
// $user = [];
// if(isset($data["result"])){
//     $user = json_decode($data["result"], true);
//     // print_r($user);
    
// }

?>
<header class="top">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">️️<img src="public\assets\img\pagetop.png" alt="logo" title="Logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="topmenu navbar-nav ml-auto" style="font-family: 'Nanum Gothic', sans-serif;">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="User/Home/<?php echo $username; ?>"><?php echo $username; ?></a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./User/Profile/<?php echo $username;?>">Profile</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./User/LoadDiary/<?php echo $username; ?>/10/1">Diary</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./Login/logout">Logout</a></li>
                <li class="search"><a href="#"> <i class="fas fa-search fa-lg pointer "></i></a></li>
            </ul>
        </div>
    </div>
    <div class="search-bar" style="display:none">
				<form class="d-flex w-100 justify-content-center" method="GET">
					<input class=" align-self-center search-input form-control searchbar" type="text" name="s" size="40" placeholder="What are you searching for?">
					<!-- <a href="#"> <i class="fas fa-search fa-lg pointer "></i> -->
                    <button type="submit" class="align-self-center"><i class="fas fa-search fa-lg pointer "></i>
					</button>
				</form>
</div>
</nav>

</header>
<div class="masthead text-white text-center">
    <div class="container d-flex align-items-center flex-column ">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="public\assets\img\logo.png" alt="..." width="100" />

    </div>

</div>
<!-- end of header -->
<div class="row my-5">
   
    <div class="col-lg-6 my-4 text-center">
        <ul>
            <button id = "btnSong" type="button"class =" butstyle btn btn-lg " style=" margin-bottom: 20px;"  >our song</button>
            
            <div id = "showSong" style="height: 450px; overflow: auto ;   display:none; ">
            <div class="slider-color" >
                <input type="range" min="0" max="100" value="50" class="slider" id="myRange">
    
            </div>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton0','myAudio0', <?php echo $arrSongId[0]  ?>,<?php echo $userId; ?>);myStop('playButton0','myAudio0')"><img id="playButton0" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button> <?php echo $arrSongName[0] ?></p>
                <audio src="<?php echo $arrSongLink[0] ?>" style='display:none' id="myAudio0" controls  loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton1','myAudio1', <?php echo $arrSongId[1]  ?>, <?php echo $userId; ?>);myStop('playButton1','myAudio1')"><img id="playButton1" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[1] ?></p>
                <audio src="<?php echo $arrSongLink[1] ?>" style='display:none' id="myAudio1" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton2','myAudio2',  <?php echo $arrSongId[2]  ?>,  <?php echo $userId; ?>);myStop('playButton2','myAudio2');"><img id="playButton2" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[2] ?></p>
                <audio src="<?php echo $arrSongLink[2] ?>" style='display:none' id="myAudio2" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton3','myAudio3', <?php echo $arrSongId[3]  ?>,  <?php echo $userId; ?>);myStop('playButton3','myAudio3')"><img id="playButton3" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[3] ?></p>
                <audio src="<?php echo $arrSongLink[3] ?>" style='display:none' id="myAudio3" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton4','myAudio4', <?php echo $arrSongId[4]  ?>, <?php echo $userId; ?>);myStop('playButton4','myAudio4')"><img id="playButton4" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[4] ?></p>
                <audio src="<?php echo $arrSongLink[4] ?>" style='display:none' id="myAudio4" controls loop></audio>
            </li>
            <span id="dot" >.</span>
           
            <span id="more" style ="display:none">
           
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton5','myAudio5',<?php echo $arrSongId[5]  ?>, <?php echo $userId; ?>);myStop('playButton5','myAudio5')"><img id="playButton5" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[5] ?></p>
                <audio src="<?php echo $arrSongLink[5] ?>" style='display:none' id="myAudio5" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton6','myAudio6', <?php echo $arrSongId[6]  ?>, <?php echo $userId; ?>);myStop('playButton6','myAudio6')"><img id="playButton6" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[6] ?></p>
                <audio src="<?php echo $arrSongLink[6] ?>" style='display:none' id="myAudio6" controls loop></audio> 
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton7','myAudio7', <?php echo $arrSongId[7]  ?>, <?php echo $userId; ?>);myStop('playButton7','myAudio7')"><img id="playButton7" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[7] ?></p>
                <audio src="<?php echo $arrSongLink[7] ?>" style='display:none' id="myAudio7" controls loop></audio>
            </li>
            </span>
           
             <button onclick="showMore()" id="myBtn" type="button" class=" btn butstyle-image butstylefont"  mdbBtn mdbWavesEffect>_SEE MORE</button>
             
            </div> 
        </ul>
    </div>
 
    <div class="col-lg-6 my-4 text-center">
        <ul>

            <button id = "btnNoise" type="button" class=" butstyle btn btn-lg " style=" margin-bottom: 20px;" >white noise</button>
            
            <div id= "showNoise" style=" height: 450px; overflow: auto ; display:none "  >
            <div class="slider-color">
                <input type="range" min="0" max="100" value="50" class="slider" id="myRange1" >
    
            </div>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton8','myAudio8', <?php echo $arrNoiseId[0] ?>,  <?php echo $userId; ?>);myStop('playButton8','myAudio8');"><img id="playButton8" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[0] ?></p>
                <audio src="<?php echo $arrNoiseLink[0] ?>" style='display:none' id="myAudio8" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton9','myAudio9', <?php echo $arrNoiseId[1] ?>,  <?php echo $userId; ?>);myStop('playButton9','myAudio9')"><img id="playButton9" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[1] ?></p>
                <audio src="<?php echo $arrNoiseLink[1] ?>" style='display:none' id="myAudio9" controls loop></audio>

            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton10','myAudio10', <?php echo $arrNoiseId[2] ?>,  <?php echo $userId; ?>);myStop('playButton10','myAudio10')"><img id="playButton10" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[2] ?></p>
                <audio src="<?php echo $arrNoiseLink[2] ?>" style='display:none' id="myAudio10" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton11','myAudio11', <?php echo $arrNoiseId[3] ?>,  <?php echo $userId; ?>);myStop('playButton11','myAudio11')"><img id="playButton11" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[3] ?></p>
                <audio src="<?php echo $arrNoiseLink[3] ?>" style='display:none' id="myAudio11" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton12','myAudio12', <?php echo $arrNoiseId[4] ?>,  <?php echo $userId; ?>);myStop('playButton12','myAudio12')"><img id="playButton12" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[4] ?></p>
                <audio src="<?php echo $arrNoiseLink[4];?>" style='display:none' id="myAudio12" controls loop></audio>
            </li>
            <span id="dot1" >.</span>
           
           <span id="more1" style ="display:none">
           <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton13','myAudio13');myStop('playButton13','myAudio13', <?php echo $arrNoiseId[5] ?>,  <?php echo $userId; ?>);"><img id="playButton13" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[5] ?></p>
                <audio src="<?php echo $arrNoiseLink[5] ?>" style='display:none' id="myAudio8" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton14','myAudio14');myStop('playButton14','myAudio14', <?php echo $arrNoiseId[6] ?>,  <?php echo $userId; ?>)"><img id="playButton14" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[6] ?></p>
                <audio src="<?php echo $arrNoiseLink[6] ?>" style='display:none' id="myAudio9" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton15','myAudio15');myStop('playButton15','myAudio15', <?php echo $arrNoiseId[7] ?>,  <?php echo $userId; ?>)"><img id="playButton15" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[7] ?></p>
                <audio src="<?php echo $arrNoiseLink[7] ?>" style='display:none' id="myAudio10" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton16','myAudio16');myStop('playButton16','myAudio16', <?php echo $arrNoiseId[8] ?>,  <?php echo $userId; ?>)"><img id="playButton16" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[8] ?></p>
                <audio src="<?php echo $arrNoiseLink[8] ?>" style='display:none' id="myAudio11" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton17','myAudio17');myStop('playButton17','myAudio17', <?php echo $arrNoiseId[9] ?>,  <?php echo $userId; ?>)"><img id="playButton17" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[9] ?></p>
                <audio src="<?php echo $arrNoiseLink[9];?>" style='display:none' id="myAudio12" controls loop></audio>
            </li>
            </span>
            <button onclick="showMore1()" id="myBtn1" type="button" class=" btn btn butstyle-image butstylefont" mdbBtn mdbWavesEffect>_SEE MORE</button>
            </div>
        </ul>
    </div>
        <!-- spotify -->
</div>

<div class="container text-center">
    <p  id="spotify" style ="font-family: 'Caveat', cursive; font-size: 2rem; color: #a88a64; "><i class=' fas fa-music'></i> We have Spotify, click to hear <i class='fas fa-music'></i> </p> 
    <div id="showSpot" class="text-center" style="margin-left : 30px;  display:none ">
        <img src="public/assets/img/spot.png" alt="Italian Trulli">
</br>
        <iframe src="https://open.spotify.com/embed/playlist/1ZgQtqZj10PHCEJnhWuP26" width="75%" height="380" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
</div>
