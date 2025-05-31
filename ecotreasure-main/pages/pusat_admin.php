<?php
include '../includes/layout.php';
include '../includes/db.php';

$query = "SELECT * FROM admin";
$result = mysqli_query($conn, $query);
?>

<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .main-content {
    padding: 35px;
  }

  .main-content h2 {
    font-size: 1.75rem;
    margin-bottom: 1.2rem;
    margin-top: 2px;
    color: var(--green-dark);
  }

  table {
    width: 100%;
    min-width: 1100px; /* supaya tabel melebar */
    border-collapse: collapse;
    background-color: var(--white);
    border: 1px solid var(--green-dark);
    border-radius: 10px;
    overflow: hidden;
  }

  th, td {
    padding: 14px 16px;
    text-align: left;
    border-bottom: 1px solid var(--grey-border);
    font-size: 0.95rem;
  }

  th {
    background-color: var(--green-light);
    color: var(--white);
    font-weight: 600;
  }

  tr:nth-child(even) {
    background-color: var(--yellow-soft);
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  /* tombol aksi */
  .btn-action {
    padding: 6px 12px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    color: white;
    margin-right: 6px;
    display: inline-block;
    transition: background-color 0.3s ease;
  }

  .btn-edit {
    background-color: #1E90FF; /* biru */
  }

  .btn-edit:hover {
    background-color: #0b60d6;
  }

  .btn-delete {
    background-color: #dc3545; /* merah */
  }

  .btn-delete:hover {
    background-color: #a52834;
  }

  /* tombol tambah */
  .btn {
    display: inline-block;
    margin-top: 16px;
    background-color: var(--green-light);
    color: var(--white);
    padding: 10px 18px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: var(--green-dark);
  }
</style>

<div class="main-content">
  <h2>Pusat Admin</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['email']}</td>
                  <td>
                    <a href='../progres/update_admin.php?id={$row['id']}' class='btn-action btn-edit'>Edit</a>
                    <a href='../progres/delete_admin.php?id={$row['id']}' class='btn-action btn-delete' onclick=\"return confirm('Yakin?')\">Hapus</a>
                  </td>
                </tr>";
          $no++;
      }
      ?>
    </tbody>
  </table>
  <a href="../progres/tambah_admin.php" class="btn">+ Tambah Admin</a>
</div>
