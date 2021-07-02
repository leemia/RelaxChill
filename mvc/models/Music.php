<?php
class Music extends DB{

    public function music(){
        $qr = "SELECT * FROM music";
        return mysqli_query($this->con, $qr);
    }

}
?>