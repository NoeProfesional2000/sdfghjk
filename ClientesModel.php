<?php

require_once 'Conexion.php';

class ClientesModel
{
    private static $ExtraerClientes = "SELECT * FROM clientes";
    /* OBTENER LOS CLIENTES DE LA BASE DE DATOS */
    public static function getClientes()
    {
        try {
            $conexion = new Conexion();
            $conn     = $conexion->getConexion();

            $pst = $conn->prepare(self::$ExtraerClientes);
            $pst->execute();

            $clientes = $pst->fetchAll();

            $conn = null;
            $conexion->closeConexion();

            return $clientes;

        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
   
}

  