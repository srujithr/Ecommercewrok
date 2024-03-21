<?php include 'includes/header.php'; ?>


        <div class="section-slider" style="margin-top: 20px;">
            <div class="slider-first-screen">
                <div class="swiper-container" style=" opacity:0.75;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="section-slider-item">
                                <img src="<?= base_url('public/website/img/saeeri.jpg')?>"  alt="slider-slide">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="section-slider-item">
                                <img src="<?= base_url('public/website/img/young-woman-beautiful-yellow-dress.jpg')?>"  style="opacity: 1;">
                                    <div class="containers">
                                        <span class="text1">awa</span>
                                        <span class="text2">
                                          Apparels
                                        </span>
                                      </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="section-slider-item">
                      
                                <img src="<?= base_url('public/website/img/closeup-shot-female-wearing-beautiful-silver-necklace-with-diamond-pendant.jpg')?>" alt="slider-slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<style>
    .no-underline {
    text-decoration: none;
}
</style>

<style>
    
/* banner text style  starting */
.containers {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
}

.containers span {
    text-transform: uppercase;
    display: block;
}

.text1 {
    font-size: 60px; /* Adjust font size for mobile and tablet */
    font-weight: 800;
    letter-spacing: 6px; /* Adjust letter spacing for mobile and tablet */
    margin-bottom: 0;
    color: rgb(255, 255, 255);
}

.text2 {
    font-size: 24px; /* Adjust font size for mobile and tablet */
    color: #000000;
}



@keyframes text {
    0% {
      color: black;
      margin-bottom: -40px;
    }
    30% {
      letter-spacing: 25px;
      margin-bottom: -40px;
    }
    85% {
      letter-spacing: 8px;
      margin-bottom: -40px;
    }
    100% {
      margin-bottom: 20px;
    }
  }


@media (max-width: 768px) { /* Adjust styles for tablet devices */
    .text1 {
        font-size: 40px;
        letter-spacing: 4px;
    }
    
    .text2 {
        font-size: 18px;
    }
}

@media (max-width: 576px) { /* Adjust styles for mobile devices */
    .text1 {
        font-size: 30px;
        letter-spacing: 2px;
    }
    
    .text2 {
        font-size: 14px;
    }
}
</style>

<div class="section-about">
    <div class="uk-section-large uk-container">
        <div class="uk-grid uk-child-width-1-2@m" data-uk-grid>
            <div>
                <div class="section-about__media _anim">
                    <div class="img-animate _anim _anim-no-repeat">
                        <img src="<?= base_url('public/website/img/img-about.jpg')?>" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="section-about__desc" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                    <div class="section-title">
                        <span>viasun cosmetics</span>
                        <h3>Our Story</h3>
                    </div>
                    <div class="section-content"> 
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a class="uk-button uk-button-danger uk-button-large no-underline" href="02_shop.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- 
        <div class="section-tab-product margin-top-70" style="text-align: center;">
                <div class="kt-tabs kt-tab-fadeeffect home-tab" id="portfolio-flters">
                    <div class="tab-head" id="portfolio-flters">
                        <ul class="nav-tab" id="portfolio-flters">
                            <li class="active " id="portfolio-flters">
                                <a data-animated="fadeInUp" data-toggle="tab"  data-filter=".first"  class="hvr-underline-from-left"  onclick="filterImages('.first')">SAREES</a>
                            </li> 
                            <li>
                                <a data-animated="slideInLeft" data-toggle="tab"  data-filter=".second"  class="hvr-underline-from-left" onclick="filterImages('.second')">BLOUSE </a>
                            </li>
                            <li>
                                <a data-animated="slideInLeft" data-toggle="tab"   data-filter=".third" class="hvr-underline-from-left" onclick="filterImages('.third')">DUPATTA</a>
                            </li>
                            <li>
                                <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">SALWAR </a>
                            </li>
                            <li>
                                <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">WESTERN WEAP </a>
                            </li>
                            <li>
                                <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">BOTTOM WEARS</a>
                            </li>
                           <br style="margin-top: 10px;">
                           <li>
                            <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">JEWALLARY</a>
                        </li>
                        <li>
                            <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">BAGS</a>
                        </li>
                        <li>
                            <a data-animated="slideInLeft" data-toggle="tab" class="hvr-underline-from-left">WATCHES</a>
                        </li>
                        <li>
                            <a data-animated="slideInLeft" data-toggle="tab"  class="hvr-underline-from-left">HOME FURNISHINGS</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div> -->



     <style>
        .btn-hover:hover {
    background-color: 	#989e8b;
    color: #893f04;
        }

    .portfolio-image {
    height: 100px;
    }
    </style>


    <style>
