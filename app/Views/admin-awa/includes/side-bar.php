  <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="<?= base_url('public/assets/images/logo1.png')?>" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">awa Apparels</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
          <li>
    <a href="<?= base_url('/dashboard') ?>" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
        <div class="menu-title">Dashboard</div>
    </a>
</li>

            <li>
              
           
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Ecommerce</div>
              </a>
              <ul>
              <li> <a href="<?= base_url('/admin-add-products') ?>"><i class="bi bi-circle"></i>Add New Product</a>
                </li>
                <li> <a href="<?= base_url('/products-list') ?>"><i class="bi bi-circle"></i>Products List</a>
                </li>
                <li> <a href="<?= base_url('/products-grid') ?>"><i class="bi bi-circle"></i>Products Grid</a>
                </li>
                <li> <a href="<?= base_url('/view-category') ?>"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="<?= base_url('/view-sub-categories') ?>"><i class="bi bi-circle"></i>SubCategories</a>
                </li>
                <li> <a href="<?= base_url('/customer-details') ?>"><i class="bi bi-circle"></i>Customer Details</a>
                </li>
                </li>
               
               
              
              </ul>
            </li>
           
                
            <li class="menu-label">Pages</li>
           

            
           
              
                <div class="menu-title">Settings</div>
              </a>
              <ul>
              <li> <a href="<?= base_url('review-form') ?>"><i class="bi bi-circle"></i>Add Customer Reviews</a>
                </li>
                
                </ul>
            </li>
           
            
            
             
            
          <!--end navigation-->
       </aside>
       <!--end sidebar -->
      