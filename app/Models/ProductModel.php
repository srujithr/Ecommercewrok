<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id'; // Assuming 'product_id' is the primary key column name
    protected $allowedFields = ['product_name', 'sku', 'color', 'size', 'description', 'image', 'related_images', 'category_id', 'subcategory_id', 'top_seller', 'best_seller', 'new_arrivals', 'top_trending', 'price', 'publish_website'];



    
    public function getfashionProducts()
    {
        // Fetch products where category name is 'fashion'
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Clothing')
                    ->findAll();
    }



    public function getBagsProducts()
    {
        // Fetch products where category name is 'Bags'
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Bags')
                    ->findAll();
    }

    public function getJewelleryProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Jewellery')
                    ->findAll();
    }




    public function getWatchesProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Watches')
                    ->findAll();
    }


    public function getDuppattaProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Duppatta')
                    ->findAll();
    }
    

    public function getBottomWearProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Bottom Wear')
                    ->findAll();
    }
    

    public function getBlouseProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Blouse')
                    ->findAll();
    }


    public function getSalwarProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Salwar')
                    ->findAll();
    }



    public function getWesternWearProducts()
    {
        return $this->select('products.*')
                    ->join('categories', 'products.category_id = categories.id')
                    ->where('categories.category_name', 'Western Wear')
                    ->findAll();
    }


public function getFurnishingProducts()
{
    return $this->select('products.*')
                ->join('categories', 'products.category_id = categories.id')
                ->where('categories.category_name', 'Furnishing')
                ->findAll();
}


}



