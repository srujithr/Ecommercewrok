<?php include 'includes/header.php';?>
        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="<?= base_url('public/website/img/shop-hero-default.jpg')?>" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title">Our Shop</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-3-4@m">
                            <div class="filter-head">
                                <div>SHOWING 1–6 OF 7 RESULTS</div>
                                <div> <select class="js-select right">
                                        
                                        <option value="Sort By Price: Low to High">Sort By Price: Low to High</option>
                                        <option value="Sort By Price: High to Low">Sort By Price: High to Low</option>
                                    </select></div>
                            </div>
                            <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                            <!-- Loop through each product -->
                            <?php foreach ($westernWearProducts as $product): ?>
                                <div class="product-card product-card--2">
                                    <div class="product-card__box">
                                        <div class="product-card__media">
                                            <img class="product-card__img" src="<?= base_url('public/uploads/product_images/' . $product['image']) ?>" alt="<?= $product['product_name'] ?>" />
                                            <div class="product-card__btns">
                                                <ul>
                                                    <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                    <li><a href="#"><span>Zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                    <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__title">
                                                <a href="#"><?= $product['product_name'] ?></a>
                                                <span><?= $product['description'] ?></span>
                                            </div>
                                            <div class="product-card__price">$<?= $product['price'] ?></div>
                                            <!-- Assuming you want to display star icons for product rating -->
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            </div>
                            <ul class="uk-pagination uk-flex-center uk-margin-large-top">
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-4@m">
                            <aside class="sidebar">
                                <div class="widjet widjet-search">
                                    <h4 class="widjet__title">Find a Product</h4>
                                    <form class="uk-search uk-search-default" action="#!"><button class="uk-search-icon-flip" data-uk-search-icon type="submit"></button><input class="uk-input uk-search-input uk-form-large" type="search" placeholder="Search ..."></form>
                                </div>
                                <div class="widjet widjet-category">
                                    <h4 class="widjet__title">Filter By Price</h4>
                                    <div class="range-box"><input class="js-range-slider" id="range-price" type="text" name="price" value="">
                                        <div class="range-box__desc"> <span>Price: $</span><input id="range-price-from" type="text"><span>-</span><input id="range-price-to" type="text"></div>
                                        <div class="range-box__btn">filter price</div>
                                    </div>
                                </div>
                                <div class="widjet widjet-category">
                                    <h4 class="widjet__title">Categories</h4>
                                    <ul class="list-category">
                                        <li> <a href="04_blog-main.html"><span>Fashion Clothing</span><span>(45)</span></a></li>
                                        <li class="uk-active"><a href="04_blog-main.html"><span>Watches</span><span>(9)</span></a></li>
                                        <li> <a href="04_blog-main.html"><span>Bags</span><span>(128)</span></a></li>
                                        <li> <a href="04_blog-main.html"><span>Jewellery</span><span>(67)</span></a></li>
                                        <li> <a href="04_blog-main.html"><span>Home Furnishings</span><span>(42)</span></a></li>
                                    </ul>
                                </div>
                                <div class="widjet widjet-tags-cloud">
                                    <h4 class="widjet__title">Product Tags</h4>
                                    <ul class="tags-list">
                                        <li><a href="#!">Fashion Clothing</a></li>
                                        <li> <a href="#!">Watches</a></li>
                                        <li><a href="#!">Bags</a></li>
                                        <li><a href="#!">Jewellery</a></li>
                                        <li> <a href="#!">Home Furnishings</a></li>
                                       
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>




        <a href="https://api.whatsapp.com/send?phone=" class="whatsapp" target="_blank"><img src="<?= base_url('public/website/img/whatsapp-icon.svg')?>" alt=""></a>
        <a href="tel:+918590017631" class="phoneicon"><img src="<?= base_url('public/website/img/phone-iconn.svg')?>" alt=""></a>

    <?php include 'includes/footer.php';?>