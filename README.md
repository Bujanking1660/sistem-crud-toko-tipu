# 🖥️ Toko Komputer Tipu

Toko Komputer Tipu adalah proyek web sederhana berbasis **PHP dan MySQL** dengan desain **modern & responsif** menggunakan **Tailwind CSS (CDN)**.  
Aplikasi ini menampilkan data barang, serta menyediakan fitur CRUD (Create, Read, Update, Delete) dengan tampilan bersih dan profesional.

---

## 🚀 Fitur Utama
- 📋 **Daftar Barang:** Menampilkan semua data barang dalam tampilan tabel (desktop) atau grid (mobile).  
- ➕ **Tambah Data:** Menambahkan barang baru dengan form modern dan validasi sederhana.  
- ✏️ **Edit Data:** Mengubah data barang dengan tampilan form konsisten dan mudah digunakan.  
- ❌ **Hapus Data:** Konfirmasi penghapusan data dengan tampilan dialog elegan & aman.  
- 📱 **Responsif:** Tampilan otomatis menyesuaikan perangkat (mobile & desktop).  
- 🎨 **Desain Modern:** Tema light mode minimalis berbasis Tailwind CSS.  

---

## 🛠️ Teknologi yang Digunakan
```bash
PHP (Native)
MySQL
Tailwind CSS (via CDN)
HTML5 + CSS3
Desain Responsif & Light Mode
.
├── index.php          # Halaman utama (daftar barang)
├── tambah_data.php    # Halaman tambah data barang
├── edit.php           # Halaman edit data barang
├── hapus.php          # Halaman konfirmasi & penghapusan barang
├── simpan_data.php    # Proses penyimpanan data (insert & update)
├── koneksi.php        # Koneksi database MySQL
├── style.css          # File tambahan (opsional)
└── toko_tipiu.sql     # Struktur database & data contoh
```
---
## ⚙️ Cara Menjalankan Proyek
```bash
1. Clone repository
   git clone https://github.com/username/toko-komputer-tipu.git

2. Masuk ke folder proyek
   cd toko-komputer-tipu

3. Jalankan server lokal (misal XAMPP)
   - Pindahkan folder ke htdocs
   - Aktifkan Apache & MySQL

4. Buat database di phpMyAdmin
   - Nama database: toko_tipiu
   - Import file: toko_tipiu.sql

5. Akses proyek di browser:
   http://localhost/toko-komputer-tipu/
```
---
👨‍💻 Kontributor

Dikembangkan oleh: Rizkya Gusnaldy Kalia
Proyek ini dibuat untuk latihan & pembelajaran pengembangan web berbasis PHP + Tailwind.
---
📄 Lisensi

Proyek ini bersifat open-source dan bebas digunakan untuk tujuan belajar.
