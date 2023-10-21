<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="../sources/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="../layout/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="../layout/styles.css">

        <title>Du lịch khám phá - TommyTravel</title>
    </head>
    <body>
        <div class="dlnd">
    
            <main class="main">
                <!--==================== HOME ====================-->
                <section class="home" id="home">
                    <img src="../sources/du-lich-kham-pha.jpeg" alt="" class="home__img">
    
                    <div class="home__container container grid">
                        <div class="home__data">
                            <span class="home__data-subtitle">ADVENTURE IS WORTHWHILE</span>
                            <h1 class="home__data-title">Dicover New Places With Us<br> Best <b> Adventure Awaits<br> </b></h1>
                            <a href="#" class="button">Dicover</a>
    
                        </div>
    
                        <div class="home__social">
                            <a href="https://www.facebook.com/tuitenB/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/_2408_binh/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://twitter.com/phamvan37277461" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
    
                        <div class="home__info">
                            <div>
                                <span class="home__info-title">5 best places to visit</span>
                                <a href="" class="button button--flex button--link home__info-button">
                                    More <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
    
                            <div class="home__info-overlay">
                                <img src="../sources/Son_Doong_Cave_DB_(3).jpg" alt="" class="home__info-img">
                            </div>
                        </div>
                    </div>
                </section>
    
                <!--==================== ABOUT ====================-->
                <section class="about section" id="about">
                    <div class="about__container container grid">
                        <div class="about__data">
                            <h2 class="section__title about__title"><br>  Dicover New Places With Us Adventure Awaits</h2>
                            <p class="about__description">You can find the most beautiful and pleasant places at the best 
                                prices with special discounts, you choose the place we will guide you all the way to wait, get your 
                                place now.
                            </p>
                            <a href="#" class="button">Reserve a place</a>
                        </div>
    
                        <div class="about__img">
                            <div class="about__img-overlay">
                                <img src="../sources/pd1.jpg" alt="" class="about__img-one">
                            </div>
    
                            <div class="about__img-overlay">
                                <img src="../sources/pd2.jpg" alt="" class="about__img-two">
                            </div>
                        </div>
                    </div>
                </section>
                
                <!--==================== DISCOVER ====================-->
                <section class="discover section" id="discover">
                    <h2 class="section__title">Discover the most <br> attractive places</h2>
                    
                    <div class="discover__container container swiper-container">
                        <div class="swiper-wrapper">
                            <!--==================== DISCOVER 1 ====================-->
                            <div class="discover__card swiper-slide">
                                <img src="../sources/pisa.jpg" alt="" class="discover__img">
                                <div class="discover__data">
                                    <h2 class="discover__title">Leaning Tower of Pisa</h2>
                                    <span class="discover__description">24 tours available</span>
                                </div>
                            </div>
    
                            <!--==================== DISCOVER 2 ====================-->
                            <div class="discover__card swiper-slide">
                                <img src="../sources/eiffel.jpeg" alt="" class="discover__img">
                                <div class="discover__data">
                                    <h2 class="discover__title">Eiffel Tower</h2>
                                    <span class="discover__description">15 tours available</span>
                                </div>
                            </div>
    
                            <!--==================== DISCOVER 4 ====================-->
                            <div class="discover__card swiper-slide">
                                <img src="../sources/sd2.jpg" alt="" class="discover__img">
                                <div class="discover__data">
                                    <h2 class="discover__title">Son Doong Cave</h2>
                                    <span class="discover__description">23 tours available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <!--==================== EXPERIENCE ====================-->
                <section class="experience section">
                    <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>
    
                    <div class="experience__container container grid">
                        <div class="experience__content grid">
                            <div class="experience__data">
                                <h2 class="experience__number">20</h2>
                                <span class="experience__description">Year <br> Experience</span>
                            </div>
    
                            <div class="experience__data">
                                <h2 class="experience__number">95</h2>
                                <span class="experience__description">Complete <br> tours</span>
                            </div>
    
                            <div class="experience__data">
                                <h2 class="experience__number">777+</h2>
                                <span class="experience__description">Tourist <br> Destination</span>
                            </div>
                        </div>
    
                        <div class="experience__img grid">
                            <div class="experience__overlay">
                                <img src="../sources/tqdb.jpg" alt="" class="experience__img-one">
                            </div>
                            
                            <div class="experience__overlay">
                                <img src="../sources/pg1.webp" alt="" class="experience__img-two">
                            </div>
                        </div>
                    </div>
                </section>
    
                <!--==================== VIDEO ====================-->
                <section class="video section">
                    <h2 class="section__title">Video Tour</h2>
    
                    <div class="video__container container">
                        <p class="video__description">Find out more with our video of the most beautiful and 
                            pleasant places for you and your family.
                        </p>
    
                        <div class="video__content">
                            <video id="video-file">
                                <source src="../sources/eiffel vd.mp4" type="video/mp4">
                            </video>
    
                            <button class="button button--flex video__button" id="video-button">
                                <i class="ri-play-line video__button-icon" id="video-icon"></i>
                            </button>
                        </div>
                    </div>
                </section>
    
                <!--==================== PLACES ====================-->
                <section class="place section" id="place">
                    <h2 class="section__title">Choose Your Place</h2>
    
                    <div class="place__container container grid">
                        <!--==================== PLACES CARD 1 ====================-->
                        <div class="place__card">
                            <img src="../sources/sdd.jpeg" alt="" class="place__img">
                            
                            <div class="place__content">
                                <span class="place__rating">
                                    <i class="ri-star-line place__rating-icon"></i>
                                    <span class="place__rating-number">4,8</span>
                                </span>
    
                                <div class="place__data">
                                    <h3 class="place__title">Son Doong Cave</h3>
                                    <span class="place__subtitle">VIET NAM</span>
                                    <span class="place__price">$2499</span>
                                </div>
                            </div>
    
                            <button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
    
                        <!--==================== PLACES CARD 2 ====================-->
                        <div class="place__card">
                            <img src="../sources/p-4.jpg" alt="" class="place__img">
                            
                            <div class="place__content">
                                <span class="place__rating">
                                    <i class="ri-star-line place__rating-icon"></i>
                                    <span class="place__rating-number">5,0</span>
                                </span>
    
                                <div class="place__data">
                                    <h3 class="place__title">Eiffel Tower</h3>
                                    <span class="place__subtitle">FRANCE</span>
                                    <span class="place__price">$1599</span>
                                </div>
                            </div>
    
                            <button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
    
                        <!--==================== PLACES CARD 3 ====================-->
                        <div class="place__card">
                            <img src="../sources/vltt.jpg" alt="" class="place__img">
                            
                            <div class="place__content">
                                <span class="place__rating">
                                    <i class="ri-star-line place__rating-icon"></i>
                                    <span class="place__rating-number">4,9</span>
                                </span>
    
                                <div class="place__data">
                                    <h3 class="place__title">Great Wall</h3>
                                    <span class="place__subtitle">CHINA</span>
                                    <span class="place__price">$3499</span>
                                </div>
                            </div>
    
                            <button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
    
                        <!--==================== PLACES CARD 4 ====================-->
                        <div class="place__card">
                            <img src="../sources/eypt.jpg" alt="" class="place__img">
                            
                            <div class="place__content">
                                <span class="place__rating">
                                    <i class="ri-star-line place__rating-icon"></i>
                                    <span class="place__rating-number">4,8</span>
                                </span>
    
                                <div class="place__data">
                                    <h3 class="place__title">Eupt</h3>
                                    <span class="place__subtitle">EGYPT</span>
                                    <span class="place__price">$2499</span>
                                </div>
                            </div>
    
                            <button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
    
                        <!--==================== PLACES CARD 5 ====================-->
                        <div class="place__card">
                            <img src="../sources/thap-nghieng-pisa-5 (2).jpg" alt="" class="place__img">
                            
                            <div class="place__content">
                                <span class="place__rating">
                                    <i class="ri-star-line place__rating-icon"></i>
                                    <span class="place__rating-number">4,8</span>
                                </span>
    
                                <div class="place__data">
                                    <h3 class="place__title">Leaning Tower of Pisa</h3>
                                    <span class="place__subtitle">ITALY</span>
                                    <span class="place__price">$1999</span>
                                </div>
                            </div>
    
                            <button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </section>
    
                <!--==================== SUBSCRIBE ====================-->
                <section class="subscribe section">
                    <div class="subscribe__bg">
                        <div class="subscribe__container container">
                            <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                            <p class="subscribe__description">Subscribe to our newsletter and get a 
                                special 30% discount.
                            </p>
        
                            <form action="" class="subscribe__form">
                                <input type="text" placeholder="Enter email" class="subscribe__input">
        
                                <button class="button">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
                
                <!--==================== SPONSORS ====================-->
                <section class="sponsor section">
                    <div class="sponsor__container container grid">
                        <div class="sponsor__content">
                            <img src="../sources/sponsors1.png" alt="" class="sponsor__img">
                        </div>
                        <div class="sponsor__content">
                            <img src="../sources/sponsors2.png" alt="" class="sponsor__img">
                        </div>
                        <div class="sponsor__content">
                            <img src="../sources/sponsors3.png" alt="" class="sponsor__img">
                        </div>
                        <div class="sponsor__content">
                            <img src="../sources/sponsors4.png" alt="" class="sponsor__img">
                        </div>
                        <div class="sponsor__content">
                            <img src="../sources/sponsors5.png" alt="" class="sponsor__img">
                        </div>
                    </div>
                </section>
            </main>
    
             <!--========== SCROLL UP ==========-->
        </div>

        <!--=============== SCROLL REVEAL===============-->
        <script src="../js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="../js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../js/main_2.js"></script>
    </body>
</html>