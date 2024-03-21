<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReviewModel;
use CodeIgniter\HTTP\ResponseInterface;
class ReviewsController extends BaseController
{

    public function viewReviewForm()
    {
       // Load the ReviewModel
       $reviewModel = new ReviewModel();

       // Fetch reviews from the database
       $reviews = $reviewModel->findAll();

       // Pass review data to the view
       $data['reviews'] = $reviews;

       // Load the view to display reviews
       return view('admin-awa/customer-reviews', $data);
    }
    public function addReview()
    {
        $request = service('request');

        // Get form data
        $customerName = $request->getPost('customer_name');
        $customerImage = $request->getFile('customer_image');
        $comment = $request->getPost('comment');
        $rating = $request->getPost('rating');
        $publishOnWebsite = $request->getPost('publish_on_website');

        // Handle image upload
        if ($customerImage->isValid() && !$customerImage->hasMoved()) {
            $newName = $customerImage->getRandomName();
            $customerImage->move(ROOTPATH . 'public/uploads/customer_images', $newName);
            $customerImagePath = 'uploads/customer_images/' . $newName;
        } else {
            $customerImagePath = ''; // or handle error
        }

        // Create a new review model instance
        $reviewModel = new ReviewModel();

        // Insert data into the database
        $data = [
            'customer_name' => $customerName,
            'customer_image' => $customerImagePath,
            'comment' => $comment,
            'rating' => $rating,
            'publish_on_website' => $this->request->getPost('publish_on_website') ? 1 : 0,
        ];

        $reviewModel->insert($data);

        // Optionally redirect to a success page or return JSON response
        return redirect()->to('/review-form');
    }

    public function delete($id)
    {
        // Load the ReviewModel
        $reviewModel = new ReviewModel();

        // Find the review by ID
        $review = $reviewModel->find($id);

        // Check if the review exists
        if ($review === null) {
            // Handle the case where the review is not found
            return redirect()->back()->with('error', 'Review not found.');
        }

        // Delete the review
        $deleted = $reviewModel->delete($id);

        // Check if the review is successfully deleted
        if ($deleted) {
            // Handle successful deletion
            return redirect()->back()->with('success', 'Review deleted successfully.');
        } else {
            // Handle deletion failure
            return redirect()->back()->with('error', 'Failed to delete review.');
        }
    }




}
