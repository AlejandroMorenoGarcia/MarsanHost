<div class="card">
  <form class="toolbar" method="get">
    <input class="input" type="search" name="q" placeholder="Buscar por nombre o correo" aria-label="Buscar usuarios">
    <select class="select" name="rol" aria-label="Rol">
      <option value="">Todos los roles</option>
      <option value="admin">Administrador</option>
      <option value="propietario">Propietario</option>
      <option value="huesped">Huésped</option>
    </select>
    <select class="select" name="estado" aria-label="Estado">
      <option value="">Cualquier estado</option>
      <option value="activo">Activo</option>
      <option value="suspendido">Suspendido</option>
    </select>
    <button class="btn btn--dark" type="submit">Filtrar</button>
  </form>
  <div class="table-wrap">
    <table class="table">
      <thead>
        <tr><th>Usuario</th><th>Rol</th><th>Estado</th><th>Alta</th><th><span class="sr-only">Acciones</span></th></tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="cell-user">
              <span class="avatar" aria-hidden="true">L</span>
              <div><strong>Lucía Marsán</strong><small>lucia@marsanhost.com</small></div>
            </div>
          </td>
          <td>Administrador</td>
          <td><span class="badge badge--ok">Activo</span></td>
          <td class="label">12/03/2025</td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/usuario-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <span class="avatar" aria-hidden="true">C</span>
              <div><strong>Carlos Pérez</strong><small>carlos.perez@correo.com</small></div>
            </div>
          </td>
          <td>Propietario</td>
          <td><span class="badge badge--ok">Activo</span></td>
          <td class="label">02/09/2025</td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/usuario-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <span class="avatar" aria-hidden="true">M</span>
              <div><strong>Marta Soler</strong><small>marta.soler@correo.com</small></div>
            </div>
          </td>
          <td>Huésped</td>
          <td><span class="badge badge--off">Suspendido</span></td>
          <td class="label">21/10/2026</td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/usuario-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <span class="avatar" aria-hidden="true">J</span>
              <div><strong>Javier Ruiz</strong><small>javier.ruiz@correo.com</small></div>
            </div>
          </td>
          <td>Propietario</td>
          <td><span class="badge badge--ok">Activo</span></td>
          <td class="label">05/11/2026</td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/usuario-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <span class="avatar" aria-hidden="true">E</span>
              <div><strong>Elena Navarro</strong><small>elena.navarro@correo.com</small></div>
            </div>
          </td>
          <td>Huésped</td>
          <td><span class="badge badge--ok">Activo</span></td>
          <td class="label">14/11/2026</td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/usuario-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-foot">
    <span class="label">Mostrando 1–5 de 1.248</span>
    <div class="cluster">
      <button class="btn btn--ghost btn--sm" type="button" disabled>Anterior</button>
      <button class="btn btn--ghost btn--sm" type="button">Siguiente</button>
    </div>
  </div>
</div>
