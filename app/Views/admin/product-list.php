<?php include('includes/header.php') ?>

<?php include('includes/navside.php') ?>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo-pro">
          <a href="index.html"><img class="main-logo" src="img/logo/logo1.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/navtop.php') ?>
  <div class="breadcome-area">
    <div class="container-fluid">
      <div class="row" style="background-color: #ffd8d8;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcome-list single-page-breadcome">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="breadcome-heading">
                  <!-- <form role="search" class="">
                          <input
                            type="text"
                            placeholder="Search..."
                            class="form-control"
                          />
                          <a href=""><i class="fa fa-search"></i></a>
                        </form> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul class="breadcome-menu">
                  <li>
                    <a href="#">Home</a>
                    <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">Product List</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="product-status mg-tb-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
          <h4>Products List</h4>
          <div class="add-product">
            <!-- <a href="product-edit.html">Add Product</a> -->
          </div>
          <table>
            <tr>
              <th>Image</th>
              <th>Product Title</th>
              <th>Status</th>
              <th>Purchases</th>
              <th>Product sales</th>
              <th>Stock</th>
              <th>Price</th>
              <th>Setting</th>
            </tr>
            <tr>
              <td><img src="img/new-product/5-small.jpg" alt="" /></td>
              <td>Jewelery Title 1</td>
              <td>
                <button class="pd-setting">Active</button>
              </td>
              <td>50</td>
              <td>$750</td>
              <td>Out Of Stock</td>
              <td>$15</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><img src="img/new-product/6-small.jpg" alt="" /></td>
              <td>Jewelery Title 2</td>
              <td>
                <button class="ps-setting">Paused</button>
              </td>
              <td>60</td>
              <td>$1020</td>
              <td>In Stock</td>
              <td>$17</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><img src="img/new-product/7-small.jpg" alt="" /></td>
              <td>Jewelery Title 3</td>
              <td>
                <button class="ds-setting">Disabled</button>
              </td>
              <td>70</td>
              <td>$1050</td>
              <td>Low Stock</td>
              <td>$15</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><img src="img/new-product/5-small.jpg" alt="" /></td>
              <td>Jewelery Title 4</td>
              <td>
                <button class="pd-setting">Active</button>
              </td>
              <td>120</td>
              <td>$1440</td>
              <td>In Stock</td>
              <td>$12</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><img src="img/new-product/6-small.jpg" alt="" /></td>
              <td>Jewelery Title 5</td>
              <td>
                <button class="pd-setting">Active</button>
              </td>
              <td>30</td>
              <td>$540</td>
              <td>Out Of Stock</td>
              <td>$18</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td><img src="img/new-product/7-small.jpg" alt="" /></td>
              <td>Jewelery Title 6</td>
              <td>
                <button class="ps-setting">Paused</button>
              </td>
              <td>400</td>
              <td>$4000</td>
              <td>In Stock</td>
              <td>$10</td>
              <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
          </table>
          <div class="custom-pagination">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="data-table-area mg-tb-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline13-list">
          <div class="sparkline13-hd">
            <div class="main-sparkline13-hd">
              <h1>Products <span class="table-project-n">Listing</span></h1>
            </div>
          </div>
          <div class="sparkline13-graph">
            <div class="datatable-dashv1-list custom-datatable-overright">
              <div id="toolbar">
                <select class="form-control">
                  <option value="">Export Basic</option>
                  <option value="all">Export All</option>
                  <option value="selected">Export Selected</option>
                </select>
              </div>
              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="id">ID</th>
                    <th data-field="name" data-editable="true">Product Title</th>
                    <th data-field="company" data-editable="true">Stock</th>
                    <th data-field="price" data-editable="true">Price</th>
                    <th data-field="date" data-editable="true">Date</th>
                    <th data-field="task" data-editable="true">Status</th>
                    <th data-field="email" data-editable="true">Total Sales</th>
                    <th data-field="action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>1</td>
                    <td>Product Title</td>
                    <td>Out Of Stock</td>
                    <td>$54</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>2</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>3</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>4</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>5</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>6</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>7</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>8</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>9</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>10</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>11</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>12</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>14</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>15</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>16</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>17</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>18</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>19</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>20</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>21</td>
                    <td>Product Title</td>
                    <td>In Of Stock</td>
                    <td>$5</td>
                    <td>Jul 14, 2017</td>
                    <td>Active</td>
                    <td>$700</td>
                    <td>
                      <button data-toggle="tooltip" data-placement="top" title="Edit" class="pd-setting-ed">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </button>
                      <button data-toggle="tooltip" data-placement="top" title="Trash" class="pd-setting-ed">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
</div>

<?php include('includes/script.php') ?>