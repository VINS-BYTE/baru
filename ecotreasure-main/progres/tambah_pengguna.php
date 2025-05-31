<?php
include '../includes/db.php';
include '../includes/layout.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $email = $_POST['email'];

    $query = "INSERT INTO pengguna (nama, rt, email) VALUES ('$nama', '$rt', '$email')";
    mysqli_query($conn, $query);

    header("Location: ../pages/pengguna.php");
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
  input[type="email"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 18px;
    border: 1px solid var(--grey-border);
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="email"]:focus {
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
    <h2>Tambah Pengguna</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>RT:</label>
        <input type="text" name="rt" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Simpan</button>
    </form>
</div>
