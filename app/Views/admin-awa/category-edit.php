<?php include('includes/header.php') ?>

<?php include('includes/top-header.php') ?>
<?php include('includes/side-bar.php') ?>

<body>


  

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
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                  </ol>
                </nav>
              </div>
              
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <h6 class="mb-0">Add Product Category</h6>
                </div>
                <div class="card-body">
                   <div class="row">
                     <div class="col-12 col-lg-4 d-flex">
                       <div class="card border shadow-none w-100">
                         <div class="card-body">
                         <?php if (session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= session('success') ?>
    </div>
<?php endif; ?>

                         <form action="<?= base_url('update-category/' . $category['id']) ?>" method="POST">
    <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $category['category_name'] ?>" required>
    </div>
   <div class="col-12">
    <label class="form-label" for="parent_category">Parent Category</label>
    <select class="form-select" id="parent_category" name="parent_category">
        <option value="" selected>Select parent category</option>
        <?php foreach ($allCategories as $cat): ?>
            <?php $selected = ($cat['parent_category'] == $category['parent_category']) ? 'selected' : ''; ?>
            <option value="<?= $cat['parent_category'] ?>" <?= $selected ?>><?= $cat['parent_category'] ?></option>
        <?php endforeach; ?>
        <!-- Predefined options -->
        <option value="Fashion">Fashion</option>
        <option value="Jewelry">Jewelry</option>
        <option value="Bags">Bags</option>
        <option value="Watches">Watches</option>
        <option value="Furnishing">Furnishing</option>
    </select>
</div>


    <div class="mb-3">
        <label for="category_image" class="form-label">Category Image</label>
        <input type="file" class="form-control" id="category_image" name="category_image">
        <!-- Display the current category image for reference -->
        <img src="<?= base_url('public/uploads/category_images/' . $category['category_image']) ?>" alt="Category Image" width="100">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"><?= $category['description'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
</div>
                       </div>
                     </div>
                     <div class="col-12 col-lg-8 d-flex">
                      <div class="card border shadow-none w-100">
                        <div class="card-body">
                          <div class="table-responsive">
                          <table class="table align-middle">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allCategories as $category): ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['category_name'] ?></td>
                <td><?= $category['description'] ?></td>
                <td><?= $category['parent_category'] ?></td>
                <td>
                    <div class="d-flex align-items-center gap-3 fs-6">
                       
                        <a href="<?= base_url('edit-category/' . $category['id']) ?>" ><i class="bi bi-pencil-fill"></i></a>
                        <a href="<?= base_url('delete-category/' . $category['id']) ?>"
                                        onclick="return confirm('Are you sure you want to delete this record?\nId: <?= $category['id'] ?>')"
                                        class="ml-2" title="Delete">    <i class="bi bi-trash-fill"></i>
                      </a>

                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

                          </div>
                          <nav class="float-end mt-0" aria-label="Page navigation">
                            <ul class="pagination">
                              <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>
                   </div><!--end row-->
                </div>
              </div>

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
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3" checked>
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
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
  <script>
  $(document).ready(function() {
    // Event listener for delete link
    $('.delete-category').on('click', function() {
        // Get the category ID from data attribute
        var categoryId = $(this).data('id');

        // Confirm deletion with user
        if (confirm('Are you sure you want to delete this category?')) {
            // Send AJAX request to delete category
            $.ajax({
                url: 'delete-category/' + categoryId, // Update the URL with your controller method
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Category deleted successfully
                        alert('Category deleted successfully');
                        // Optionally, remove the category from the UI
                        // $(this).closest('.category-item').remove();
                        location.reload(); // Reload the page to reflect changes
                    } else {
                        // Error deleting category
                        alert('Error deleting category');
                    }
                },
                error: function() {
                    // Error handling
                    alert('Error deleting category');
                }
            });
        }
    });
});

</script>
</body>

</html>