<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__ . '/template/head.php'; ?>
  <title>Usuarios · Admin Marsan Host</title>
</head>
<body data-pagina="usuarios">
  <div class="admin">
    <?php include __DIR__ . '/template/sidebar.php'; ?>
    <div class="admin-main">
      <?php include __DIR__ . '/template/topbar.php'; ?>
      <main class="content">
        <div class="page-head"><h1>Usuarios</h1><a class="btn btn--primary" href="/app/Views/backend/usuario-form.php">Nuevo usuario</a></div>
        <?php include __DIR__ . '/template/users-list.php'; ?>
      </main>
    </div>
  </div>
</body>
</html>
