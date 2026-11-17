<div class="card">
  <form class="toolbar" method="get">
    <input class="input" type="search" name="q" placeholder="Buscar por nombre" aria-label="Buscar apartamentos">
    <select class="select" name="localidad" aria-label="Localidad">
      <option value="">Todas las localidades</option>
      <option>Alicante</option><option>Benidorm</option><option>Calpe</option><option>Jávea</option><option>Torrevieja</option>
    </select>
    <select class="select" name="estado" aria-label="Estado">
      <option value="">Cualquier estado</option>
      <option value="publicado">Publicado</option>
      <option value="borrador">Borrador</option>
      <option value="oculto">Oculto</option>
    </select>
    <button class="btn btn--dark" type="submit">Filtrar</button>
  </form>
  <div class="table-wrap">
    <table class="table">
      <thead>
        <tr><th>Apartamento</th><th>Capacidad</th><th>Precio</th><th>Estado</th><th><span class="sr-only">Acciones</span></th></tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="cell-user">
              <img class="thumb" src="/app/Views/frontend/assets/img/alojamiento-1.png" alt="">
              <div><strong>Ático con terraza y vistas al mar</strong><small>Alicante</small></div>
            </div>
          </td>
          <td>2 hab. · 4 huéspedes</td>
          <td><strong>120 €</strong> <span class="label">/ noche</span></td>
          <td><span class="badge badge--ok">Publicado</span></td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/apartamento-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <img class="thumb" src="/app/Views/frontend/assets/img/alojamiento-2.png" alt="">
              <div><strong>Suite con jardín y piscina</strong><small>Calpe</small></div>
            </div>
          </td>
          <td>1 hab. · 2 huéspedes</td>
          <td><strong>95 €</strong> <span class="label">/ noche</span></td>
          <td><span class="badge badge--ok">Publicado</span></td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/apartamento-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <img class="thumb" src="/app/Views/frontend/assets/img/alojamiento-3.png" alt="">
              <div><strong>Villa con piscina infinita</strong><small>Jávea</small></div>
            </div>
          </td>
          <td>4 hab. · 8 huéspedes</td>
          <td><strong>280 €</strong> <span class="label">/ noche</span></td>
          <td><span class="badge badge--warn">Borrador</span></td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/apartamento-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <img class="thumb" src="/app/Views/frontend/assets/img/alojamiento-1.png" alt="">
              <div><strong>Apartamento frente al puerto</strong><small>Torrevieja</small></div>
            </div>
          </td>
          <td>2 hab. · 5 huéspedes</td>
          <td><strong>85 €</strong> <span class="label">/ noche</span></td>
          <td><span class="badge badge--ok">Publicado</span></td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/apartamento-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="cell-user">
              <img class="thumb" src="/app/Views/frontend/assets/img/alojamiento-2.png" alt="">
              <div><strong>Estudio céntrico con balcón</strong><small>Benidorm</small></div>
            </div>
          </td>
          <td>1 hab. · 2 huéspedes</td>
          <td><strong>62 €</strong> <span class="label">/ noche</span></td>
          <td><span class="badge badge--off">Oculto</span></td>
          <td>
            <div class="row-actions">
              <a class="btn btn--ghost btn--sm" href="/app/Views/backend/apartamento-form.php">Editar</a>
              <button class="btn btn--danger btn--sm" type="button">Eliminar</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-foot">
    <span class="label">Mostrando 1–5 de 36</span>
    <div class="cluster">
      <button class="btn btn--ghost btn--sm" type="button" disabled>Anterior</button>
      <button class="btn btn--ghost btn--sm" type="button">Siguiente</button>
    </div>
  </div>
</div>
