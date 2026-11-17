<form class="card card--pad form" method="post" action="guardar-usuario.php">
  <div class="form-grid">
    <div class="field">
      <label for="nombre">Nombre completo</label>
      <input class="input" id="nombre" name="nombre" required>
    </div>
    <div class="field">
      <label for="email">Correo electrónico</label>
      <input class="input" type="email" id="email" name="email" required>
    </div>
    <div class="field">
      <label for="rol">Rol</label>
      <select class="select" id="rol" name="rol">
        <option value="huesped">Huésped</option>
        <option value="propietario">Propietario</option>
        <option value="admin">Administrador</option>
      </select>
    </div>
    <div class="field">
      <label for="estado">Estado</label>
      <select class="select" id="estado" name="estado">
        <option value="activo">Activo</option>
        <option value="suspendido">Suspendido</option>
      </select>
    </div>
    <div class="field full">
      <label for="password">Contraseña</label>
      <input class="input" type="password" id="password" name="password" autocomplete="new-password" required>
    </div>
  </div>
  <div class="form-actions">
    <a class="btn btn--ghost" href="/app/Views/backend/usuarios.php">Cancelar</a>
    <button class="btn btn--primary" type="submit">Guardar usuario</button>
  </div>
</form>
