<form class="card card--pad form" method="post" action="guardar-apartamento.php" enctype="multipart/form-data">
  <div class="form-grid">
    <div class="field full">
      <label for="nombre">Nombre del alojamiento</label>
      <input class="input" id="nombre" name="nombre" required>
    </div>
    <div class="field">
      <label for="localidad">Localidad</label>
      <select class="select" id="localidad" name="localidad">
        <option>Alicante</option><option>Benidorm</option><option>Calpe</option><option>Jávea</option><option>Torrevieja</option>
      </select>
    </div>
    <div class="field">
      <label for="precio">Precio por noche (€)</label>
      <input class="input" type="number" id="precio" name="precio" min="0" required>
    </div>
    <div class="field">
      <label for="habitaciones">Habitaciones</label>
      <input class="input" type="number" id="habitaciones" name="habitaciones" min="0" value="1">
    </div>
    <div class="field">
      <label for="huespedes">Huéspedes máximos</label>
      <input class="input" type="number" id="huespedes" name="huespedes" min="1" value="2">
    </div>
    <div class="field full">
      <label for="descripcion">Descripción</label>
      <textarea class="textarea" id="descripcion" name="descripcion"></textarea>
    </div>
    <div class="field">
      <label for="fotos">Fotos</label>
      <input class="input" type="file" id="fotos" name="fotos[]" accept="image/*" multiple>
    </div>
    <div class="field">
      <label for="estado">Estado</label>
      <select class="select" id="estado" name="estado">
        <option value="publicado">Publicado</option>
        <option value="borrador">Borrador</option>
        <option value="oculto">Oculto</option>
      </select>
    </div>
    <label class="check full">
      <input type="checkbox" name="destacado" value="1">
      Mostrar en alojamientos destacados de la home
    </label>
  </div>
  <div class="form-actions">
    <a class="btn btn--ghost" href="/app/Views/backend/apartamentos.php">Cancelar</a>
    <button class="btn btn--primary" type="submit">Guardar apartamento</button>
  </div>
</form>
