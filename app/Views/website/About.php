<?php include 'includes/header.php'; ?>

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img  src="<?= base_url('public/website/img/hero-hero.jpg')?>" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">About Us</h1>
                </div>
            </div>
            <div class="section-about">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <div class="section-about__media _anim">
                                <div class="img-animate _anim _anim-no-repeat"><img src="<?= base_url('public/website/img/img-about.jpg')?>" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="section-about__desc" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                                <div class="section-title"><span>viasun cosmetics</span>
                                    <h3>Making Every Face Perfect</h3>
                                </div>
                                <div class="section-content">
                                    <p>Enim venia quis nostrud exrcit ulamco laboris nst aliquip com conseq reprehen derit fugiat nula pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet, consect etur adipisicing elit sed do eiusmod tempor.</p><a class="uk-button uk-button-danger uk-button-large" href="02_shop.html">view collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
           
         
            <div class="section-video">
                <div class="section-video__bg" data-uk-lightbox><a class="section-video__link" href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube"> <img src="assets/img/home-video.jpg" alt="video">
                        <div class="cursor"> </div>
                    </a></div>
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
        </main>


        

        <a href="https://api.whatsapp.com/send?phone=" class="whatsapp" target="_blank"><img src="<?= base_url('public/website/img/whatsapp-icon.svg')?>" alt=""></a>
        <a href="tel:+918590017631" class="phoneicon"><img src="<?= base_url('public/website/img/phone-iconn.svg')?>" alt=""></a>


    <?php include 'includes/footer.php'; ?>
