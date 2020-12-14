<?php

class InicioModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function compartidos()
    {
        $pdo = $this->db->connect();
        $query = "SELECT * FROM pioscripts where pioscripts.compartir = 1;";
        $sql = $pdo->prepare($query);
        $sql->execute();
        $results = $sql-> fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function setCompartir($id)
    {
        $pdo = $this->db->connect();
        $query = "UPDATE pioscripts SET compartir = 1 WHERE pioscripts.idpioscripts = $id";
        $sql = $pdo->prepare($query);
        $sql->execute();
    }

    public function obtenernombres($id)
    {
        $pdo = $this->db->connect();
        $query = "SELECT * FROM pioscripts where pioscripts.usuarios_idusuarios = $id;";
        $sql = $pdo->prepare($query);
        $sql->execute();
        $results = $sql-> fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function obtenerdefault($id, $iduser)
    {
        $pdo = $this->db->connect();
        $query = "SELECT * FROM pioscripts
                    WHERE
                        pioscripts.usuarios_idusuarios = $iduser
                    ORDER BY idpioscripts DESC LIMIT 1;";
        if (isset($id)) {
            $query = "SELECT * FROM pioscripts where pioscripts.idpioscripts = $id;";
        }

        $sql =$pdo->prepare($query);
        $sql->execute();
        $results = $sql-> fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function guardarcodigo($codigojs, $codigopio, $id, $nombre)
    {
        $pdo = $this->db->connect();
        $query = "INSERT INTO pioscripts VALUES(NULL,'$codigopio',0,'$nombre',$id,'$codigojs')";
        $sql =$pdo->prepare($query);
        $sql->execute();
    }
}
