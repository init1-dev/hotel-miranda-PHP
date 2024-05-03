@extends('layout')
@section('title', 'About Hotel Miranda')
@section('content')
    <section class="about__section">

        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">About Us</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href="index.php">Home</a>
                    </span><span>|</span><span>About</span>
                </div>
            </div>
        </div>

        <div class="video-container">
            <video id="luxuryVideo" class="luxuryPlace__video" controls>
                <source src="./assets/video/Explore Palm Desert and stay at Hotel Paseo.mp4" type="video/mp4">
            </video>
            <div class="play-button"></div>
        </div>

        <div class="text__container">
            <p>
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </p>
        </div>

        <div class="squares__container">
            <div class="squares__container__square">
                <img src="./assets/breakfast.png" alt="">
                <h5>BREAKFAST</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/airport.png" alt="">
                <h5>AIRPORT PICKUP</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/guide.png" alt="">
                <h5>CITY GUIDE</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/bbq.png" alt="">
                <h5>BBQ PARTY</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/luxyry.png" alt="">
                <h5>LUXURY ROOM</h5>
            </div>
        </div>

        <div class="restaurant">
            <img class="restaurant__img" src="./assets/food/comida2.png" alt="">
            <div class="restaurant__content">
                <small>RESTAURANT</small>
                <h3>Get Restaurant Facilities & Many Other More</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <div class="main__buttons">
                    <a 
                        href="https://www.ujamaaresort.org/wp-content/uploads/2018/01/Ujamaa-restaurant-menu.pdf"
                        target="_blank" rel="nofollow noopener noreferrer"
                    >
                        <button class="color">TAKE A LOOK</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="coreFeatures" class="coreFeatures black-features">
            <div id="coreFeatures-swipper-black" class="swiper swiper-black">
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
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="counter">
            <small>COUNTER</small>
            <h3>Some Fun Facts</h3>
            <div class="counter__facts">
                <div class="fact">
                    <img class="fact__img" src="./assets/fact1.png" alt="">
                    <div class="fact__content">
                        <h2>8K</h2>
                        <small>Happy Users</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>

                <div class="fact">
                    <img class="fact__img" src="./assets/fact2.png" alt="">
                    <div class="fact__content">
                        <h2>10M</h2>
                        <small>Reviews & Appriciate</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>

                <div class="fact">
                    <img class="fact__img" src="./assets/fact3.png" alt="">
                    <div class="fact__content">
                        <h2>100</h2>
                        <small>Country Coverage</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>
            </div>

            <div class="counter__swiper">
                <div id="counter-swipper" class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="./assets/room-images/luxuryroom.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="./assets/room-images/luxuryroom.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>
@endsection