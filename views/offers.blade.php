@extends('layout')
@section('content')
    <div class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">Our Offers</p>
            </div>
        </div>
        <div class="banner__breadcrumb">
            <div class="banner__breadcrumb-inner">
                <span>
                    <a href="index.php">Home</a>
                </span><span>|</span><span>Offers</span>
            </div>
        </div>
    </div>
    <section class="offers">

        <div class="rooms_grid">

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom3.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <div class="image--container">
                    <img src="./assets/room-images/luxuryroom3.png" alt="Imagen 1">
                </div>

                <div class="rooms__card--info">
                    <div class="info__details">
                        <div class="info__details--name">
                            <h2 class="type">DOUBLE BED</h2>
                            <p class="name">Luxury Double Bed</p>
                        </div>
                        <div class="price">
                            <div class="regular-price">
                                <p class="price">$500</p>
                                <p class="night">/Night</p>
                            </div>
                            <div class="offer-price">
                                <p class="price">$345
                                <p class="night">/Night</p>
                            </div>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="info__specs">
                        <div class="info__specs--text">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="main__buttons">
                                <a style="all:unset;" href="room-details.php">
                                    <button class="color">BOOK NOW</button>
                                </a>
                                <button class="dark">GALLERY</button>
                            </div>
                        </div>

                        <div class="info__specs--icons">
                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-fan"></i>
                                    <p class="spec--text">Air conditioner </p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-utensils"></i>
                                    <p class="spec--text">Breakfast</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-broom"></i>
                                    <p class="spec--text">Cleaning</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <p class="spec--text">Grocery</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shop"></i>
                                    <p class="spec--text">Shop near</p>
                                </li>
                            </ul>

                            <ul class="list">
                                <li class="spec">
                                    <i class="fa-solid fa-wifi"></i>
                                    <p class="spec--text">Fast WiFi</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                    <p class="spec--text">Kitchen</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-shower"></i>
                                    <p class="spec--text">Shower</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-bed"></i>
                                    <p class="spec--text">Single bed</p>
                                </li>
                                <li class="spec">
                                    <i class="fa-solid fa-toilet-paper"></i>
                                    <p class="spec--text">Towels</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper--bg">

            <div class="section-header">
                <h2 class="title">POPULAR LIST</h2>

                <p class="subtitle">Popular Rooms</p>
            </div>

            <div id="rooms-swiper-normal" class="room-swiper">
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
                                <h2>Minimal Duplex Room</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="rooms__card__info__price">
                                <h2 class="rooms__card__info__price--price">$345</h2>
                                <p class="rooms__card__info__price--night">/Night</p>
                                <button class="rooms__card__info__price--button">Booking now</button>
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
                            <div class="rooms__card__info__price">
                                <h2 class="rooms__card__info__price--price">$345</h2>
                                <p class="rooms__card__info__price--night">/Night</p>
                                <button class="rooms__card__info__price--button">Booking now</button>
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
                            <div class="rooms__card__info__price">
                                <h2 class="rooms__card__info__price--price">$345</h2>
                                <p class="rooms__card__info__price--night">/Night</p>
                                <button class="rooms__card__info__price--button">Booking now</button>
                            </div>
                        </div>
                    </div>

                    ...
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>


    </section>
@endsection