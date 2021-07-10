<?php
//hứng kết quả truyền qua từ Musicmodel từ Home.php
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
    echo(count(mysqli_fetch_array($data["noise"])));
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
$user = [];
if(isset($data["result"])){
    $user = json_decode($data["result"], true);
    // print_r($user);
    
}

?>
<header class="top">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">️️<img src="public\assets\img\pagetop.png" alt="logo" title="Logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btndd"><?php echo $user['username']?></a>
                        <div class="dropdown-content">
                            <a href="./User/Profile/<?php echo $user['username'];?>">Profile</a>
                            <a href="./User/LoadDiary/<?php echo $user['username'] ?>/10/1">Diary</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#donate">Donate</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a></li>

            </ul>
        </div>
    </div>
    <!-- <div class="search-bar" style="display:none"> -->
    <div class="search-bar" style="display:none">    
        <form class="d-flex w-100 justify-content-center" method="GET">
            <input class="align-self-center search-input form-control" type="text" name="s" placeholder="What are you searching for?">
            <button type="submit" class="align-self-center"><i class="fas fa-search"></i>
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
   
    <div class="col-md-6 my-4 text-center">
        <ul>
            <button id = "btnSong" type="button"class =" butstyle btn btn-lg " style=" margin-bottom: 20px;"  >our song</button>
            
            <div id = "showSong" style="height: 450px; overflow: auto ;   display:none; ">
            <div class="slider-color" >
                <input type="range" min="0" max="100" value="50" class="slider" id="myRange">
    
            </div>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton0','myAudio0');myStop('playButton0','myAudio0')"><img id="playButton0" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button> <?php echo $arrSongName[0] ?></p>
                <audio src="<?php echo $arrSongLink[0] ?>" style='display:none' id="myAudio0" controls  loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton1','myAudio1');myStop('playButton1','myAudio1')"><img id="playButton1" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[1] ?></p>
                <audio src="<?php echo $arrSongLink[1] ?>" style='display:none' id="myAudio1" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton2','myAudio2');myStop('playButton2','myAudio2');"><img id="playButton2" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[2] ?></p>
                <audio src="<?php echo $arrSongLink[2] ?>" style='display:none' id="myAudio2" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton3','myAudio3');myStop('playButton3','myAudio3')"><img id="playButton3" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[3] ?></p>
                <audio src="<?php echo $arrSongLink[3] ?>" style='display:none' id="myAudio3" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton4','myAudio4');myStop('playButton4','myAudio4')"><img id="playButton4" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[4] ?></p>
                <audio src="<?php echo $arrSongLink[4] ?>" style='display:none' id="myAudio4" controls loop></audio>
            </li>
            <span id="dot" >.</span>
           
            <span id="more" style ="display:none">
           
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton5','myAudio5');myStop('playButton5','myAudio5')"><img id="playButton5" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[5] ?></p>
                <audio src="<?php echo $arrSongLink[5] ?>" style='display:none' id="myAudio5" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton6','myAudio6');myStop('playButton6','myAudio6')"><img id="playButton6" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[6] ?></p>
                <audio src="<?php echo $arrSongLink[6] ?>" style='display:none' id="myAudio6" controls loop></audio> 
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton7','myAudio7');myStop('playButton7','myAudio7')"><img id="playButton7" src="public\assets\img\stop.png" alt="Play button" style="width:25px;height:20px;"></button><?php echo $arrSongName[7] ?></p>
                <audio src="<?php echo $arrSongLink[7] ?>" style='display:none' id="myAudio7" controls loop></audio>
            </li>
            </span>
           
             <button onclick="showMore()" id="myBtn" type="button" class=" btn butstyle-image butstylefont"  mdbBtn mdbWavesEffect>_SEE MORE</button>
             
            </div> 
        </ul>
    </div>

    <div class="col-md-6 my-4 text-center">
    <ul>

        <button id = "btnNoise" type="button" class=" butstyle btn btn-lg " style=" margin-bottom: 20px;" >white noise</button>

        <div id= "showNoise" style=" height: 450px; overflow: auto ; display:none "  >
        <div class="slider-color">
            <input type="range" min="0" max="100" value="50" class="slider" id="myRange1" >

        </div>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton8','myAudio8');myStop('playButton8','myAudio8');"><img id="playButton8" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[0] ?></p>
            <audio src="<?php echo $arrNoiseLink[0] ?>" style='display:none' id="myAudio8" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton9','myAudio9');myStop('playButton9','myAudio9')"><img id="playButton9" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[1] ?></p>
            <audio src="<?php echo $arrNoiseLink[1] ?>" style='display:none' id="myAudio9" controls loop></audio>

        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton10','myAudio10');myStop('playButton10','myAudio10')"><img id="playButton10" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[2] ?></p>
            <audio src="<?php echo $arrNoiseLink[2] ?>" style='display:none' id="myAudio10" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton11','myAudio11');myStop('playButton11','myAudio11')"><img id="playButton11" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[3] ?></p>
            <audio src="<?php echo $arrNoiseLink[3] ?>" style='display:none' id="myAudio11" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton12','myAudio12');myStop('playButton12','myAudio12')"><img id="playButton12" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[4] ?></p>
            <audio src="<?php echo $arrNoiseLink[4];?>" style='display:none' id="myAudio12" controls loop></audio>
        </li>
        <span id="dot1" >.</span>

        <span id="more1" style ="display:none">
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton13','myAudio13');myStop('playButton13','myAudio13');"><img id="playButton13" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[5] ?></p>
            <audio src="<?php echo $arrNoiseLink[5] ?>" style='display:none' id="myAudio8" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton14','myAudio14');myStop('playButton14','myAudio14')"><img id="playButton14" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[6] ?></p>
            <audio src="<?php echo $arrNoiseLink[6] ?>" style='display:none' id="myAudio9" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton15','myAudio15');myStop('playButton15','myAudio15')"><img id="playButton15" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[7] ?></p>
            <audio src="<?php echo $arrNoiseLink[7] ?>" style='display:none' id="myAudio10" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton16','myAudio16');myStop('playButton16','myAudio16')"><img id="playButton16" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[8] ?></p>
            <audio src="<?php echo $arrNoiseLink[8] ?>" style='display:none' id="myAudio11" controls loop></audio>
        </li>
        <li class="li-audio">
            <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton17','myAudio17');myStop('playButton17','myAudio17')"><img id="playButton17" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[9] ?></p>
            <audio src="<?php echo $arrNoiseLink[9];?>" style='display:none' id="myAudio12" controls loop></audio>
        </li>
        </span>
        <button onclick="showMore1()" id="myBtn1" type="button" class=" btn btn butstyle-image butstylefont" mdbBtn mdbWavesEffect>_SEE MORE</button>
        </div>
    </ul>        
    </div class="col-md-12 my-4 text-center">

    <!-- spotify -->

    <div class="container text-center">
        <p  id="spotify" style ="font-family: 'Caveat', cursive; font-size: 2rem; color: #a88a64; "><i class=' fas fa-music'></i> We have Spotify, click to hear <i class='fas fa-music'></i> </p> 
        <div id="showSpot" class="text-center" style="margin-left : 30px;  display:none ">
            <img src="public/assets/img/spot.png" alt="Italian Trulli">
            </br>
            <iframe src="https://open.spotify.com/embed/playlist/1ZgQtqZj10PHCEJnhWuP26" width="75%" height="380" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
    <script>
    jQuery(document).ready(function($) {
    // open search
    $('header.top .topmenu li.search').on('click', 'a', function (e) {
        $('.search-bar').fadeIn();
        $('.topmenu').fadeOut();
        e.preventDefault();
    });
    // close search
    $(document).mouseup(function (e) {
        var container = $('.search-bar form');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.search-bar').fadeOut();
                $('.topmenu').fadeIn();
            }
        });
    });
</script>
