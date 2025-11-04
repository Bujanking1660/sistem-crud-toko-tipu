<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data - Toko Komputer Tipu</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800 flex items-start mt-24 justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md border border-gray-100">
    <h1 class="text-2xl font-bold text-blue-600 mb-2 text-center">Toko Komputer Tipu</h1>
    <p class="text-sm text-gray-500 text-center mb-6">Tambah barang baru ke daftar toko</p>

    <form method="post" action="simpan_data.php" class="space-y-5">
      <div>
        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Barang</label>
        <input id="nama" name="nama" type="text" required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
      </div>

      <div>
        <label for="harga" class="block text-sm font-semibold text-gray-700 mb-2">Harga Barang</label>
        <input id="harga" name="harga" type="number" required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
      </div>

      <div class="flex justify-between items-center pt-4">
        <a href="index.php" class="text-gray-600 hover:text-blue-600 font-medium">← Kembali</a>
        <button type="submit"
          class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Simpan
        </button>
      </div>
    </form>
  </div>

</body>
</html>
