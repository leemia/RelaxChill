 
<?php
//hứng kết quả truyền qua từ Musicmodel từ Home.php
$arrSongLink = [];
$arrSongName = [];
if(isset($data["song"])){
    while($row = mysqli_fetch_array($data["song"])){
        // echo $row["songlink"];
        array_push($arrSongLink, $row["songlink"]);
        array_push($arrSongName, $row["songtitle"]);
    }
}
$arrNoiseLink = [];
$arrNoiseName = [];
if(isset($data["noise"])){
    while($row = mysqli_fetch_array($data["noise"])){
        // echo $row["songlink"];
        array_push($arrNoiseLink, $row["songlink"]);
        array_push($arrNoiseName, $row["songtitle"]);
    }
}
// var_dump ($data["result"]);


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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Login">Login</a></li>
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
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton0','myAudio0');myStop('playButton0','myAudio0')"><img id="playButton0" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button> <?php echo $arrSongName[0] ?></p>
                <audio src="<?php echo $arrSongLink[0] ?>" style='display:none' id="myAudio0" controls  loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px " onclick="myPlay('playButton1','myAudio1');myStop('playButton1','myAudio1')"><img id="playButton1" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrSongName[1] ?></p>
                <audio src="<?php echo $arrSongLink[1] ?>" style='display:none' id="myAudio1" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton2','myAudio2');myStop('playButton2','myAudio2');"><img id="playButton2" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrSongName[2] ?></p>
                <audio src="<?php echo $arrSongLink[2] ?>" style='display:none' id="myAudio2" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton3','myAudio3');myStop('playButton3','myAudio3')"><img id="playButton3" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrSongName[3] ?></p>
                <audio src="<?php echo $arrSongLink[3] ?>" style='display:none' id="myAudio3" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left; margin-right: 5px" onclick="myPlay('playButton4','myAudio4');myStop('playButton4','myAudio4')"><img id="playButton4" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrSongName[4] ?></p>
                <audio src="<?php echo $arrSongLink[4] ?>" style='display:none' id="myAudio4" controls loop></audio>
            </li>
        </ul>


    </div>
    <div class="col-md-6 my-4 text-center">
        <ul>

            <button type="button" class="butstyle btn btn-lg ">white noise</button>

            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton5','myAudio5');myStop('playButton5','myAudio5');"><img id="playButton5" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[0] ?></p>
                <audio src="<?php echo $arrNoiseLink[0] ?>" style='display:none' id="myAudio5" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton6','myAudio6');myStop('playButton6','myAudio6')"><img id="playButton6" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[1] ?></p>
                <audio src="<?php echo $arrNoiseLink[1] ?>" style='display:none' id="myAudio6" controls loop></audio>

            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton7','myAudio7');myStop('playButton7','myAudio7')"><img id="playButton7" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[2] ?></p>
                <audio src="<?php echo $arrNoiseLink[2] ?>" style='display:none' id="myAudio7" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton8','myAudio8');myStop('playButton8','myAudio8')"><img id="playButton8" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[3] ?></p>
                <audio src="<?php echo $arrNoiseLink[3] ?>" style='display:none' id="myAudio8" controls loop></audio>
            </li>
            <li class="li-audio">
                <p style="margin: 8px 3px 10px; text-align:left;"><button style="background-color: transparent;border: none;float:left;margin-right: 5px" onclick="myPlay('playButton9','myAudio9');myStop('playButton9','myAudio9')"><img id="playButton9" src="public\assets\img\stop.png" alt="Play button" style="width:20px;height:20px;"></button><?php echo $arrNoiseName[4] ?></p>
                <audio src="<?php echo $arrNoiseLink[4];?>" style='display:none' id="myAudio9" controls loop></audio>
            </li>
        </ul>
    </div>
</div>
