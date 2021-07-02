<?php
class MusicModel extends DB{

    public function ourSong(){
        $qr = "SELECT * FROM music WHERE idtype = 2";
        return mysqli_query($this->con, $qr);
    }
    public function whiteNoise(){
        $qr = "SELECT * FROM music WHERE idtype = 1";
        return mysqli_query($this->con, $qr);

    }

}
?>