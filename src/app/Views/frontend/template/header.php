<header class="site-header">
  <div class="container">
    <a class="brand" href="../index.php">
      <img src="app/Views/frontend/assets/img/logo-mh.png" alt="" width="36" height="36">
      <span>Marsan Host</span>
    </a>
      <?php $paginaActual = $paginaActual ?? ''; ?>
      <nav class="nav" aria-label="Principal">
          <a href="/alojamientos.php" <?= $paginaActual === 'alojamientos' ? 'aria-current="page"' : '' ?>>Alojamientos</a>
          <a href="/destinos.php" <?= $paginaActual === 'destinos' ? 'aria-current="page"' : '' ?>>Destinos</a>
          <a href="experiencias.php" <?= $paginaActual === 'experiencias' ? 'aria-current="page"' : '' ?>>Experiencias</a>
          <a href="servicios.php" <?= $paginaActual === 'servicios' ? 'aria-current="page"' : '' ?>>Servicios</a>
          <a href="propietarios.php" <?= $paginaActual === 'propietarios' ? 'aria-current="page"' : '' ?>>Para propietarios</a>
      </nav>
    <div class="header-actions">
      <a class="btn btn--ghost btn--sm" href="login.php">Entrar</a>
      <a class="btn btn--primary btn--sm" href="register.php">Crear cuenta</a>
    </div>
  </div>
</header>
