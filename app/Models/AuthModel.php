<?php
// app/Models/AuthModel.php

namespace App\Models;

class AuthModel
{
// Fungsi untuk verifikasi login
public function authenticate($username, $password)
{
// Contoh: username=admin, password=password
$validUsername = 'admin';
$validPassword = 'admin';

// Verifikasi username dan password
if ($username === $validUsername && $password === $validPassword) {
return true; // Login berhasil
}

return false; // Login gagal
}
}