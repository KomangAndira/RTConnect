<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_rtconnect";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Fungsi untuk membersihkan dan melindungi input dari SQL injection
function cleanInput($input)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($input))));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir login
    $peran = cleanInput($_POST["peran"]);
    $username = cleanInput($_POST["email-username"]);
    $password = cleanInput($_POST["password"]);

    // Menentukan tabel berdasarkan peran
    $tabel = ($peran === 'Warga') ? 'WargaRT' : 'PengurusRT';

    // Query untuk memeriksa kombinasi username dan password
    $query = "SELECT * FROM $tabel WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Login berhasil
            echo "Login berhasil!";
            // Di sini, Anda dapat mengarahkan pengguna ke halaman yang sesuai
            // Misalnya, menggunakan header("Location: halaman_pengguna.php");
        } else {
            // Login gagal
            echo "Login gagal. Username atau password salah.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Menutup koneksi
    mysqli_close($conn);
}
?>
