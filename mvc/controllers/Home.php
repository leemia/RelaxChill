<?php
class Home extends Controller{

    public $Music;

    public function __construct(){
        $this->Music = $this->model("Music");
    } 
    function SayHi(){
        $this->view("master1", [
            "page"=>"home",
            // "link"=>$this->Music->music()
        ]);

    }

    // function Show($a, $b){        
    //     // Call Models
    //     $teo = $this->model("SinhVienModel");
    //     $tong = $teo->Tong($a, $b); // 3

    //     // Call Views
    //     $this->view("aodep", [
    //         "Page"=>"news",
    //         "Number"=>$tong,
    //         "Mau"=>"red",
    //         "SoThich"=>["A", "B", "C"],
    //         "SV" => $teo->SinhVien()
    //     ]);
    // }
}
?>