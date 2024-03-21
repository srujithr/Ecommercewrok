<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'customer_image', 'comment', 'rating', 'publish_on_website'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    
}
