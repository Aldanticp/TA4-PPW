<?php
require 'config.php';
if (!isset($_SESSION['login'])) header("Location: login.php");

// Cek valid ID
if (!isset($_GET['id']) || !isset($_SESSION['kontak'][$_GET['id']])) {
    echo "<p>Kontak tidak ditemukan.</p>";
    exit;
}

$id = $_GET['id'];
$kontak = $_SESSION['kontak'][$id];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = trim($_POST['nama']);
    $telepon = trim($_POST['telepon']);

    if ($nama === "") $errors[] = "Nama tidak boleh kosong.";
    if ($telepon === "") {
        $errors[] = "Nomor telepon tidak boleh kosong.";
    } elseif (!preg_match('/^[0-9]+$/', $telepon)) {
        $errors[] = "Nomor telepon hanya boleh berisi angka.";
    }

    if (empty($errors)) {
        $_SESSION['kontak'][$id]['nama'] = $nama;
        $_SESSION['kontak'][$id]['telepon'] = $telepon;

        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<title>Edit Kontak</title>
</head>
<body class="p-6 bg-gray-100">

<div class="max-w-md mx-auto">

    <h1 class="text-2xl font-bold mb-6 text-center text-pink-600">Edit Kontak</h1>

    <!-- Error -->
    <?php if (!empty($errors)): ?>
        <div class="bg-pink-100 text-pink-700 border border-pink-300 p-3 rounded mb-4">
            <?php foreach ($errors as $e): ?>
                <p>• <?= htmlspecialchars($e) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="bg-white p-5 rounded-xl shadow">

        <label class="block font-semibold mb-1">Nama</label>
        <input name="nama"
               value="<?= htmlspecialchars($kontak['nama']) ?>"
               class="border p-2 w-full rounded mb-4 focus:ring focus:ring-pink-300">

        <label class="block font-semibold mb-1">Nomor Telepon</label>
        <input name="telepon"
               value="<?= htmlspecialchars($kontak['telepon']) ?>"
               class="border p-2 w-full rounded mb-4 focus:ring focus:ring-pink-300">

        <button class="bg-pink-600 hover:bg-pink-700 text-white p-2 w-full rounded font-semibold">
            Update Kontak
        </button>

        <a href="index.php"
           class="block text-center mt-3 text-sm text-gray-600 hover:underline">
           ← Kembali
        </a>
    </form>

</div>

</body>
</html>
