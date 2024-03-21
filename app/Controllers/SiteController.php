<?php

namespace App\Controllers;



use Illuminate\Http\Request;

use App\Models\ProductModel;


use App\Models\CategoryModel; // Update this line

class SiteController extends BaseController


{
    public function index_home()
    {
        // return view('website/index_home');

         // Load the ProductModel
         $productModel = new ProductModel();

         // Fetch all new arrivals from the database
         $data['newArrivals'] = $productModel->where('new_arrivals', 1)->findAll();
 
         // Pass the new arrivals data to the view
         return view('website/index_home', $data);
         

       
    }

    public function fashion(){
        // return view('website/fashion');
        $productModel = new ProductModel();
    
        // Fetch Bags products from the model
        $ClothingProducts = $productModel->getfashionProducts();

        // Pass the data to the view
        return view('website/fashion', ['ClothingProducts' => $ClothingProducts]);
    }

   
        
        public function Watches()
        {
            $productModel = new ProductModel();
    
            // Fetch watches products from the model
            $watchesProducts = $productModel->getWatchesProducts();
    
            // Pass the data to the view
            return view('website/watches', ['watchesProducts' => $watchesProducts]);
        }



  
    public function Bags()
        {
            $productModel = new ProductModel();
    
            // Fetch Bags products from the model
            $BagsProducts = $productModel->getBagsProducts();
    
            // Pass the data to the view
            return view('website/Bags', ['BagsProducts' => $BagsProducts]);
    }
   


    public function Jewellery()
    {
        $productModel = new ProductModel();
    
        // Fetch Jewellery products from the model
        $JewelleryProducts = $productModel->getJewelleryProducts();

        // Pass the data to the view
        return view('website/Jewellery', ['JewelleryProducts' => $JewelleryProducts]);
    }



    public function Duppatta()
    {
        // Create an instance of the ProductModel
        $productModel = new ProductModel();
        
        // Call the method to get 'Duppatta' products
        $DuppattaProducts = $productModel->getDuppattaProducts();
        
        
        return view('website/Duppatta', ['DuppattaProducts' => $DuppattaProducts]);
    }
   

    public function Salwar()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch products with category name 'Salwar'
        $salwarProducts = $productModel->getSalwarProducts();

        // Pass products data to view
        return view('website/Salwar', ['salwarProducts' => $salwarProducts]);
    }



    public function WesternWear()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch products with category name 'Western Wear'
        $westernWearProducts = $productModel->getWesternWearProducts();

        // Pass products data to view
        return view('website/WesternWear', ['westernWearProducts' => $westernWearProducts]);
    }
    
   
    


    public function bottomWear()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch products with category name 'Bottom Wear'
        $bottomWearProducts = $productModel->getBottomWearProducts();

        // Pass products data to view
        return view('website/bottomwear', ['bottomWearProducts' => $bottomWearProducts]);
    }
    
  
    public function Blouse()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch products with category name 'Blouse'
        $blouseProducts = $productModel->getBlouseProducts();

        // Pass products data to view
        return view('website/Blouse', ['blouseProducts' => $blouseProducts]);
    }


    
    public function Furnishings()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch products with category name 'Furnishing'
        $furnishingProducts = $productModel->getFurnishingProducts();

        // Pass products data to view
        return view('website/Furnishings', ['furnishingProducts' => $furnishingProducts]);
    }
    

  
    public function shopby()
    {
        // Load the ProductModel
        $productModel = new ProductModel();

        // Fetch all products from the database
        $products = $productModel->findAll();

        // Pass products to the view
        return view('website/shopby', ['products' => $products]);
    }








    public function contact(){

        return view('website/contact');
    }
    public function About(){

        return view('website/About');
    }

    public function collection(){

        return view('website/collection');
    }

    public function login(){

        return view('website/login');
    }
}
