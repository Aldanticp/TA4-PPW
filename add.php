<?php
require 'config.php';
if (!isset($_SESSION['login'])) header("Location: login.php");

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $telp = trim($_POST['telepon']);

    if ($nama == "" || $telp == "") {
        $error = "Semua field harus diisi!";
    } elseif (!preg_match('/^[0-9]+$/', $telp)) {
        $error = "Nomor telepon harus angka!";
    } else {
        $_SESSION['kontak'][] = [
            "nama" => $nama,
            "telepon" => $telp
        ];
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<title>Tambah Kontak</title>
</head>

<body class="min-h-screen flex justify-center items-center bg-gradient-to-br from-pink-200 via-pink-300 to-pink-400 p-6">

<div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-6 animate-[fadeIn_0.4s_ease]">

    <h1 class="text-2xl font-bold text-center mb-5 text-pink-700">
        Tambah Kontak
    </h1>

    <?php if ($error): ?>
    <div class="bg-pink-100 border border-pink-300 text-pink-700 px-4 py-3 rounded mb-4">
        <?= $error ?>
    </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">

        <div>
            <label class="block text-pink-700 mb-1 font-medium">Nama</label>
            <input name="nama" placeholder="Masukkan nama"
                class="border border-gray-300 p-3 w-full rounded-lg 
                       focus:ring-2 focus:ring-pink-300 focus:border-pink-400 transition">
        </div>

        <div>
            <label class="block text-pink-700 mb-1 font-medium">Telepon</label>
            <input name="telepon" placeholder="Masukkan nomor telepon"
                class="border border-gray-300 p-3 w-full rounded-lg 
                       focus:ring-2 focus:ring-pink-300 focus:border-pink-400 transition">
        </div>

        <button
            class="w-full bg-pink-600 hover:bg-pink-700 text-white py-3 rounded-lg 
                   font-semibold shadow transition active:scale-95">
            Simpan Kontak
        </button>

        <a href="index.php"
           class="block text-center mt-2 text-pink-700 hover:text-pink-900 transition">
            ← Kembali ke Daftar Kontak
        </a>
    </form>

</div>

</body>
</html>
