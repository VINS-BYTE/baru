<?php
include '../includes/db.php';
include '../includes/layout.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $tanggal = $_POST['tanggal'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO sampah (nama, rt, tanggal, jenis_sampah, jumlah)
              VALUES ('$nama', '$rt', '$tanggal', '$jenis_sampah', '$jumlah')";
    mysqli_query($conn, $query);

    header("Location: ../pages/sampah.php");
    exit;
}
?>

<style>
  .content {
    width: 100%;
    max-width: 900px;
    margin: 2px auto;
    padding: 35px;
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
  }

  .content h2 {
    color: var(--green-dark);
    margin-bottom: 20px;
    margin-top: 2px;
  }

  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: var(--green-dark);
  }

  input[type="text"],
  input[type="date"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 18px;
    border: 1px solid var(--grey-border);
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="date"]:focus {
    border-color: var(--green-dark);
    outline: none;
  }

  button {
    background-color: var(--green-dark);
    color: white;
    padding: 14px;
    font-weight: 700;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 1.1rem;
  }

  button:hover {
    background-color: #1b5e20;
  }
</style>

<div class="content">
    <h2>Tambah Sampah</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>RT:</label>
        <input type="text" name="rt" required>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
        <label>Jenis Sampah:</label>
        <input type="text" name="jenis_sampah" required>
        <label>Jumlah (kg):</label>
        <input type="text" name="jumlah" required>
        <button type="submit">Simpan</button>
    </form>
</div>
