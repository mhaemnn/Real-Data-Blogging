<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="index.php">ORDERING APP</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <span class="text-white fw-bold welcome-text">Selamat datang, muhaemin<?php echo $nama; ?></span>
      <form action="./pages/auth/logout.php" method="post">
        <button type="submit" name="btn-logout" class="nav-link px-4 bg-dark border-0 fw-bold text-white">Logout <i class="bi bi-box-arrow-in-right"></i></button>
      </form>
    </div>
  </div>
</header>