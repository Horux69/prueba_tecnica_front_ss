<?php
require_once '../models/usuarios_model.php';

class UsuariosController {
    public function showTable() {
        $model = new UsuariosModel();
        $data = $model->getUsuariosData();
        require '../views/lista_usuarios.php';
    }
}
?>
