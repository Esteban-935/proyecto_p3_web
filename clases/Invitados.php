<?php
include "Conexion.php";

class Invitados extends Conexion {
    public function mostrarInvitados($id_usuario) {
        $conexion = Conexion::conectar();
        $sql = "SELECT t_invitados.id_invitado, t_invitados.nombre_invitado AS nombre, t_invitados.email, t_eventos.evento AS nombreEvento, t_eventos.fecha AS fechaEvento 
                FROM t_invitados 
                JOIN t_eventos ON t_invitados.id_evento = t_eventos.id_evento
                WHERE t_eventos.id_usuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_usuario);
        $query->execute();
        $result = $query->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function agregarInvitado($data) {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO t_invitados (id_evento, nombre_invitado, email) VALUES (?, ?, ?)";
        $query = $conexion->prepare($sql);
        $query->bind_param('iss', $data['id_evento'], $data['nombre_invitado'], $data['email']);
        return $query->execute();
    }

    public function eliminarInvitado($id_invitado) {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM t_invitados WHERE id_invitado = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_invitado);
        return $query->execute();
    }

    public function selectEventos($id_usuario) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM t_eventos WHERE id_usuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_usuario);
        $query->execute();
        $result = $query->get_result();

        $select = '<label for="id_evento">Selecciona un evento</label>
                    <select name="id_evento" id="id_evento" class="form-select" required>';

        while ($mostrar = $result->fetch_assoc()) {
            $select .= '<option value='. $mostrar['id_evento'] . '>' . $mostrar['evento'] . '</option>'; 
        }

        return $select .= '</select>';
    }

    public function selectEventosEditar($id_usuario) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM t_eventos WHERE id_usuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_usuario);
        $query->execute();
        $result = $query->get_result();

        $select = '<label for="id_eventoe">Selecciona un evento</label>
                    <select name="id_eventoe" id="id_eventoe" class="form-select" required>';

        while ($mostrar = $result->fetch_assoc()) {
            $select .= '<option value='. $mostrar['id_evento'] . '>' . $mostrar['evento'] . '</option>'; 
        }

        return $select .= '</select>';
    }

    public function editarInvitado($id_invitado) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM t_invitados WHERE id_invitado = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_invitado);
        $query->execute();
        $result = $query->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function actualizarInvitado($data){
        $conexion = Conexion::conectar();
        $sql = "UPDATE t_invitados SET id_evento = ?, nombre_invitado = ?, email = ? WHERE id_invitado = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('issi', $data['id_evento'], $data['nombre_invitado'], $data['email'], $data['id_invitado']);
        return $query->execute();
    }
}
?>
