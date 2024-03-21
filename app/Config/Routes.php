<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->setDefaultController('SiteController');
$routes->setDefaultMethod('index');

// Website Routes
$routes->get('/', 'SiteController::index_home');
$routes->get('/fashion', 'SiteController::fashion');
$routes->get('/watches', 'SiteController::watches');
$routes->get('/Bags', 'SiteController::Bags');
$routes->get('/Jewellery', 'SiteController::Jewellery');
$routes->get('/Duppatta', 'SiteController::Duppatta');
$routes->get('/Salwar', 'SiteController::Salwar');
$routes->get('/WesternWear', 'SiteController::WesternWear');

$routes->get('/bottomwear', 'SiteController::bottomwear');
$routes->get('/Blouse', 'SiteController::Blouse');
$routes->get('/Furnishings', 'SiteController::Furnishings');
$routes->get('/shopby', 'SiteController::shopby');
$routes->get('/contact', 'SiteController::contact');
$routes->get('/About', 'SiteController::About');
$routes->get('/collection', 'SiteController::collection');
$routes->get('/login', 'SiteController::login');





// Admin login routes-----
$routes->match(['get', 'post'], '/signin', 'LoginController::signinPage', ['filter' => 'noauth']);
$routes->match(['get', 'post'], '/signup', 'LoginController::signupPage');
$routes->match(['get', 'post'], '/logout', 'LoginController::logout');
$routes->match(['get', 'post'], '/changepassword', 'LoginController::change_password');





//Admin Dashboard Pages

$routes->match(['get', 'post'], '/admin-signin', 'AdminDashController::signin');
$routes->match(['get', 'post'], '/admin-signup', 'AdminDashController::signup');
//$routes->get('/admin-dash', 'AdminDashController::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'AdminDashController::index', ['filter' => 'auth']);

$routes->get('/admin-categories', 'AdminDashController::categories');
$routes->get('/admin-sub-categories', 'AdminDashController::sub_categories');
//$routes->get('/admin-add-products', 'AdminDashController::Products_add');
$routes->get('/admin-user-profile', 'AdminDashController::user_profile');
//$routes->get('/customer-reviews', 'AdminDashController::Customer_Reviews');

//Category routes------
$routes->get('/view-category', 'CategoryController::index', ['filter' => 'auth']);
$routes->post('/add-category', 'CategoryController::addCategory', ['filter' => 'auth']);
$routes->get('delete-category/(:num)', 'CategoryController::deleteCategory/$1');
$routes->get('edit-category/(:any)', 'CategoryController::categoryEdit/$1', ['filter' => 'auth']);

$routes->post('/update-category/(:num)', 'CategoryController::categoryUpdate/$1', ['filter' => 'auth']);

//SubCategory routes------
$routes->get('/view-sub-categories', 'CategoryController::showSubcategoryPage');
$routes->post('/add-sub-category', 'CategoryController::addSubcategory', ['filter' => 'auth']);
$routes->get('SubcategoryDelete/(:num)', 'CategoryController::SubcategoryDelete/$1');
$routes->get('SubcategoryEditView/(:any)', 'CategoryController::SubcategoryEditView/$1', ['filter' => 'auth']);
$routes->post('SubcategoryUpdate/(:num)', 'CategoryController::SubcategoryUpdate/$1', ['filter' => 'auth']);


//product routes---------
$routes->get('/admin-add-products', 'ProductController::addProductForm', ['filter' => 'auth']);
$routes->post('/save-product', 'ProductController::saveProduct', ['filter' => 'auth']);
$routes->get('/products-list', 'ProductController::productList', ['filter' => 'auth']);
$routes->get('/delete-product/(:num)', 'ProductController::deleteProduct/$1', ['filter' => 'auth']);
$routes->get('ProductEdit/(:any)', 'ProductController::ProductEditForm/$1', ['filter' => 'auth']);
$routes->post('ProductUpdate/(:num)', 'ProductController::ProductUpdate/$1', ['filter' => 'auth']);
//$routes->get('view-product/(:num)', 'ProductController::viewProduct/$1');
$routes->get('/products-grid', 'ProductController::productListGridView', ['filter' => 'auth']);
$routes->get('/customer-details', 'ProductController::CustomerDetails', ['filter' => 'auth']);


//review Controller--------
$routes->get('review-form', 'ReviewsController::viewReviewForm', ['filter' => 'auth']);
$routes->post('add-review', 'ReviewsController::addReview', ['filter' => 'auth']);
$routes->get('delete-review/(:num)', 'ReviewsController::delete/$1');

