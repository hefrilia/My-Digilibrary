<?php
    $db = new mysqli("localhost", "root", "", "db_pwebd");
    if ($db->connect_error) {
        die("Koneksi Gagal");
}
