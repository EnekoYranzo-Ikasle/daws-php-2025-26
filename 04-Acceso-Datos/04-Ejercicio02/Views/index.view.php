<?php
include "Layouts/head.php";
?>

<main>
  <div>
    <h3>Listado de empleados</h3>
    <table>
      <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Opciones</th>
      </tr>
      <?php foreach ($empleados as $empleado): ?>
        <tr>
          <td><?= $empleado->Dni ?></td>
          <td><?= $empleado->Nombre ?></td>
          <td><?= $empleado->Apellidos ?></td>
          <td>
            <a href="?accion=detalles&dni=<?= $empleado->Dni ?>">Ver detalles</a> |
            <a href="?accion=baja&dni=<?= $empleado->Dni ?>">Borrar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>* Opcion secreta: <a href="accion=deleteAll">Vaciar lista</a></p>
  </div>
  <div>
    <h3>Añadir nuevo empleado</h3>
    <form>
      <input type="text" name="name" placeholder="Nombre">
      <input type="text" name="surname" placeholder="Apellidos">
      <input type="number" name="years" placeholder="Edad">
      <input type="email" name="email" placeholder="Email">
      <input type="text" name="dni" placeholder="DNI">
      <select name="sex">
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Otro">Otro</option>
      </select>
      <textarea name="curriculum" placeholder="Curriculum"></textarea>
      <button type="submit"><a href="?accion=alta">Añadir</a></button>
    </form>
  </div>
</main>
<?php
include "Layouts/footer.php";
?>
