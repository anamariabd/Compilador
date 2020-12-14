<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function render()
    {
        $this->view->render("login/index");
    }
    public function registro()
    {
        $allrigth = true;
        $nombres = isset($_POST['nombres']) ? $_POST['nombres'] : $allrigth = false;
        $apellidos = isset($_POST['apellido']) ? $_POST['apellido'] : $allrigth = false;
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : $allrigth = false;
        $correo = isset($_POST['correo']) ? $_POST['correo'] : $allrigth = false;
        $password = isset($_POST['password']) ? $_POST['password'] : $allrigth = false;
        if ($allrigth) {
            $this->model->insertuser(
                $nombres,
                $apellidos,
                $codigo,
                $correo,
                $password
            );
        }
        $this->redireccion('login');
    }
    public function cerrar()
    {
        unset($_SESSION['usuario']);
        $this->view->render("login/index");
    }

    public function verificar()
    {
        $email = isset($_POST['correo']) ? $_POST['correo'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        if (!empty($email) && !empty($password)) {
            $usuario = $this->model->selectUser($email);
            if (!empty($usuario)) {
                $_SESSION['usuario'] = $usuario;
            }
        }
        $this->redireccion("inicio");
    }
}
