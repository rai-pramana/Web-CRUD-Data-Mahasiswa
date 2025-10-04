# Web CRUD Data Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa menggunakan operasi CRUD (Create, Read, Update, Delete) yang dibangun dengan PHP dan MySQL.

## 📋 Deskripsi

Sistem manajemen data mahasiswa ini memungkinkan pengguna untuk:

-   📖 Melihat daftar semua mahasiswa
-   ➕ Menambah data mahasiswa baru
-   ✏️ Mengubah data mahasiswa yang sudah ada
-   🗑️ Menghapus data mahasiswa

## 🛠️ Teknologi yang Digunakan

-   **Frontend:**

    -   HTML5
    -   CSS3
    -   JavaScript
    -   Bootstrap 5
    -   DataTables
    -   FontAwesome Icons

-   **Backend:**
    -   PHP
    -   MySQL/MariaDB

## 📁 Struktur Project

```
Web-CRUD-Data-Mahasiswa/
├── index.php              # Halaman utama untuk menampilkan data mahasiswa
├── css/
│   ├── styleForm.css      # Styling untuk form tambah/edit
│   └── styleIndex.css     # Styling untuk halaman utama
├── db/
│   └── prodi.sql          # File database SQL
├── js/
│   ├── dataTables.js      # Konfigurasi DataTables
│   ├── validationAdd.js   # Validasi form tambah data
│   └── validationUpdate.js # Validasi form edit data
└── php/
    ├── addData.php        # Form dan proses tambah data
    ├── connection.php     # Konfigurasi koneksi database
    ├── deleteData.php     # Proses hapus data
    └── updateData.php     # Form dan proses edit data
```

## 🗄️ Database Schema

### Tabel: `mahasiswa`

| Field     | Type        | Deskripsi        |
| --------- | ----------- | ---------------- |
| NIM       | varchar(10) | Primary Key      |
| Namamhs   | varchar(30) | Nama Mahasiswa   |
| Alamatmhs | varchar(80) | Alamat Mahasiswa |
| Kontakmhs | varchar(12) | Nomor Kontak     |

## 🚀 Instalasi

### Prasyarat

-   Web server (Apache/Nginx)
-   PHP 7.4 atau lebih baru
-   MySQL/MariaDB
-   Browser web modern

### Langkah Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/rai-pramana/Web-CRUD-Data-Mahasiswa.git
    ```

2. **Pindah ke direktori project**

    ```bash
    cd Web-CRUD-Data-Mahasiswa
    ```

3. **Setup Database**

    - Buat database baru dengan nama `prodi`
    - Import file `db/prodi.sql` ke database yang telah dibuat

    ```sql
    CREATE DATABASE prodi;
    USE prodi;
    SOURCE db/prodi.sql;
    ```

4. **Konfigurasi Database**

    - Edit file `php/connection.php`
    - Sesuaikan konfigurasi database:

    ```php
    $serverName = "localhost";     // Server database
    $userName = "your_username";   // Username database
    $password = "your_password";   // Password database
    $dbName = "prodi";            // Nama database
    ```

5. **Deploy ke Web Server**
    - Copy semua file ke direktori web server (htdocs untuk XAMPP)
    - Akses melalui browser: `http://localhost/Web-CRUD-Data-Mahasiswa`

## 📖 Cara Penggunaan

### 1. Melihat Data Mahasiswa

-   Buka halaman utama (`index.php`)
-   Data mahasiswa akan ditampilkan dalam bentuk tabel
-   Gunakan fitur search dan pagination dari DataTables

### 2. Menambah Data Mahasiswa

-   Klik tombol "Tambah Data" di halaman utama
-   Isi form dengan data yang diperlukan:
    -   NIM (wajib, angka)
    -   Nama (wajib, maksimal 30 karakter)
    -   Alamat (wajib, maksimal 80 karakter)
    -   No. Telepon (wajib, maksimal 15 karakter)
-   Klik "Tambah Data"

### 3. Mengubah Data Mahasiswa

-   Klik tombol "Update" pada baris data yang ingin diubah
-   Edit data pada form yang muncul
-   Klik "Ubah Data"

### 4. Menghapus Data Mahasiswa

-   Klik tombol "Hapus" pada baris data yang ingin dihapus
-   Konfirmasi penghapusan pada dialog yang muncul

## ✨ Fitur

-   **Responsive Design**: Interface yang responsif untuk berbagai ukuran layar
-   **Data Tables**: Fitur pencarian, sorting, dan pagination
-   **Form Validation**: Validasi input pada sisi client
-   **Konfirmasi Delete**: Dialog konfirmasi sebelum menghapus data
-   **Alert Notifications**: Notifikasi sukses/gagal untuk setiap operasi

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/fitur-baru`)
3. Commit perubahan (`git commit -am 'Menambah fitur baru'`)
4. Push ke branch (`git push origin feature/fitur-baru`)
5. Buat Pull Request

## 📝 Lisensi

Project ini menggunakan lisensi [MIT License](LICENSE).

## 👤 Author

**I Kadek Rai Pramana**

-   GitHub: [@rai-pramana](https://github.com/rai-pramana)

## 🐛 Bug Reports

Jika menemukan bug atau ingin memberikan saran, silakan buat [issue baru](https://github.com/rai-pramana/Web-CRUD-Data-Mahasiswa/issues).

---

⭐ Jika project ini membantu, jangan lupa berikan star!
