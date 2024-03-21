<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;


class ProductController extends BaseController
{
    public function addProductForm()
{
    // Fetch categories from the database
    $categoryModel = new CategoryModel();
    $data['categories'] = $categoryModel->findAll();

    // Fetch subcategories from the database
    $subcategoryModel = new SubcategoryModel();
    $data['subcategories'] = $subcategoryModel->findAll();

    // Load the view with the data
    return view('admin-awa/products-add', $data); // Assuming the view file is named 'products-add.php'
}

public function saveProduct()
{
   // Load validation library
$validation = \Config\Services::validation();

// Define validation rules
$rules = [
    'product_name' => 'required',
    'sku' => 'required',
    'color' => 'required',
    'size' => 'required',
    'description' => 'required',
    'category_id' => 'required',
    'subcategory_id' => 'required',
    'image' => [
        'uploaded[image]',
        // 'mime_in[image,image/jpeg,image/png,image/gif,image/jpg]',
        'max_size[image,2048]', // Maximum size in kilobytes (2 MB)
        'is_image[image]', // Ensure uploaded file is an image
    ],
    'related_images' => [
        'uploaded[related_images]',
        // 'mime_in[related_images,image/jpeg,image/png,image/gif,image/jpg]',
        'max_size[related_images,2098]',
        'is_image[related_images]', // Ensure uploaded file is an image
    ],
    'price' => 'required|numeric', // Validation rule for the price field
];

// Set validation rules
$validation->setRules($rules);

// Validate the input
if (!$validation->withRequest($this->request)->run()) {
    // Handle validation errors
    $errors = $validation->getErrors();
    return redirect()->back()->withInput()->with('validation_errors', $errors);
}

// If validation passes, proceed to insert data into the database
$productModel = new ProductModel();

// Upload and move the product image
$productImagePath = 'uploads/product_images/';
$productImage = $this->request->getFile('image');
$productImageName = $productImage->getName(); // Get the original name
$productImage->move(ROOTPATH . 'public/' . $productImagePath, $productImageName);

// Upload and move the related images
$relatedImagePath = 'uploads/related_images/';
$relatedImages = $this->request->getFileMultiple('related_images');
$relatedImageNames = [];
foreach ($relatedImages as $relatedImage) {
    if ($relatedImage->isValid() && !$relatedImage->hasMoved()) {
        $relatedImageName = $relatedImage->getName(); // Get the original name
        $relatedImage->move(ROOTPATH . 'public/' . $relatedImagePath, $relatedImageName);
        $relatedImageNames[] = $relatedImageName; // Save only the filename
    }
}

// Prepare data for insertion
$data = [
    'product_name' => $this->request->getPost('product_name'),
    'sku' => $this->request->getPost('sku'),
    'color' => $this->request->getPost('color'),
    'size' => $this->request->getPost('size'),
    'description' => $this->request->getPost('description'),
    'category_id' => $this->request->getPost('category_id'),
    'subcategory_id' => $this->request->getPost('subcategory_id'),
    'image' => $productImageName, // Save only the filename
    'related_images' => json_encode($relatedImageNames), // Save only the filenames as JSON array
    'price' => $this->request->getPost('price'), // Retrieve the price from the form
    'top_seller' => $this->request->getPost('top_seller') ? 1 : 0,
    'best_seller' => $this->request->getPost('best_seller') ? 1 : 0,
    'new_arrivals' => $this->request->getPost('new_arrivals') ? 1 : 0,
    'top_trending' => $this->request->getPost('top_trending') ? 1 : 0,
    'publish_website' => $this->request->getPost('publish_website') ? 1 : 0,
    // Add more fields here based on your form
];

// Insert data into the database
if ($productModel->insert($data)) {
    // Data inserted successfully
    session()->setFlashdata('success', 'Product has been added successfully.');
} else {
    // Failed to insert data
    session()->setFlashdata('error', 'Failed to save product data.');
}

return redirect()->to('products-list');

}




public function ProductEditForm($product_id)
{

    $CategoryModel = new CategoryModel();
        $SubcategoryModel = new SubcategoryModel();
    
        // Fetch category and subcategory data
        $data['categories'] = $CategoryModel->findAll(); // Fetch all categories
        $data['subcategories'] = $SubcategoryModel->findAll();
    // Load the ProductModel
    $productModel = new ProductModel();

    // Fetch the product data based on the ID
    $product = $productModel->find($product_id);

    // Check if the product exists
    if ($product === null) {
        // Product not found, redirect or display an error
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Load other required models and data if needed

    // Pass the product data to the view
    $data['product'] = $product;
    return view('admin-awa/products-edit', $data);
}
    
public function ProductUpdate($product_id)
{
    // Load the ProductModel
    $productModel = new ProductModel();

    // Fetch the product data based on the ID
    $product = $productModel->find($product_id);

    // Check if the product exists
    if ($product === null) {
        // Product not found, redirect or display an error
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Load validation library
    $validation = \Config\Services::validation();

    // Set validation rules
    $rules = [
        'product_name' => 'required',
        'sku' => 'required',
        'color' => 'required',
        'size' => 'required',
        'description' => 'required',
        'price' => 'required|numeric'
        // Add validation rules for other fields here
    ];

    // Validate the input
    if (!$this->validate($rules)) {
        // Handle validation errors
        $errors = $validation->getErrors();
        return redirect()->back()->withInput()->with('validation_errors', $errors);
    } else {
        // Get product image file
        $productImage = $this->request->getFile('image');

        // Check if a new product image has been uploaded
        if ($productImage !== null && $productImage->isValid()) {
            // Delete the old product image from the server if exists
            if (file_exists(ROOTPATH . 'public/uploads/product_images/' . $product['image'])) {
                unlink(ROOTPATH . 'public/uploads/product_images/' . $product['image']);
            }

            // Move the new product image to the upload directory
            $productImageName = $productImage->getRandomName(); // Generate a unique name
            $productImage->move(ROOTPATH . 'public/uploads/product_images', $productImageName);

            // Update the product image name in the database
            $data['image'] = $productImageName;
        }

        // Get related image files
        $relatedImages = $this->request->getFileMultiple('related_images');

        // Check if new related images have been uploaded
        if (!empty($relatedImages)) {
            // Initialize an array to store the names of the uploaded related images
            $uploadedRelatedImages = [];

            // Loop through each related image
            foreach ($relatedImages as $relatedImage) {
                // Check if the related image is valid
                if ($relatedImage->isValid()) {
                    // Generate a unique name for the related image
                    $relatedImageName = $relatedImage->getRandomName(); // Generate a unique name

                    // Move the new related image to the upload directory
                    $relatedImage->move(ROOTPATH . 'public/uploads/related_images', $relatedImageName);

                    // Add the name of the uploaded related image to the array
                    $uploadedRelatedImages[] = $relatedImageName;
                }
            }

            // Update the related image names in the database
            $data['related_images'] = implode(',', $uploadedRelatedImages);
        }

        // Update the product details
        $data['product_name'] = $this->request->getPost('product_name');
        $data['sku'] = $this->request->getPost('sku');
        $data['color'] = $this->request->getPost('color');
        $data['size'] = $this->request->getPost('size');
        $data['description'] = $this->request->getPost('description');
        $data['price'] = $this->request->getPost('price');
        // Add other fields here

        // Update the top trending and publish on website values
        $data['top_seller'] = $this->request->getPost('top_seller') ? 1 : 0;
        $data['best_seller'] = $this->request->getPost('best_seller') ? 1 : 0;
        $data['new_arrivals'] = $this->request->getPost('new_arrivals') ? 1 : 0;
        $data['top_trending'] = $this->request->getPost('top_trending') ? 1 : 0;
        $data['publish_on_website'] = $this->request->getPost('publish_on_website') ? 1 : 0;

        // Update the product in the database
        $updated = $productModel->update($product_id, $data);

        // Redirect based on success or failure
        if ($updated) {
            // Product updated successfully
            session()->setFlashdata('success', 'Product updated successfully.');
            return redirect()->to('/products-list');
        } else {
            // Failed to update product
            return redirect()->back()->with('error', 'Failed to update product.');
        }
    }
}
public function productList()
    {
        // Load the ProductModel
        $productModel = new ProductModel();
    
        // Fetch products from the database
        $products = $productModel->findAll();
    
        // Load the CategoryModel
        $categoryModel = new CategoryModel();
    
        // Load the SubcategoryModel
        $subcategoryModel = new SubcategoryModel();
    
        
    
        // Pass the modified product data to the view
        //$data['products'] = $products;
    
        // Load the view with product data
        return view('admin-awa/products-list', ['products' => $products]); // Adjust the path as per your directory structure
    }
    
public function productListGridView()
{
    // Load the ProductModel
    $productModel = new ProductModel();

    // Fetch products from the database
    $products = $productModel->findAll();

    if ($products === null) {
        // Handle the case where no products are found
        return redirect()->back()->with('error', 'No products found.');
    }

    // Load the CategoryModel
    $categoryModel = new CategoryModel();

    // Load the SubcategoryModel
    $subcategoryModel = new SubcategoryModel();

    // Iterate through each product to fetch category and subcategory names
    foreach ($products as &$product) {
        // Fetch category name using category_id
        $category = $categoryModel->find($product['category_id']);
        // Fetch subcategory name using subcategory_id
        $subcategory = $subcategoryModel->find($product['subcategory_id']);

        // Set category name and subcategory name in the product array
        $product['category_name'] = !empty($category) ? $category['category_name'] : 'N/A';
        $product['subcategory_name'] = !empty($subcategory) ? $subcategory['subcategory_name'] : 'N/A';
    }

    // Pass the modified product data to the view
    $data['products'] = $products;

    // Load the view with product data
    return view('admin-awa/products-grid', $data); // Adjust the path as per your directory structure
}

public function CustomerDetails()
{
   
    return view('admin-awa/customer_detail'); 
}
    

}