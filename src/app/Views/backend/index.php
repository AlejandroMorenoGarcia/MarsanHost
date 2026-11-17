<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__ . '/template/head.php'; ?>
  <title>Resumen · Admin Marsan Host</title>
</head>
<body data-pagina="resumen">
  <div class="admin">
    <?php include __DIR__ . '/template/sidebar.php'; ?>
    <div class="admin-main">
      <?php include __DIR__ . '/template/topbar.php'; ?>
      <main class="content">
        <div class="page-head"><h1>Resumen</h1></div>
        <?php include __DIR__ . '/template/stats.php'; ?>
      </main>
    </div>
  </div>
</body>
</html>
