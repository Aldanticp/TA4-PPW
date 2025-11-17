<?php
require 'config.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'] ?? "";
    $pass = $_POST['password'] ?? "";

    if ($user === "admin" && $pass === "123") {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<title>Login</title>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-200 to-purple-200">

<div class="bg-white p-8 rounded-2xl shadow-lg w-80">

    <h1 class="text-2xl font-bold text-center mb-6 text-gray-700">
        Login
    </h1>

    <?php if (!empty($error)): ?>
        <p class="text-red-600 text-center mb-4 font-medium">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST" class="space-y-4">

        <div>
            <label class="text-gray-700 font-medium">Username</label>
            <input type="text" name="username"
                class="mt-1 border border-gray-300 p-2 rounded w-full focus:ring focus:ring-pink-300 outline-none"
                placeholder="Masukkan username">
        </div>

        <div>
            <label class="text-gray-700 font-medium">Password</label>
            <input type="password" name="password"
                class="mt-1 border border-gray-300 p-2 rounded w-full focus:ring focus:ring-pink-300 outline-none"
                placeholder="Masukkan password">
        </div>

        <button
            class="bg-pink-600 hover:bg-pink-700 transition text-white py-2 w-full rounded-lg font-semibold shadow">
            Login
        </button>

    </form>

</div>

</body>
</html>
