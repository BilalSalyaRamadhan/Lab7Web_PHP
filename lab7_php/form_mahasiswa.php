<?php
// 1. Bagian Pemrosesan Data (dari modul)
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>

    <!-- 2. Bagian Form HTML -->
    <form method="POST" action="">
        <p>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama">
        </p>
        <p>
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim">
        </p>
        <p>
            <label for="prodi">Program Studi:</label><br>
            <input type="text" id="prodi" name="prodi">
        </p>
        <p>
            <label for="semester">Semester (1-14):</label><br>
            <input type="number" id="semester" name="semester">
        </p>
        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email">
        </p>
        <button type="submit">Kirim Data</button>
    </form>

    <hr>

    <!-- 3. Bagian Tampilan Error atau Hasil -->
    <?php if (!empty($error)): ?>
        <h3>Terjadi Kesalahan:</h3>
        <ul style="color: red;">
            <?php foreach ($error as $pesan): ?>
                <li><?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif ($data !== null): ?>
        <h3>Ringkasan Data Mahasiswa:</h3>
        <ul>
            <li><strong>Nama:</strong> <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></li>
            <li><strong>NIM:</strong> <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></li>
            <li><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></li>
            <li><strong>Semester:</strong> <?= htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8") ?></li>
            <li><strong>Email:</strong> <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>