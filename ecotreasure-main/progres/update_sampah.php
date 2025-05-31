<?php
include '../includes/db.php';
include '../includes/layout.php';

// Ambil data sampaj yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM sampah WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);
}

// Kalau form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $tanggal = $_POST['tanggal'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE sampah SET nama='$nama', rt='$rt', tanggal='$tanggal', jenis_sampah='$jenis_sampah', jumlah='$jumlah' WHERE id='$id'";
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

  input:focus {
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
    <h2>Edit Sampah</h2>
    <form method="POST" action="update_sampah.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>RT:</label>
        <input type="text" name="rt" value="<?php echo $data['rt']; ?>" required><br>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required><br>
        <label>Jenis Sampah:</label>
        <input type="text" name="jenis_sampah" value="<?php echo $data['jenis_sampah']; ?>" required><br>
        <label>Jumlah (kg):</label>
        <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>
