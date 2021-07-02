<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost:81/demo/" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Index</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="public/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;800&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
 
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body style=" background: url('public/assets/img/background.png') no-repeat center center fixed;">
     <!-- Navigation-->
    <!-- Masthead header-->
    <!-- Music Section-->

    <div class="container">
        <?php require_once "./mvc/views/pages/" . $data["page"] . ".php"; ?>
    </div>

    <!-- About Section-->
    <?php require_once "./mvc/views/block/about.php"; ?>
    <!-- Donate Section-->
    <?php require_once "./mvc/views/block/donate.php"; ?>

    <!-- Footer-->
    <?php require_once "./mvc/views/block/footer.php"; ?>

    <!-- Bootstrap core JS-->
    <!-- audio.js -->
    <script>
    function myPlay(a,b) {
    var playbutton = document.getElementById(a)
    var audio = document.getElementById(b)
    var status = playbutton.getAttribute("src");
    if ((status == "public\\assets\\img\\stop.png")||(status =="public/assets/img/stop.png")){
        playbutton.src='public/assets/img/play.png'
        audio.play();
        audio.loop();
    }
    
}
function myStop(a,b) {
    var playbutton = document.getElementById(a)
    var audio = document.getElementById(b)
    var status = playbutton.getAttribute("src");
    if (status == "public/assets/img/play.png"){
        playbutton.src='public/assets/img/stop.png'
        audio.pause();
        audio.loop();
    }
}
</script>
    <!-- <script src="public/js/audio.js"> </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- Core theme JS-->
    <script src="public/js/scripts.js"></script>
    <!-- Core JS-->

    <script src="public/js/login.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>