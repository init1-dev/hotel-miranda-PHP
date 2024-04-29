@extends('layout')
@section('content')
    <main id="main" class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                <p class="main__upper--text">EXPERIENCE</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">The Perfect</p>
                <p class="main__middle--text">Base For You</p>
            </div>

            <div class="main__buttons">
                <button class="color">TAKE A TOUR</button>
                <button class="dark">LEARN MORE</button>
            </div>
        </div>

        <div class="main__form">
            <form id="check-availability-form" action="">
                <div class="input--container">
                    <p class="input--text">Arrival Date</p>
                    <input class="input" type="date" name="arrival" id="arrival" onfocus="this.showPicker()">
                </div>
                <div class="input--container">
                    <p class="input--text">Departure Date</p>
                    <input class="input" type="date" name="departure" id="departure" onfocus="this.showPicker()">
                </div>
                <a href="room-list.php">
                    <button class="submit" type="button">
                        CHECK AVAILABILITY
                    </button>
                </a>
            </form>
        </div>
    </main>
    <section class="about-us">
        <div class="about-us__background"></div>
        <div class="about-us__inner --max-width">
            <section class="about-us__info">
                <p class="about-us__informative-text upper__case">ABOUT US</p>
                <div class="about-us__background-inner">
                    <p class="about-us__title">Discover Our Underground.</p>
                    <p class="about-us__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat.
                    </p>
                    <a href="rooms-grid.php" style="all: unset;">
                        <button class="about-us__button upper__case" style="cursor: pointer;">
                            BOOK NOW
                        </button>
                    </a>
                </div>
            </section>
            <section class="about-us__features">
                <img class="about-us__features-img" src="./assets/employees.png" alt="">
                <div class="about-us__features-feature">
                    <img class="about-us__features-feature-img" src="./assets/team.png" alt="personas">
                    <img class="bg-img" src="./assets/teambg.png" alt="">
                    <p class="about-us__features-feature-title">Strong Team</p>
                    <p class="about-us__features-feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
                <img class="about-us__features-img luxury" src="./assets/room-images/luxuryroom.png" alt="">
                <div class="about-us__features-feature about-us__features-feature--dark">
                    <img class="about-us__features-feature-img" src="./assets/luxury.png" alt="calendario">
                    <p class="about-us__features-feature-title about-us__features-feature-title--dark">Luxury Room</p>
                    <p class="about-us__features-feature-text about-us__features-feature-text--dark">Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
            </section>
        </div>
    </section>
    <section id="rooms" class="rooms">

        <div class="title">
            <p>ROOMS</p>
            <h2>Hand Picked Rooms</h2>
        </div>

        <div id="rooms-swiper" class="room-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-title">
                        <div class="slide-title--group">
                            <i class="fa-solid fa-bed"></i>
                            <i class="fa-solid fa-wifi"></i>
                            <i class="fa-solid fa-car"></i>
                            <i class="fa-regular fa-snowflake"></i>
                            <i class="fa-solid fa-dumbbell"></i>
                            <i class="fa-solid fa-ban-smoking"></i>
                            <i class="fa-solid fa-martini-glass-citrus"></i>
                        </div>
                    </div>
                    <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">
                    <div class="slide-info">
                        <div class="description">
                            <h2>DUMMY</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="price">
                            <h2>$345</h2>
                            <p>/Night</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-title">
                        <div class="slide-title--group">
                            <i class="fa-solid fa-bed"></i>
                            <i class="fa-solid fa-wifi"></i>
                            <i class="fa-solid fa-car"></i>
                            <i class="fa-regular fa-snowflake"></i>
                            <i class="fa-solid fa-dumbbell"></i>
                            <i class="fa-solid fa-ban-smoking"></i>
                            <i class="fa-solid fa-martini-glass-citrus"></i>
                        </div>
                    </div>
                    <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">
                    <div class="slide-info">
                        <div class="description">
                            <h2>Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="price">
                            <h2>$345</h2>
                            <p>/Night</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-title">
                        <div class="slide-title--group">
                            <i class="fa-solid fa-bed"></i>
                            <i class="fa-solid fa-wifi"></i>
                            <i class="fa-solid fa-car"></i>
                            <i class="fa-regular fa-snowflake"></i>
                            <i class="fa-solid fa-dumbbell"></i>
                            <i class="fa-solid fa-ban-smoking"></i>
                            <i class="fa-solid fa-martini-glass-citrus"></i>
                        </div>
                    </div>
                    <img src="./assets/room-images/luxuryroom.png" alt="Imagen 1">
                    <div class="slide-info">
                        <div class="description">
                            <h2>Luxury Double Bed</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="price">
                            <h2>$525</h2>
                            <p>/Night</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-title">
                        <div class="slide-title--group">
                            <i class="fa-solid fa-bed"></i>
                            <i class="fa-solid fa-wifi"></i>
                            <i class="fa-solid fa-car"></i>
                            <i class="fa-regular fa-snowflake"></i>
                            <i class="fa-solid fa-dumbbell"></i>
                            <i class="fa-solid fa-ban-smoking"></i>
                            <i class="fa-solid fa-martini-glass-citrus"></i>
                        </div>
                    </div>
                    <img src="./assets/room-images/luxuryroom3.png" alt="Imagen 1">
                    <div class="slide-info">
                        <div class="description">
                            <h2>Luxury Premium</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="price">
                            <h2>$775</h2>
                            <p>/Night</p>
                        </div>
                    </div>
                </div>
                ...
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>
    <section id="luxuryPlace" class="luxuryPlace">
        <div class="luxuryPlace__text">
            <p class="p">INTRO VIDEO</p>
            <h2 class="h2">Meet With Our Luxury Place.</h2>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <a href="rooms-grid.php" style="all: unset;">
                <button class="color">BOOK NOW</button>
            </a>
        </div>
        <div class="video-container">
            <video id="luxuryVideo" class="luxuryPlace__video" controls>
                <source src="./assets/video/Explore Palm Desert and stay at Hotel Paseo.mp4" type="video/mp4">
            </video>
            <div class="play-button"></div>
        </div>
    </section>
    <section id="coreFeatures" class="coreFeatures">
        <div id="coreFeatures-swipper" class="swiper">
            <div class="swipper-title">
                <p class="coreFeatures--title">FACILITIES</p>
                <p class="bigText">Core Features</p>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature1.png" alt="">
                            <p class="float">01</p>
                            <div>
                                <p class="swipper--title">Have High Rating</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature2.png" alt="">
                            <p class="float">02</p>
                            <div>
                                <p class="swipper--title">Quiet Hours</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature3.png" alt="">
                            <p class="float">03</p>
                            <div>
                                <p class="swipper--title">Best Locations</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature4.png" alt="">
                            <p class="float">04</p>
                            <div>
                                <p class="swipper--title">Free Cancellation</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature5.png" alt="">
                            <p class="float">05</p>
                            <div>
                                <p class="swipper--title">Payment Options</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="coreFeatures-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/features/feature6.png" alt="">
                            <p class="float">06</p>
                            <div>
                                <p class="swipper--title">Special Offers</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ... -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="ourFoods" class="ourFoods">
        <img class="cookie" src="./assets/cookie.png" alt="">

        <div id="menu-swipper" class="swiper">
            <div class="swipper-title">
                <p class="menu">MENU</p>
                <p class="bigText">Our Foods Menu</p>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida1.png" alt="">
                            <div>
                                <p class="swipper--title">Eggs & Bacon</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida2.png" alt="">
                            <div>
                                <p class="swipper--title">Tea or Coffee</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida3.png" alt="">
                            <div>
                                <p class="swipper--title">Chia Oatmeal</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/food/fruit1.png" alt="">
                            <div>
                                <p class="swipper--title">Fruit Parfait</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/fruit2.png" alt="">
                            <div>
                                <p class="swipper--title">Marmalade Selection</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/fruit3.png" alt="">
                            <div>
                                <p class="swipper--title">Cheese Plate</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida1.png" alt="">
                            <div>
                                <p class="swipper--title">Eggs & Bacon</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida2.png" alt="">
                            <div>
                                <p class="swipper--title">Tea or Coffee</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="./assets/food/comida3.png" alt="">
                            <div>
                                <p class="swipper--title">Chia Oatmeal</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>
                ...
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div id="images-swipper" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./assets/food/comida1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/food/comida2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/food/comida3.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/food/fruit1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/food/fruit2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/food/fruit3.png" alt="">
                </div>
                ...
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <section id="features" class="features">
        <div class="features__container">
            <div class="feature">
                <img class="feature__image" src="./assets/rocket.png" alt="feature rocket">
                <h1 class="feature__title">84k<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Projects are Completed</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/people.png" alt="feature people">
                <h1 class="feature__title">10M<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Active Backers Around World</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/raise.png" alt="feature raise">
                <h1 class="feature__title">02k<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Categories Served</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/book.png" alt="feature book">
                <h1 class="feature__title">100M<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Idea Raised Funds</p>
            </div>
        </div>
    </section>
@endsection