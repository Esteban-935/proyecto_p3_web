<?php 
  include "header.php";
  include "../clases/Eventos.php";
  
  $Eventos = new Eventos();
  $id_evento = $_GET['id_evento'];
  $items = $Eventos->mostrarInvitadosEvento($id_evento);
?>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          <!-- Verifica si $items[0] existe antes de acceder a sus claves -->
          <h2>Evento : <?php echo isset($items[0]['nombreEvento']) ? htmlspecialchars($items[0]['nombreEvento']) : 'No disponible'; ?></h2>
          <h3>Fecha del evento: <?php echo isset($items[0]['fechaEvento']) ? htmlspecialchars($items[0]['fechaEvento']) : 'No disponible'; ?></h3>
          <table class="table table-sm table-hover" id="tabla_invitados_load">
            <thead>
              <tr>
                <th>Invitado</th>
                <th>Email</th>
                <th>Evento</th>
              </tr>
            </thead>
            <tbody>
              
              <?php 
                if (count($items) > 0):
                  foreach ($items as $key):
              ?>
              <tr>
                <!-- Verifica si las claves existen antes de acceder a ellas -->
                <td><?php echo isset($key['nombre_invitado']) ? htmlspecialchars($key['nombre_invitado']) : 'No disponible'; ?></td>
                <td><?php echo isset($key['email']) ? htmlspecialchars($key['email']) : 'No disponible'; ?></td>
                <td><?php echo isset($key['nombreEvento']) ? htmlspecialchars($key['nombreEvento']) : 'No disponible'; ?></td>
              </tr>
              <?php 
                  endforeach; 
                else:
              ?>
              <tr>
                <td colspan="3">No hay invitados disponibles para este evento.</td>
              </tr>
              <?php 
                endif;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


    
   