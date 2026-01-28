<?php

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: pages/login/index.php");
  exit;
}

include "../connection.php";

//Logic Halaman Default
$fitur = $_GET['fitur'] ?? 'dashboard';

?>

<!DOCTYPE html>
<html lang="en">

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php include "components/sidebar.php"  ?>
    <!-- End Sidebar -->

    <div class="main-panel">
      <!-- SECTION HEADER -->
      <?php include "components/header.php"; ?>

      <!-- Logic Halaman Paralel -->
      <?php
      switch ($fitur) {

        case 'dashboard':
          include "pages/dashboard.php";
          break;

        // ===== HOME =====
        case 'home':
          include "pages/home/index.php";
          break;

        case 'home-update':
          include "pages/home/update.php";
          break;

        case 'home-delete':
          include "pages/home/delete.php";
          break;

        // ===== about =====
        case 'about':
          include "pages/about/index.php";
          break;

        case 'about-update':
          include "pages/about/update.php";
          break;

        case 'about-delete':
          include "pages/about/delete.php";
          break;

        // ===== DEFAULT =====
        default:
          echo "<h3>Halaman tidak ditemukan</h3>";
          break;
      }
      ?>

      <!-- SECTION FOOTER -->
      <?php include "components/footer.php"; ?>
    </div>

  </div>
  <?php include "partials/script.php"; ?>

</body>

</html>