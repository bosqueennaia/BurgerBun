<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }

    public function menu(): string
    {
        return view('menu');
    }

    public function contact(): string
    {
    // Ambil pesan sukses dari flash session
    $data['success_message'] = session()->getFlashdata('success_message');

    return view('contact', $data);
    }

    public function saveContact()
    {
    // Pastikan ini adalah koneksi ke database yang benar
    $connection = new \mysqli("localhost", "root", "", "burgerbun");

    // Periksa koneksi
    if ($connection->connect_error) {
        die("Koneksi database gagal: " . $connection->connect_error);
    }

    // Terima data formulir
    $name = $this->request->getPost('w3lName');
    $email = $this->request->getPost('w3lSender');
    $phone = $this->request->getPost('w3lPhone');
    $subject = $this->request->getPost('w3lSubject');
    $message = $this->request->getPost('w3lMessage');
    $created_at = date('Y-m-d H:i:s');

    // Simpan data formulir ke dalam database
    $query = "INSERT INTO contact (name, email, phone, subject, message, created_at) VALUES ('$name', '$email', '$phone', '$subject', '$message', '$created_at')";


    if ($connection->query($query) === TRUE) {
        // Atur pesan sukses sebagai flash session
        session()->setFlashdata('success_message', 'Data formulir berhasil disimpan.');
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
    return redirect()->to(base_url('contact'));

    // Tutup koneksi database
    $connection->close();
    }
    
    

}