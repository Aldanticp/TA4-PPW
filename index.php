<?php
require 'config.php';
if (!isset($_SESSION['login'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<title>Daftar Kontak</title>
</head>

<body class="min-h-screen p-6 bg-gradient-to-br from-pink-200 via-purple-200 to-pink-300">

<div class="max-w-3xl mx-auto">

    <!-- HEADER -->
    <div class="flex justify-between mb-6 items-center">
        <h1 class="text-4xl font-extrabold text-gray-800 drop-shadow">
            Daftar Kontak
        </h1>

        <a href="logout.php"
           class="text-red-600 font-semibold hover:underline text-lg">
            Logout
        </a>
    </div>

    <!-- TOMBOL TAMBAH -->
    <a href="add.php"
       class="bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700
              text-white px-5 py-2 rounded-lg shadow-lg font-semibold">
        + Tambah Kontak
    </a>

    <!-- CARD TABEL -->
    <div class="bg-white/80 backdrop-blur-sm shadow-xl rounded-2xl mt-6 overflow-hidden border border-white">

        <?php if (empty($_SESSION['kontak'])): ?>
            <p class="p-6 text-center text-gray-700 text-lg">
                Belum ada kontak. Silakan tambahkan.
            </p>
        <?php else: ?>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-300/60">
                    <th class="p-3 font-semibold text-gray-700">Nama</th>
                    <th class="p-3 font-semibold text-gray-700">Telepon</th>
                    <th class="p-3 font-semibold text-center text-gray-700">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($_SESSION['kontak'] as $i => $c): ?>
                <tr class="border-b hover:bg-gray-100/60 transition">
                    <td class="p-3"><?= htmlspecialchars($c['nama']) ?></td>
                    <td class="p-3"><?= htmlspecialchars($c['telepon']) ?></td>

                    <td class="p-3 text-center">
                        <a href="edit.php?id=<?= $i ?>"
                           class="text-pink-600 font-semibold hover:underline mr-4">
                            Edit
                        </a>

                        <a href="delete.php?id=<?= $i ?>"
                           onclick="return confirm('Yakin ingin menghapus kontak ini?')"
                           class="text-red-600 font-semibold hover:underline">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

        <?php endif; ?>
    </div>

</div>

</body>
</html>
