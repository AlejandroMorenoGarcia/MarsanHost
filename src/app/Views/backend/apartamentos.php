<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__ . '/template/head.php'; ?>
  <title>Apartamentos · Admin Marsan Host</title>
</head>
<body data-pagina="apartamentos">
  <div class="admin">
    <?php include __DIR__ . '/template/sidebar.php'; ?>
    <div class="admin-main">
      <?php include __DIR__ . '/template/topbar.php'; ?>
      <main class="content">
        <div class="page-head"><h1>Apartamentos</h1><a class="btn btn--primary" href="/app/Views/backend/apartamento-form.php">Nuevo apartamento</a></div>
        <?php include __DIR__ . '/template/apartments-list.php'; ?>
      </main>
    </div>
  </div>
</body>
</html>
