<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;

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
        // Load the Form Validation library
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'category_name' => 'required',
            'parent_category' => 'permit_empty', // Adjust validation rules as needed
            'category_image' => 'permit_empty|uploaded[category_image]|max_size[category_image,1024]',
            'description' => 'permit_empty',
        ]);

        // Set validation error messages
        $validation->setRule('category_image', 'Category Image', 'uploaded[category_image]|max_size[category_image,1024]', [
            'uploaded' => 'Please upload a valid category image.',
            'max_size' => 'The category image file size should not exceed 1 MB.'
        
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect back to the form with errors
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Validation passed, proceed to insert data into the database
        $categoryModel = new CategoryModel();

        $data = [
            'category_name' => $this->request->getPost('category_name'),
            'parent_category' => $this->request->getPost('parent_category'),
            'description' => $this->request->getPost('description'),
        ];

        // Handle file upload for category image
        $categoryImage = $this->request->getFile('category_image');
        if ($categoryImage && $categoryImage->isValid()) {
            $newName = $categoryImage->getRandomName();
            $categoryImage->move(ROOTPATH . 'public/uploads', $newName);
            $data['category_image'] = base_url('uploads/' . $newName); // Store the URL
        }

        // Insert data into the database
        $categoryModel->insert($data);

        // Set a flash message indicating success
        session()->setFlashdata('success', 'Category added successfully');

         // Redirect to the previous page or a success page
         return redirect()->to('admin-categories');


    }
}
