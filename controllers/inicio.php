<?php
class Inicio extends Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::islog();
    }

    public function cargar($id)
    {
        $_SESSION['archivo'] = $id;
        $this->redireccion("inicio");
    }
    public function compartir($id)
    {
        if ($id == '-1') {
            $_SESSION['error'] = "Error: Guarde Primero el archivo";
            $this->redireccion("inicio");
        } else {
            $this->model->setCompartir($id);
        }
        $this->redireccion("inicio");
    }
    public function deslogeo()
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['archivo']);
        $this->redireccion("inicio");
    }

    public function render()
    {
        $id = null;
        $iduser = $_SESSION["usuario"][0]->idusuarios;

        if (isset($_SESSION['archivo'])) {
            $id = $_SESSION['archivo'];
        }

        $datos = $this->model->obtenerdefault($id, $iduser);
        if (!empty($datos)) {
            $datos = $datos[0];
        }
        $archivos = $this->model->obtenernombres($iduser);
        $compartidos = $this->model->compartidos();
        // validar si no tiene ningun archivo guardado en base de datos

        //
        $this->view->datos = $datos;
        $this->view->archivos = $archivos;
        $this->view->compartidos = $compartidos;
        $this->view->render("inicio/index");
    }
    public function guardarcodigo()
    {
        if (isset($_SESSION['error'])) {
            unset($_SESSION['error']);
        }

        $id = $_SESSION["usuario"][0]->idusuarios;
        $codigojs = $_POST['codigojs'];
        $codigopio = $_POST['codigopio'];
        $nombre = $_POST['nombre'];
        $this->model->guardarcodigo($codigojs, $codigopio, $id, $nombre);
        $_SESSION['archivo'] = $this->model->obtenerdefault(null, $id)[0]->idpioscripts;
    }
}
