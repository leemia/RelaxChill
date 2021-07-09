<?php
class App{

    protected $controller;
    protected $action;
    protected $params;
    protected $__route;

    function __construct(){
        GLOBAL $routes;
        $this->__route = new Route();  
        // $this->controller = 'Home';
        $this->controller = $routes['default_controller'];
        $this->action="SayHi";
        $this->params=[];
        // $arr = $this->UrlProcess();
        $this->handleUrl();
    }

    function getUrl(){
        if( isset($_GET["url"]) ){
           $url = $_GET["url"];
        }
        else{
            $url = "/";
        }
        return $url;
    }

    function handleUrl(){
        $url = $this->getUrl();
        $url =  $this->__route->handleRoute($url);
        // echo $url;
        //kiểm tra xem các phần tử của arr là folder hay file
        $arr = explode("/", filter_var(trim($url, "/")));
        // var_dump($arr[0]);
        // $urlCheck = '';
        // if(!empty($arr)){
        //     foreach ($arr as $key=>$item){
        //         $urlCheck.=$item.'/';
        //         $fileCheck = rtrim($urlCheck,'/');
        //         $fileArr = explode('/', $fileCheck);
        //         $fileArr[count($fileArr)-1] = ucfirst($fileArr[count($fileArr)-1]);
        //         $fileCheck = implode('/',$fileArr);

        //         if(!empty($arr[$key - 1])){
        //             unset($arr[$key - 1]);
        //         }
                
        //         if(file_exists("./mvc/controllers/".$fileCheck.".php")){
        //             $urlCheck = $fileCheck;
        //             break;
        //         }
        //     }
        // }
        // print_r($arr);


        // $arr = explode("/", filter_var(trim($url, "/")));
        // print_r($arr);

        
        // $this->__route->handleRoute();
        if(!empty($arr)){
            if($arr[0] == "User" OR $arr[0] == "Admin"){
                if(!isset($_SESSION['useradmin'])){
                    $arr[0] = "Login";
                }
            }
            // Controller
            if( file_exists("./mvc/controllers/".$arr[0].".php") ){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        
        // if($arr[0] == "User" OR $arr[0] == "Admin"){
        //     if(!isset($_SESSION['useradmin'])){
        //         $arr[0] = "Login";
        //     }
        // }
        // if( file_exists("./mvc/controllers/".$arr[0].".php") ){
        //     $this->controller = $arr[0];
        //     unset($arr[0]);
        // }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        //gọi tới controller và chạy method action có tham số là params
        call_user_func_array([$this->controller, $this->action], $this->params );
    }

}
?>