.product-card__btns {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.product-card__btns ul {
    margin: 0;
    padding: 0;
}

.product-card__btns ul li {
    list-style: none;
    margin-right: 10px; /* Adjust as needed */
}

    </style>



 <!-- Portfolio Start -->
        <div class="container-fluid pt-5 pb-3" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"></h1>
                    <h1 class="position-absolute text-uppercase text-primary"></h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-sm m-1" data-filter="*" onclick="filterImages('*')">All</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".first" onclick="filterImages('.first')" style="font-size: 20px;">SAREES</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".second" onclick="filterImages('.second')" style="font-size: 20px;">BLOUSE</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".third" onclick="filterImages('.third')" style="font-size: 20px;">DUPPATTA</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".forth" onclick="filterImages('.forth')" style="font-size: 20px;">SALWAR</li>
                            <br>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".fifth" onclick="filterImages('.fifth')" style="font-size: 20px;">WESTERN WEAR</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".zero" onclick="filterImages('.zero')" style="font-size: 20px;">BOTTOM WEARS</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".sixth" onclick="filterImages('.sixth')" style="font-size: 20px;">JEWELRY</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".sevanth" onclick="filterImages('.sevanth')" style="font-size: 20px;">BAGS</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".eight" onclick="filterImages('.eight')" style="font-size: 20px;">WATCHES</li>
                            <li class="btn btn-sm m-1 btn-hover" data-filter=".nine" onclick="filterImages('.nine')" style="font-size: 20px;">HOME FURNISHINGS</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="section-title"
                data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300"><span>Best
                    suiting & clothing</span>
                <h3>Shop New Arrivals</h3>
            </div>
            <div class="row portfolio-container">
                <?php foreach ($newArrivals as $product) : ?>
                <div class="col-lg-3 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid w-100" src="<?= base_url('public/uploads/product_images/' . $product['image']) ?>" alt="" id="portfolio-image-1">


                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?= base_url('public/website/img/' . $product['image']) ?>" data-lightbox="portfolio" style="text-decoration: none;">
                                <h2 class="woocommerce-loop-product__title" style="list-style: none; padding: 0.5em 0; margin: 0; font-size: 1em; color: black;"><?= $product['product_name'] ?></h2>
                                <span class="woocommerce-Price-amount amount" style="color: black; font-weight: 700;">
                                    <bdi>
                                        <span class="woocommerce-Price-currencySymbol" style="color: black;"></span>
                                        <?= $product['price'] ?>
                                    </bdi>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <button class="btn" style="width: 50%; margin-left: 0%; background-color: #893f04; color: white;">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
       


        <div class="section-video">
                <div class="section-video__bg" data-uk-lightbox><a class="section-video__link" href="https://youtu.be/IUYs3mYgEPI')" data-attrs="width: 1280; height: 720;" data-caption="YouTube"> <img src="<?= base_url('public/website/img/home-video.jpg')?>" alt="video">
                        <div class="cursor"> </div>
                    </a></div>
            </div>

        
        <div class="section-info">
            <div class="uk-section-large uk-container uk-container-large">
                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                    <div>
                        <div class="section-info__desc"
                            data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                            <div class="section-title"><span>makeup spotlights</span>
                                <h3>Our Special Care<br> Cosmetic Products</h3>
                            </div>
                            <div class="section-content">
                                <p>Enim venia quis nostrud exrcit ulamco laboris nst aliquip conseq reprehen derit
                                    fugiat nula pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet
                                    sed consectetur.</p><a class="uk-button uk-button-danger uk-button-large"
                                    href="02_shop.html">Read more </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="section-info__slider">
                            <div class="slider-info">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="<?= base_url('public/website/img/DSC00400_400x.jpg')?>"
                                                alt="slider-info"></div>
                                        <div class="swiper-slide"><img src="<?= base_url('public/website/img/DSC00013_400x.jpg')?>"
                                                alt="slider-info"></div>
                                        <div class="swiper-slide"><img src="<?= base_url('public/website/img/sarees2.jpg')?>"
                                                alt="slider-info"></div>
                                        <div class="swiper-slide"><img src="<?= base_url('public/website/img/sarees3.jpg')?>"
                                                alt="slider-info"></div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url('public/website/img/banner1.jpg')?>" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="title" style="color: black;">SWEET & SAVORY</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        fugiat nulla pariatur.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6" style="margin-top: 10px;">
                    <h3 class="title" style="margin-top: 10px; color: black;">SWEET & SAVORY</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        fugiat nulla pariatur.</p>

                </div>
                <div class="col-md-6">
                    <img src="<?= base_url('public/website/img/banner2.jpg')?>" alt="">
                </div>

            </div>
        </div>


        <div class="section-reviews">
            <div class="uk-section-large uk-container">
                <div data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                    <div class="section-reviews__title">What Customers Saying</div>
                    <div class="uk-position-relative" tabindex="-1" data-uk-slider>
                        <ul class="uk-slider-items uk-grid uk-child-width-1-1">
                            <li>
                                <blockquote>
                                    <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                </blockquote>
                            </li>
                        </ul>
                        <div class="uk-visible@m"><a class="uk-position-center-left" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-center-right" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                        <div class="uk-hidden@m">
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <a href="https://api.whatsapp.com/send?phone=" class="whatsapp" target="_blank"><img
                src="<?= base_url('public/website/img/whatsapp-icon.svg')?>" alt=""></a>
        <a href="tel:+918590017631" class="phoneicon"><img src="<?= base_url('public/website/img/phone-iconn.svg')?>" alt=""></a>

    <?php include 'includes/footer.php'; ?>