<?php include('includes/header.php') ?>

<?php include('includes/top-header.php') ?>
<?php include('includes/side-bar.php') ?>



<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- Display validation error messages -->
    <?php if (session()->has('validation_errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('validation_errors') as $error): ?>
                    <li>
                        <?= esc($error) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Display flash messages -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add New Product</h5>
                </div>

                <div class="card-body">
                    <div class="border p-3 rounded">
                        <!-- Start Form -->
                        <form action="<?= base_url('/save-product') ?>" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <!-- Product Title Field -->
                                <div class="col-12">
                                    <label class="form-label">Product title</label>
                                    <input type="text" class="form-control" name="product_name"
                                        placeholder="Product title">
                                </div>
                                <div class="col-12 col-lg-4">
        <label class="form-label">SKU</label>
        <input type="text" class="form-control" name="sku" placeholder="SKU">
    </div>
    <div class="col-12 col-lg-4">
        <label class="form-label">Color</label>
        <input type="text" class="form-control" name="color" placeholder="Color">
    </div>
    <div class="col-12 col-lg-4">
        <label class="form-label">Size</label>
        <input type="text" class="form-control" name="size" placeholder="Size">
    </div>
    <div class="col-12">
        <label class="form-label">Full description</label>
        <textarea class="form-control" name="description" placeholder="Full description" rows="4" cols="4"></textarea>
    </div>
    <div class="col-12">
    <label class="form-label">Images (400x400)</label>
    <input id="imageInput" class="form-control" type="file" name="image">
</div>
<div class="col-12">
    <label class="form-label">Related Images (400x400)</label>
    <input id="relatedImagesInput" class="form-control" type="file" name="related_images[]" multiple>
</div>
<div class="col-12 col-md-6 mb-4">
    <label class="form-label">Category</label>
    <select class="form-select" name="category_id">
        <option value="">Select a category</option>
        <?php foreach ($categories as $category) : ?>
            <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>
    <div class="col-12 col-md-6 mb-4">
        <label class="form-label">Sub-category</label>
        <select class="form-select" name="subcategory_id">
            <option value="">Select a subcategory</option>
            <?php foreach ($subcategories as $subcategory) : ?>
                <option value="<?= $subcategory['sub_id'] ?>"><?= $subcategory['subcategory_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="top_seller" name="top_seller">
                <label class="form-check-label" for="top_seller">Top Seller</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="best_seller" name="best_seller">
                <label class="form-check-label" for="best_seller">Best Seller</label>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="new_arrivals" name="new_arrivals">
            <label class="form-check-label" for="new_arrivals">New Arrivals</label>
        </div>
    </div>
    <div class="col-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="top_trending" name="top_trending">
            <label class="form-check-label" for="top_trending">Top Trending</label>
        </div>
    </div>

    <div class="col-12">
        <label class="form-label">Price</label>
        <div class="row g-3">
            <div class="col-lg-9">
                <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <select class="form-select" name="qty">
                        <option> Select Qty </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="publish_website" name="publish_website">
            <label class="form-check-label" for="publish_website">Publish on website</label>
        </div>
    </div>


                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button class="btn btn-primary px-4" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>

            </div><!-- end row 

          </main>
       <!--end page main-->


            <!--start overlay-->
            <div class="overlay nav-toggle-icon"></div>
            <!--end overlay-->

            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->

            <!--start switcher-->
            <div class="switcher-body">
                <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                        class="bi bi-paint-bucket me-0"></i></button>
                <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                    data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6 class="mb-0">Theme Variation</h6>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                                value="option1">
                            <label class="form-check-label" for="LightTheme">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                                value="option2">
                            <label class="form-check-label" for="DarkTheme">Dark</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                                value="option3" checked>
                            <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                        </div>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                                value="option3">
                            <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                        </div>
                        <hr />
                        <h6 class="mb-0">Header Colors</h6>
                        <hr />
                        <div class="header-colors-indigators">
                            <div class="row row-cols-auto g-3">
                                <div class="col">
                                    <div class="indigator headercolor1" id="headercolor1"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor2" id="headercolor2"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor3" id="headercolor3"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor4" id="headercolor4"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor5" id="headercolor5"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor6" id="headercolor6"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor7" id="headercolor7"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor8" id="headercolor8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end switcher-->

        </div>
        <!--end wrapper-->


        <!-- Bootstrap bundle JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <!--app-->
        <script src="assets/js/app.js"></script>


        </body>

        </html>