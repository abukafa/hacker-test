<?php

class Auth
{
    private $db;
    private $username;
    private $password;

    public function __construct($db, $username, $password)
    {
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }

    public function login()
    {
        // Menghindari serangan SQL injection
        $username = $this->db->real_escape_string($this->username);

        // Query untuk mencari pengguna berdasarkan username
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $this->db->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Memeriksa apakah password cocok dengan hash yang tersimpan
            if (password_verify($this->password, $row['password'])) {
                return "success";
            } else {
                return "Invalid password";
            }
        } else {
            return "Invalid username";
        }
    }
}

// Konfigurasi koneksi ke database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "login_test";
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Membuat objek Auth dan memanggil metode login()
$auth = new Auth($conn, $username, $password);
$result = $auth->login();

// Menghasilkan output sesuai dengan hasil autentikasi
if ($result == "success") {
    echo "<strong>Login successful</strong>";
} else {
    echo $result;
}
