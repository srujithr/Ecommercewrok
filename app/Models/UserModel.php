<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin'; // Table name
    protected $primaryKey = 'id'; // Primary key

    protected $allowedFields = ['username', 'email', 'password']; // Fields that can be filled during insert/update

    // Validation rules
    protected $validationRules = [
        'username' => 'required|max_length[255]',
        'email' => 'required|valid_email|max_length[255]',
        'password' => 'required|min_length[8]',
    ];

    // Validation error messages
    protected $validationMessages = [
        'username' => [
            'required' => 'The username field is required.',
            'max_length' => 'The username field must not exceed 255 characters in length.',
        ],
        'email' => [
            'required' => 'The email field is required.',
            'valid_email' => 'Please enter a valid email address.',
            'max_length' => 'The email field must not exceed 255 characters in length.',
        ],
        'password' => [
            'required' => 'The password field is required.',
            'min_length' => 'The password must be at least 8 characters in length.',
        ],
    ];
}
