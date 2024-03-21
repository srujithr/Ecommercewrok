<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class CategoryController extends Controller
{


    public function index()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('admin-awa/categories', $data);
    }
  






    public function addCategory()
    {
        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            // Get input values from the form
            $categoryName = ucwords($this->request->getPost('category_name'));
            $parentCategory = $this->request->getPost('parent_category');
            $description = ucfirst($this->request->getPost('description'));
            $image = $this->request->getFile('category_image');
            $isBanner = $this->request->getPost('is_banner');
    
            // Validation rules for the image
            $validationRules = [
                'category_name' => 'required|min_length[3]|max_length[255]',
                'category_image' => [
                    'uploaded[category_image]',
                    'mime_in[category_image,image/jpeg,image/png,image/gif]', // Add the allowed MIME types here
                    'max_size[category_image,1024]' // Adjust the maximum size as needed (in kilobytes)
                ]
                // Add validation rules for other fields here
            ];
            $categoryModel = new CategoryModel();
            $data['categories'] = $categoryModel->findAll();
            // Validate input data
            if (!$this->validate($validationRules)) {
                // If validation fails, display error messages on the form
                $data['validation'] = $this->validator;
                return view('admin-awa/categories', $data);
            }
    
            // Check if an image file was uploaded
            if ($image->isValid() && !$image->hasMoved()) {
                // Move the uploaded image to the desired folder
                $imageName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads/category_images', $imageName);
            } else {
                // If no image is uploaded or there's an error, set default image name or handle error
                $imageName = 'default.jpg';
            }
    
            // Load the CategoryModel
            $categoryModel = new CategoryModel();
    
            // Insert the new category data
            $data = [
                'category_name' => $categoryName,
                'parent_category' => $parentCategory,
                'description' => $description,
                'category_image' => $imageName,
                'is_banner' => ($isBanner == 'on') ? 1 : 0 // Convert checkbox value to integer
            ];
    
            if ($categoryModel->insert($data)) {
                // If insertion is successful, redirect to the view page with success message
                return redirect()->to(base_url('view-category'))->with('success', 'Category has been successfully added.');
            } else {
                // If insertion fails, redirect back to the form with error message
                return redirect()->back()->withInput()->with('error', 'Failed to add category. Please try again.');
            }
        }
    
        // If the request method is not POST, redirect back to the form
        return redirect()->back();
    }










    public function deleteCategory($id)
    {
        $CategoryModel = new CategoryModel();
        $deletedRecord = $CategoryModel->find($id);
    
       
    
        $deletecategory = $CategoryModel->where('id', $id)->delete();
    
        // Optionally, you can check if the delete operation was successful
        if ($deletecategory) {
    
            
            session()->setFlashdata('success', 'Category has been deleted succesfully');
            return redirect()->to('view-category');
        } else {
            // Failed
            session()->setFlashdata('error', 'Sorry! Something went wrong,Please try again');
            return redirect()->to('view-category');
        }
    
    }
    public function categoryEdit($id)
    {
       // Load the model
    $categoryModel = new CategoryModel();

    // Fetch the category details by ID
    $category = $categoryModel->find($id);

    // Fetch all categories for the dropdown
    $allCategories = $categoryModel->findAll();

    // Pass data to the view
    $data = [
        'category' => $category,
        'allCategories' => $allCategories
    ];

    // Load the view with data
    return view('admin-awa/category-edit', $data);
        
    }
    public function categoryUpdate($id)
{
    $CategoryModel = new CategoryModel();

    // Fetch the existing category data by ID
    $existingData = $CategoryModel->find($id);

    // Process the new data from the form
    $newData = [
        'category_name' => $this->request->getPost('category_name'),
        'parent_category' => $this->request->getPost('parent_category'), // Assuming you have a field named parent_category in your form
        'description' => $this->request->getPost('description'), // Assuming you have a field named description in your form
    ];

    // Perform the update operation
    if ($CategoryModel->update($id, $newData)) {
        session()->setFlashdata('success', 'Category data has been updated successfully');
        return redirect()->to(base_url('view-category'));
    } else {
        session()->setFlashdata('error', 'Sorry! Something went wrong, please try again');
        return redirect()->to(base_url('view-category'));
    }
}

