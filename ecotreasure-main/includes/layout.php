<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>EcoTreasure Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Tambahkan Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    :root {
      --green-dark: #003c1c;
      --green-light: #164b2f;
      --yellow-soft: #f9fbe7;
      --yellow: #ffeb3b;
      --white: #ffffff;
      --black: #164b2f;
      --grey-border: #ccc;
    }

    /* Sidebar kiri */
   .sidebar {
  width: 215px;
  height: 100vh;
  background-color: #094924;
  padding: 30px 20px;
  position: fixed;
  left: 0;
  top: 0;
  display: flex;
  flex-direction: column;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
  font-family: 'Poppins', sans-serif;
}

.admin-name {
    color: white;
    font-size: 90%;
}

.sidebar-header {
  display: flex;
  flex-direction: column;
  align-items: center; /* Bikin semua konten di tengah */
  margin-bottom: 15px;
}

.sidebar-header img {
  background:yellow;
    width: 70px;
    height: 70px;
    border-radius: 40px;
}

.sidebar-header p {
    text-align: center;
}

.sidebar .brand h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 40px;
  text-align: center;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-menu li {
  margin-bottom: 20px;
}

.sidebar-menu li a {
  height: 100%;
  width: 90%;
  text-decoration: none;
  color: #fbfbfb;
  font-size: 15px;
  font-weight: 500;
  display: flex;
  align-items: center;
  padding: 10px 15px; 
  transition: all 0.2s ease;
}

.sidebar-menu li a i {
  margin-right: 12px;
  margin-left: 15px;
  font-size: 18px;
}

.sidebar-menu li a:hover,
.sidebar-menu li a.active {
  background-color: #fbfaf8;
  color: #0f5e3c;
  border-radius: 10px ;
  padding: 10px;
}

.main-content {
  margin-left: 240px; /* Lebar sidebar */
  padding: 40px;
  background-color: #fdfdf5;
}
</style>

</head>
<body>

  <!-- Sidebar kiri -->
 <div class="sidebar">
  <div class="brand">
    <h2><span style="color:#ffffff;">ECO.TREA</span><span style="color:#FFD700;">SURE</span></h2>
  </div>
  <div class="sidebar-header">
    <img src="../image/admin.jpg" alt="EcoTreasure Logo" class="logo">
    <p class="admin-name">Admin Satu</p>
  </div>
  <ul class="sidebar-menu">
    <li>
      <a href="../pages/dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
        <i class="fas fa-home"  style="color:#FFD700"></i><span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="../pages/pengguna.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pengguna.php' ? 'active' : '' ?>">
        <i class="fas fa-users"  style="color:#FFD700"></i><span>Data Pengguna</span>
      </a>
    </li>
    <li>
      <a href="../pages/sampah.php" class="<?= basename($_SERVER['PHP_SELF']) == 'sampah.php' ? 'active' : '' ?>">
        <i class="fas fa-trash"  style="color:#FFD700"></i><span>Data Sampah</span>
      </a>
    </li>
    <li>
      <a href="../pages/poin.php" class="<?= basename($_SERVER['PHP_SELF']) == 'poin.php' ? 'active' : '' ?>">
        <i class="fas fa-coins" style="color:#FFD700"></i><span>Data Poin</span>
      </a>
    </li>
    <li>
      <a href="../pages/penukaran_poin.php" class="<?= basename($_SERVER['PHP_SELF']) == 'penukaran_poin.php' ? 'active' : '' ?>">
        <i class="fas fa-exchange-alt"  style="color:#FFD700"></i><span>Data Penukaran Poin</span>
      </a>
    </li>
    <li>
      <a href="../pages/pusat_admin.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pusat_admin.php' ? 'active' : '' ?>">
        <i class="fas fa-user-shield"  style="color:#FFD700"></i><span>Pusat Admin</span>
      </a>
    </li>
    <li class="logout">
      <a href="../progres/logout_proses.php">
        <i class="fas fa-sign-out-alt"  style="color:#FFD700"></i><span>Keluar</span>
      </a>
    </li>
  </ul>
</div>
