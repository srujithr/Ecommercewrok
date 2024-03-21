<?php



namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\ProductModel;

class AdminDashController extends BaseController
{
    public function index()
    {
        // Instantiate the CustomerModel and ProductModel
        $customerModel = new CustomerModel();
        $productModel = new ProductModel();

        // Fetch the total count of customers
        $totalCustomers = $customerModel->countAll();

        // Fetch the total count of products
        $totalProducts = $productModel->countAll();

        // Fetch the last registered users
        $lastRegisteredUsers = $customerModel->orderBy('created_at', 'DESC')->findAll(5); // Adjust the number as per your requirement


        // Pass the total counts to the view
        $data = [
            'totalCustomers' => $totalCustomers,
            'totalProducts' => $totalProducts,
            'lastRegisteredUsers' => $lastRegisteredUsers,
        ];

        // Load the view with data
        return view('admin-awa/index', $data);
    }
    
    public function signup()
    {
        return view("admin-awa/signup");
    }
    public function signin()
    {
        return view("admin-awa/signin");
    }
    public function categories()
    {
        
        return view("admin-awa/categories");
    }
    
    public function sub_categories()
    {
        return view("admin-awa/sub-categories");
    }
    public function Products_add()
    {
        return view("admin-awa/products-add");
    }
    public function Customer_Reviews()
    {
        return view("admin-awa/customer-reviews");
    }
   
}
