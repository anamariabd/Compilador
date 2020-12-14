<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertuser(
        $nombres,
        $apellidos,
        $codigo,
        $correo,
        $password
    ) {
        $pdo = $this->db->connect();
        $query = "INSERT INTO usuarios VALUES(NULL,'$nombres','$apellidos',$codigo,'$password','$correo')";
        $sql =$pdo->prepare($query);
        $sql->execute();
    }

    public function selectUser($email)
    {
        $pdo = $this->db->connect();
        $query = "SELECT * FROM usuarios WHERE usuarios.correo = '$email' LIMIT 1";
        $sql =$pdo->prepare($query);
        $sql->execute();
        $results = $sql-> fetchAll(PDO::FETCH_OBJ);
        if ($sql->rowcount() > 0) {
            return $results;
        }
        return null;
    }
}