public function showSubcategoryPage() {
    // Load the CategoryModel
    $categoryModel = new CategoryModel();

    // Fetch all categories
    $data['categories'] = $categoryModel->findAll();

    // Load the SubcategoryModel
    $subcategoryModel = new SubcategoryModel();

    // Fetch all subcategories with corresponding category names
    $data['subcategories'] = $subcategoryModel->select('subcategories.*, categories.category_name')
        ->join('categories', 'categories.id = subcategories.category_id')
        ->findAll();

    // Load the view and pass the data
    return view("admin-awa/sub-categories", $data);
}    
    
    public function addSubcategory()
    {
        // Initialize the validation service
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'category_id' => 'required',
            'subcategory_name' => 'required|max_length[255]',
            'description' => 'max_length[255]',
            
        ]);

        // Validate the input
if (!$validation->withRequest($this->request)->run()) {
    // Handle validation errors
    $errors = $validation->getErrors();
    return redirect()->back()->withInput()->with('validation_errors', $errors);
}

        // If validation passes, proceed to insert the data into the database
        $categoryModel = new CategoryModel();

        // Prepare data to insert into the database
        $data = [
            'category_id' => $this->request->getPost('category_id'),
            'subcategory_name' => $this->request->getPost('subcategory_name'),
            'description' => $this->request->getPost('description')
        ];

        // Insert data into the database using the provided function
        $categoryModel->insertSubcategory($data['category_id'], $data['subcategory_name'], $data['description']);

        // Redirect back to the form page with success message
        return redirect()->back()->with('success', 'Subcategory added successfully.');
    }


    public function SubcategoryDelete($sub_id)
    {
        $SubcategoryModel = new SubcategoryModel();

        // Fetch the subcategory record to display its details or perform any other operations if needed
        $deletedRecord = $SubcategoryModel->find($sub_id);

        // Delete the subcategory
        $deleteSubcategory = $SubcategoryModel->delete($sub_id);

        // Check if the delete operation was successful
        if ($deleteSubcategory) {
            // Successful deletion
            session()->setFlashdata('success', 'Subcategory has been deleted successfully.');
        } else {
            // Failed deletion
            session()->setFlashdata('error', 'Sorry! Something went wrong. Please try again.');
        }

        // Redirect back to the subcategory list page
        return redirect()->to('/view-sub-categories');
    }
    public function SubcategoryEditView($sub_id)
    {
        // Load the CategoryModel
        $categoryModel = new CategoryModel();

        // Fetch all categories
        $data['categories'] = $categoryModel->findAll();

        // Load the SubcategoryModel
        $subcategoryModel = new SubcategoryModel();

        // Fetch the details of the specific subcategory with the given $sub_id
        $data['subcategory'] = $subcategoryModel->find($sub_id);

        // If subcategory is found, fetch the category name
        if (!empty ($data['subcategory'])) {
            // Fetch the category name from the categories table based on category_id
            $category = $categoryModel->find($data['subcategory']['category_id']);
            // Add the category name to the subcategory data
            $data['subcategory']['category_name'] = $category ? $category['category_name'] : '';
        }

        // Load the view and pass the data
        return view("admin-awa/sub-category-edit", $data);
    }


    public function SubcategoryUpdate($sub_id)
    {
        // Load the SubcategoryModel
        $subcategoryModel = new SubcategoryModel();

        // Process the new data from the form
        $newData = [
            'subcategory_name' => $this->request->getPost('subcategory_name'),
            'category_id' => $this->request->getPost('category_id'),
            'description' => $this->request->getPost('description')
        ];

        // Perform the update operation
        if (!$subcategoryModel->update($sub_id, $newData)) {
            session()->setFlashdata('error', 'Failed to update subcategory.');
        } else {
            session()->setFlashdata('success', 'Subcategory data has been updated successfully.');
        }

        return redirect()->to(base_url('/view-sub-categories'));
    }



}
