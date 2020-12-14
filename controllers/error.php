<?php

class Errores extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo "pagina 404";
    }
    public function render()
    {
        $this->view->render("error/index");
    }
}
