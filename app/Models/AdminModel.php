<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password'];

    public function authenticate($email, $password)
    {
        return $this->where('email', $email)
                    ->where('password', $password)
                    ->first();
    }
}
