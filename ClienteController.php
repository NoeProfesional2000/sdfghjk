<?php
require_once "ClientesModel.php";

 $data = ClientesModel::getClientes();
    echo json_encode($data, JSON_UNESCAPED_UNICODE);