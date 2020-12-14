<?php
class app
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        if (!empty($url)) {
            $url = rtrim($url, '/');
            $url = explode('/', $url);
        }

        // sin definir el controlador
        if (empty($url[0]) || strcmp($url[0], '') == 0) {
            $archivoController = "controllers/login.php";
            require_once $archivoController;
            $controller = new Login();
            $controller->loadModel('login');
            $controller->render();
            return;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;
            //inicializando el controlador
            $controller = new $url[0];
            // cargando el modelo (si lo tiene!)
            $controller->loadModel($url[0]);
            //si existe un metodo para cargarse
            if (isset($url[1])) {
                // los metodos se encargan de cargar su render
                try {
                    if (isset($url[2])) {
                        $controller->{$url[1]}($url[2]);
                    } else {
                        $controller->{$url[1]}();
                    }
                } catch (\Throwable $th) {
                    require_once "controllers/error.php";
                    $errores = new Errores();
                }
            } else {
                // si no existe ningun metodo para cargar se ejecuta el render por defecto
                $controller->render();
            }
        } else {
            require_once "controllers/error.php";
            $errores = new Errores();
        }
    }
}
