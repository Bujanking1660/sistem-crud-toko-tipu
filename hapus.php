<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id'");
$data = mysqli_fetch_assoc($query);

if(isset($_POST['confirm'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang = '$id'");
    if($delete){
        header("Location: index.php?status=deleted");
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data.'); window.location='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Hapus - Toko Komputer Tipu</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- MAIN -->
  <main class="max-w-2xl mx-auto mt-24 px-6">
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 text-center">
      <h2 class="text-2xl font-semibold text-gray-900 mb-4">Konfirmasi Penghapusan</h2>
      <p class="text-gray-600 mb-8 leading-relaxed">
        Apakah kamu yakin ingin menghapus data
        <span class="font-semibold text-gray-900">“<?= $data['nama'] ?>”</span> 
        dengan harga <span class="font-semibold text-gray-800">Rp<?= number_format($data['harga'], 0, ',', '.') ?></span>?
        <br><span class="text-red-500 font-medium">Tindakan ini tidak dapat dibatalkan.</span>
      </p>

      <form method="post" class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="submit" name="confirm"
          class="bg-red-500 hover:bg-red-600 text-white font-medium px-6 py-2 rounded-lg shadow-sm transition w-full sm:w-auto">
          Ya, Hapus
        </button>
        <a href="index.php"
          class="text-gray-700 border border-gray-300 hover:bg-gray-100 px-6 py-2 rounded-lg transition w-full sm:w-auto text-center">
          Batal
        </a>
      </form>
    </div>
  </main>

</body>
</html>
