<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name', 'parent_category', 'category_image', 'description', 'is_banner'];


    public function insertSubcategory($category_id, $subcategory_name, $description)
    {
        $data = [
            'category_id' => $category_id,
            'subcategory_name' => $subcategory_name,
            'description' => $description
        ];
    
        return $this->db->table('subcategories')->insert($data);
    }
    

   

}
