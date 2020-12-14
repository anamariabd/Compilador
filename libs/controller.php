<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->star_session();
    }
    
    public function loadModel($model)
    {
        $url = 'models/'. $model . 'model.php';
        if (file_exists($url)) {
            require_once $url;
            $modelname = $model.'Model';
            $this->model =  new $modelname();
        }
    }

    public function star_session()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public function islog()
    {
        if (!isset($_SESSION['usuario'])) {
            header("LOCATION:" . constant('URL') ."login");
        }
    }
    public function redireccion($page, $funcion = null)
    {
        if ($funcion != null) {
            echo '<script language="javascript">
                window.location.href="'.constant('URL').$page.'/'.$funcion.'";
            </script>';
        } else {
            echo '<script language="javascript">
                    window.location.href="'.constant('URL').$page.'";
                </script>';
        }
    }
}
