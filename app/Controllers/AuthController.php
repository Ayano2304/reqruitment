<?php
// app/Controllers/AuthController.php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
public function login()
{
// Ambil data input dari form login
$username = $this->request->getPost('username');
$password = $this->request->getPost('password');

// Verifikasi login menggunakan model AuthModel
$authModel = new AuthModel();
if ($authModel->authenticate($username, $password)) {
// Jika login berhasil, atur session
$session = session();
$session->set('username', $username);

return redirect()->to('/admin'); // Redirect ke halaman dashboard
} else {
// Jika login gagal, tampilkan pesan error atau form login kembali
return view('pages/home');
}
}

public function logout()
{
// Hapus session saat logout
$session = session();
$session->destroy();

return redirect()->to('/');
}
}