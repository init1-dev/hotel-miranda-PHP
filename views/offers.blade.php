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

            @foreach($offers as $room)
                <div class="rooms__card">
                    <div class="image--container">
                        <img src={{$room['photo']}} alt="Imagen 1">
                    </div>

                    <div class="rooms__card--info">
                        <div class="info__details">
                            <div class="info__details--name">
                                <h2 class="type">{{strtoupper($room['room_type'])}}</h2>
                                <p class="name">{{$room['name']}}</p>
                            </div>
                            <div class="price">
                                <div class="regular-price">
                                    <p class="price">${{ round($room['price'] / 100) }}</p>
                                    <p class="night">/Night</p>
                                </div>
                                <div class="offer-price">
                                    <p class="price">${{ round(($room['price'] / 100) * ( 1 - $room['discount'] / 100)) }}</p>
                                    <p class="night">/Night</p>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="info__specs">
                            <div class="info__specs--text">
                                <p class="description">{{$room['description']}}</p>
                                <div class="main__buttons">
                                    <a style="all:unset;" href="room-details.php?id={{$room['_id']}}">
                                        <button class="color">BOOK NOW</button>
                                    </a>
                                    <button class="dark">GALLERY</button>
                                </div>
                            </div>

                            <div class="info__specs--icons">
                                <ul class="list">
                                    @if(in_array('Air Conditioner', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-fan"></i>
                                            <p class="spec--text">Air conditioner </p>
                                        </li>
                                    @endif

                                    @if(in_array('Breakfast', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-utensils"></i>
                                            <p class="spec--text">Breakfast</p>
                                        </li>
                                    @endif

                                    @if(in_array('Cleaning', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-broom"></i>
                                            <p class="spec--text">Cleaning</p>
                                        </li>
                                    @endif

                                    @if(in_array('Grocery', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-basket-shopping"></i>
                                            <p class="spec--text">Grocery</p>
                                        </li>
                                    @endif

                                    @if(in_array('Shop Near', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-shop"></i>
                                            <p class="spec--text">Shop near</p>
                                        </li>
                                    @endif
                                
                                    @if(in_array('High Speed Wifi', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-wifi"></i>
                                            <p class="spec--text">Fast WiFi</p>
                                        </li>
                                    @endif
                                    
                                    @if(in_array('Kitchen', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-kitchen-set"></i>
                                            <p class="spec--text">Kitchen</p>
                                        </li>
                                    @endif
                                    
                                    @if(in_array('Shower', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-shower"></i>
                                            <p class="spec--text">Shower</p>
                                        </li>
                                    @endif

                                    @if(in_array('Single Bed', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-bed"></i>
                                            <p class="spec--text">Single bed</p>
                                        </li>
                                    @endif

                                    @if(in_array('Towels', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-toilet-paper"></i>
                                            <p class="spec--text">Towels</p>
                                        </li>
                                    @endif

                                    @if(in_array('Strong Locker', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-lock"></i>
                                            <p class="spec--text">Strong Locker</p>
                                        </li>
                                    @endif

                                    @if(in_array('Smart Security', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-key"></i>
                                            <p class="spec--text">Smart Security</p>
                                        </li>
                                    @endif

                                    @if(in_array('24/7 Online Support', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-headset"></i>
                                            <p class="spec--text">24/7 Online Support</p>
                                        </li>
                                    @endif

                                    @if(in_array('Expert Team', json_decode($room['amenities'], true)))
                                        <li class="spec">
                                            <i class="fa-solid fa-people-group"></i>
                                            <p class="spec--text">Expert Team</p>
                                        </li>
                                    @endif
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="swiper--bg">

            <div class="section-header">
                <h2 class="title">POPULAR LIST</h2>

                <p class="subtitle">Popular Rooms</p>
            </div>

            <div id="rooms-swiper-normal" class="room-swiper">
                <div class="swiper-wrapper">

                    @foreach($popular as $room)
                        <div class="swiper-slide">
                            <div class="slide-title">
                                {{-- @if(in_array('Single Bed', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-bed"></i>
                                @endif
                                @if(in_array('High Speed Wifi', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-wifi"></i>
                                @endif
                                @if(in_array('Grocery', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-car"></i>
                                @endif
                                @if(in_array('Air Conditioner', json_decode($room['amenities'], true)))
                                    <i class="fa-regular fa-snowflake"></i>
                                @endif
                                @if(in_array('Expert Team', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-dumbbell"></i>
                                @endif
                                @if(in_array('Breakfast', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-ban-smoking"></i>
                                @endif
                                @if(in_array('Shop Near', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-martini-glass-citrus"></i>
                                @endif --}}

                                @if(in_array('Air Conditioner', json_decode($room['amenities'], true)))
                                    <i class="fa-regular fa-snowflake"></i>
                                @endif

                                @if(in_array('Breakfast', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-utensils"></i>
                                @endif

                                @if(in_array('Cleaning', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-broom"></i>
                                @endif

                                @if(in_array('Grocery', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-basket-shopping"></i>
                                @endif

                                @if(in_array('Shop Near', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-shop"></i>
                                @endif
                            
                                @if(in_array('High Speed Wifi', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-wifi"></i>
                                @endif
                                
                                @if(in_array('Kitchen', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-kitchen-set"></i>
                                @endif
                                
                                @if(in_array('Shower', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-shower"></i>
                                @endif

                                @if(in_array('Single Bed', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-bed"></i>
                                @endif

                                @if(in_array('Towels', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-toilet-paper"></i>
                                @endif

                                @if(in_array('Strong Locker', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-lock"></i>
                                @endif

                                @if(in_array('Smart Security', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-key"></i>
                                @endif

                                @if(in_array('24/7 Online Support', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-headset"></i>
                                @endif

                                @if(in_array('Expert Team', json_decode($room['amenities'], true)))
                                    <i class="fa-solid fa-people-group"></i>
                                @endif
                            </div>
                            <img src={{ $room['photo'] }} alt={{'room' . $room['_id'] . "image"}}>
                            <div class="slide-info">
                                <div class="description">
                                    <h2>{{$room['name']}}</h2>
                                    <p>{{ $room['description'] }}</p>
                                </div>
                                <div class="rooms__card__info__price">
                                    <div>
                                        <h2 class="rooms__card__info__price--price">${{ round($room['price'] / 100) }}</h2>
                                        <p class="rooms__card__info__price--night">/Night</p>
                                    </div>
                                    <a style="all:unset;" href="room-details.php?id={{$room['_id']}}">
                                        <button class="rooms__card__info__price--button">Booking now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>


    </section>
@endsection