<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthMiddleware implements FilterInterface
{
    // Di file app/Filters/AuthMiddleware.php
public function before(RequestInterface $request, $arguments = null)
{
    $session = \Config\Services::session();
    $loggedIn = $session->get('loggedIn');

    if (!$loggedIn) {
        $session->setFlashdata('errors', 'You have to log in first!');
        return redirect()->to('/login');
    }
}


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after request
    }
}
