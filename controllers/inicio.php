<?php
class Inicio extends Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::islog();
        parent::setimg();
    }
    public function render()
    {
        $this->view->render("inicio/index");
    }
}
