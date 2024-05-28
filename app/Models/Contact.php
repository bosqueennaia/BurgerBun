<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'subject', 'message', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
