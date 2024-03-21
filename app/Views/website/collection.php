<?php include 'includes/header.php'; ?>
        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="<?= base_url('public/website/img/product-hero.jpg')?>" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title">V-Beauty Pack</h1>
                </div>
            </div>
            <div class="section-product-info section-product-info--2">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-2@l" data-uk-grid>
                        <div>
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <li><img src="<?= base_url('public/website/img/blouse22.jpg')?>" alt="img-product-full"></li>
                                        <li><img src="<?= base_url('public/website/img/sarees3.jpg')?>" alt="img-product-full"></li>
                                        <li><img src="<?= base_url('public/website/img/sarees2.jpg')?>" alt="img-product-full"></li>
                                    </ul><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="section-product-info__box">
                                <div class="section-product-info__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                                    <div class="section-title section-product-info__title"><span>All-In-One Beauty pack</span>
                                        <h3>V-Beauty Pack</h3>
                                    </div>
                                    <div class="section-product-info__intro">
                                        <p>Enim venia quis nostrud exrcit ulamco laboris com reprehen derit fugiat nula pariatur sint ipsum caecat. Lorem ipsum dolor am etur adipisicing elit sed tempor.</p>
                                    </div>
                                    <div class="section-product-info__price"> <sup>$</sup><span>135.00</span></div>
                                    <div class="section-product-info__size">
                                        <ul>
                                            <li><label><input type="radio" name="size"><span>75ml</span></label></li>
                                            <li><label><input type="radio" name="size" checked><span>150ml</span></label></li>
                                            <li><label><input type="radio" name="size"><span>200ml</span></label></li>
                                        </ul>
                                    </div>
                                    <div class="section-product-info__btns">
                                        <div class="jq-number input-col">
                                            <div class="jq-number__spin minus"></div>
                                            <div class="jq-number__field"><input class="input-col" type="number" value="1" min="1"></div>
                                            <div class="jq-number__spin plus"></div>
                                        </div><button class="uk-button uk-button-danger uk-button-large" type="button">Add to bag </button>
                                    </div>
                                    <div class="section-product-info__category">Categories: Hair, Makeup, Skin Care</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="section-new-arrivals">
                <div class="uk-background-muted">
                    <div class="uk-section-large uk-container">
                        <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500"><span>Best suiting & clothing</span>
                            <h3>Related Products</h3>
                        </div>
                        <div class="section-content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-medium">
                            <div class="slider-outline" data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l">
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__box">
                                                    <div class="product-card__media" style="cursor: pointer;">
                                                        <a href="08_product-default.html"><img class="product-card__img" src="<?= base_url('public/website/img/sarees2.jpg')?>" alt="V-Beauty Pack"></a>
                                                        <div class="product-card__btns">
                                                            <ul>
                                                                <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                                <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__title"> <a href="<?= base_url('/collection')?>">V-Beauty Pack</a><span>Face Lotion</span></div>
                                                        <div class="product-card__price">$25.65</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__box">
                                                    <div class="product-card__media"> <a href="<?= base_url('/collection')?>"><img class="product-card__img" src="<?= base_url('public/website/img/sarees2.jpg')?>" alt="Anti-Aging Cream" /></a>
                                                        <div class="product-card__badge new">new</div>
                                                        <div class="product-card__btns">
                                                            <ul>
                                                                <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                                <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__title"> <a href="<?= base_url('/collection')?>">Anti-Aging Cream</a><span>Makeup</span></div>
                                                        <div class="product-card__price">$349.50</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__box">
                                                    <div class="product-card__media"> <img class="product-card__img" src="<?= base_url('public/website/img/sarees2.jpg')?>" alt="Hair Style Gel" />
                                                        <div class="product-card__btns">
                                                            <ul>
                                                                <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                                <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__title"> <a href="<?= base_url('/collection')?>">Hair Style Gel</a><span>Hair Care</span></div>
                                                        <div class="product-card__price">$90.25</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        
        <a href="https://api.whatsapp.com/send?phone=" class="whatsapp" target="_blank"><img src="<?= base_url('public/website/img/whatsapp-icon.svg')?>" alt=""></a>
        <a href="tel:+918590017631" class="phoneicon"><img src="<?= base_url('public/website/img/phone-iconn.svg')?>" alt=""></a>

        
    <?php include 'includes/footer.php';?>