<?php
class Home extends Controller{

    public $MusicModel;

    public function __construct(){
        $this->MusicModel = $this->model("MusicModel");
    } 
    function SayHi(){
        $song = $this->MusicModel->ourSong();
        $noise = $this->MusicModel->whiteNoise();
        $this->view("master1", [
            "page"=>"home",
            "song"=>$song,
            "noise"=>$noise
        ]);

    }

}
?>