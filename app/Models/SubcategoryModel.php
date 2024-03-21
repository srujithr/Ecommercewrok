<?php namespace App\Models;

use CodeIgniter\Model;

class SubcategoryModel extends Model
{
    protected $table = 'subcategories';
    protected $primaryKey = 'sub_id';

    protected $allowedFields = ['subcategory_name', 'category_id', 'description'];

    // You can define other properties and methods as needed
}
