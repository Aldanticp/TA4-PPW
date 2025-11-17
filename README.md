# 📇 Sistem Manajemen Kontak Sederhana

**Menggunakan PHP Native, Session, & TailwindCSS**

Proyek ini adalah aplikasi web sederhana untuk mengelola daftar kontak (nama & nomor telepon) **tanpa database** dan tanpa JSON.
Data kontak disimpan menggunakan **PHP Session**, sehingga cocok untuk tugas kampus, demo aplikasi, atau latihan dasar CRUD.

---

## 🚀 Fitur Utama

* 🔐 **Login System**

  * Username: `admin`
  * Password: `123`
* ➕ **Tambah Kontak**

  * Validasi form (tidak boleh kosong, telepon harus angka)
* 📋 **Daftar Kontak**

  * Menampilkan semua kontak yang tersimpan dalam session
* ✏️ **Edit Kontak**
* ❌ **Hapus Kontak**
* 🔄 **Session Management**

  * Logout
  * Akses halaman dilindungi session
* 🎨 **UI Modern dengan TailwindCSS**

  * Tema warna *pink & purple*

---

## 📁 Struktur Folder

```
/
│── add.php
│── edit.php
│── delete.php
│── index.php
│── login.php
│── logout.php
│── config.php
│── README.md
```

---

## 🛠️ Cara Menjalankan

1. Pastikan komputer sudah memiliki **PHP**.

   ```bash
   php -v
   ```

2. Letakkan semua file dalam satu folder, misalnya:

   ```
   contact-app/
   ```

3. Jalankan server PHP:

   ```bash
   php -S localhost:8000
   ```

4. Buka aplikasi di browser:

   ```
   http://localhost:8000
   ```

5. Login menggunakan:

   * Username: **admin**
   * Password: **123**

---

## 📌 Catatan Penting

* Data **tidak disimpan permanen**, karena semua kontak dikelola menggunakan **session PHP**.
* Ketika server dimatikan atau session berakhir, data akan hilang.
* Sistem ini cocok untuk **pembelajaran CRUD dasar**, bukan untuk produksi.

---

## 🎨 Teknologi yang Digunakan

* **PHP Native**
* **TailwindCSS CDN**
* **HTML5**

---

📷 Screenshots
<div align="center">
🔐 Halaman Login
<img src="https://github.com/user-attachments/assets/aee7e519-9abf-4cc0-a260-e74ae2544edd" width="350" style="border-radius:10px; margin:10px;" />
📋 Daftar Kontak
<img src="https://github.com/user-attachments/assets/33b1f6ea-3b9d-48ca-bfe5-28b0df3aacbc" width="350" style="border-radius:10px; margin:10px;" />
➕ Tambah Kontak
<img src="https://github.com/user-attachments/assets/bc8ec9f8-31d5-46c2-ace8-d1c1cb483a6f" width="350" style="border-radius:10px; margin:10px;" />
✏️ Edit Kontak
<img src="https://github.com/user-attachments/assets/ae79f9ea-3a3b-4f2c-8c49-769b1ab8bdc9" width="350" style="border-radius:10px; margin:10px;" /> </div>

---

## 🤝 Kontribusi

Silakan fork dan kembangkan fitur seperti:

* Penyimpanan ke file
* Desain UI lebih lengkap
* Penambahan pencarian kontak
* Pagination

---

## 📜 Lisensi

Proyek ini menggunakan lisensi bebas — silakan gunakan untuk belajar atau tugas kuliah.

---

Kalau mau, saya bisa buatkan **deskripsi GitHub repository**, **banner**, atau **preview gambar untuk README**.
