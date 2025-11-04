<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang - Toko Komputer Tipu</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800 w-full flex justify-center items-start">
  <div class="flex min-h-screen md:w-[70%]">
    <!-- KONTEN -->
    <main class="flex-1 p-8">
      <div class="flex items-center justify-between mb-6 ">
        <div>
          <h1 class="text-2xl font-bold text-gray-900">Daftar Barang</h1>
          <p class="text-sm text-gray-500">Kelola data barang yang tersedia di toko</p>
        </div>
        <a href="tambah_data.php" class="bg-blue-600 text-white px-4 py-2 rounded-md font-semibold hover:bg-blue-700 transition">
          + Tambah Barang
        </a>
      </div>

      <!-- TABLE (Desktop) -->
      <div class="hidden md:block overflow-x-auto shadow rounded-lg">
        <table class="w-full border-collapse bg-white rounded-lg overflow-hidden">
          <thead class="bg-blue-600 text-white">
            <tr>
              <th class="px-6 py-3 text-left">No</th>
              <th class="px-6 py-3 text-left">Nama</th>
              <th class="px-6 py-3 text-left">Harga</th>
              <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysqli_query($koneksi, "SELECT * FROM barang");
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo "
              <tr class='border-b hover:bg-gray-50'>
                <td class='px-6 py-4 font-medium text-gray-700'>$no</td>
                <td class='px-6 py-4'>{$row['nama']}</td>
                <td class='px-6 py-4'>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                <td class='px-6 py-4 text-center'>
                  <a href='edit.php?id={$row['id_barang']}' class='text-blue-600 font-semibold hover:underline'>Edit</a> |
                  <a href='hapus.php?id={$row['id_barang']}' class='text-red-600 font-semibold hover:underline'>Hapus</a>
                </td>
              </tr>";
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>

      <!-- GRID (Mobile) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden mt-4">
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM barang");
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
          <div class='bg-white shadow-md rounded-lg p-4 border border-gray-100'>
            <p class='text-sm text-gray-400 mb-1'>No. $no</p>
            <h3 class='text-lg font-semibold mb-1 text-gray-900'>{$row['nama']}</h3>
            <p class='text-gray-700 mb-3'>Rp " . number_format($row['harga'], 0, ',', '.') . "</p>
            <div class='flex space-x-3'>
              <a href='edit.php?id={$row['id_barang']}' class='text-blue-600 font-medium hover:underline'>Edit</a>
              <a href='hapus.php?id={$row['id_barang']}' class='text-red-600 font-medium hover:underline'>Hapus</a>
            </div>
          </div>";
          $no++;
        }
        ?>
      </div>
    </main>
  </div>
</body>
</html>
