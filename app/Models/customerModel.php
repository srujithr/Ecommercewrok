<?php

namespace App\Models;

use CodeIgniter\Model;

class customerModel extends Model
{
    protected $table = 'customers'; // Specify the table name

    protected $primaryKey = 'id'; // Specify the primary key field if it's different from 'id'

    protected $allowedFields = ['name', 'email','phone_number', 'password', 'created_at']; // Specify the fields that can be mass-assigned

    protected $useTimestamps = true; // Enable automatic timestamps for 'created_at' and 'updated_at' fields

    // Other configurations and methods can be added as needed
}
