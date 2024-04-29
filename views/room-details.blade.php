@extends('layout')
@section('content')
    <section>
        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">Ultimate Room</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href="index.php">Home</a>
                    </span>
                    <span>|</span>
                    <span>Room Details</span>
                </div>
            </div>
        </div>
    </section>
    <section class="room-details">
        <div class="room-details__room-content">
            <div class="info">
                <div class="info_container">
                    <span>
                        <h5>DOUBLE BED</h5>
                        <h2>Luxury Double Bed</h2>
                    </span>
                    <span class="price">
                        <p>$345</p>
                        <small>/night</small>
                    </span>
                </div>
                <img src="assets/room-images/luxuryroom.png" alt="">
            </div>

            <main class="main">
                <div class="main__form">
                    <form id="check-availability-form" action="">
                        <h4>Check Availability</h4>
                        <div class="input--container">
                            <p class="input--text">Check In</p>
                            <input class="input" type="date" name="arrival" id="arrival" onfocus="this.showPicker()">
                        </div>
                        <div class="input--container">
                            <p class="input--text">Check Out</p>
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
        </div>
        <div class="info-container room-description">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </p>
        </div>
        <div class="info-container amenities">
            <h4>Amenities</h4>
            <hr>
            <ul class="amenities-list">
                <li class="amenity">
                    <i class="fa-solid fa-wind"></i>
                    <p>Air conditioner </p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-mug-saucer"></i>
                    <p>Breakfast</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-broom"></i>
                    <p>Cleaning</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <p>Grocery</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p>Shop near</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-wifi"></i>
                    <p>High speed WiFi</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-fire-burner"></i>
                    <p>Kitchen</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-shower"></i>
                    <p>Shower</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-bed"></i>
                    <p>Single bed</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-toilet-paper"></i>
                    <p>Towels</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-lock"></i>
                    <p>Strong Locker</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-key"></i>
                    <p>Smart Security</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-headset"></i>
                    <p>24/7 Online Support</p>
                </li>

                <li class="amenity">
                    <i class="fa-solid fa-people-group"></i>
                    <p>Expert Team</p>
                </li>

                <!-- <li>
                    
                    <p></p>
                </li> -->
            </ul>
        </div>
        <div class="info-container graphic">
            <div class="container">
                <div class="image">
                    <span class="circle">
                        <span class="check">
                            <i>&#10003;</i>
                        </span>
                    </span>

                </div>
                <div class="name">
                    <h4>Rosalina D. William</h4>
                    <small>Founder, Qux Co.</small>
                </div>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
        </div>
        <div class="info-container cancelation">
            <h4>Cancelation</h4>
            <hr>
            <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
        </div>
        <div class="swiper--bg">

            <div class="section-header">
                <p class="subtitle">Related Rooms</p>
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