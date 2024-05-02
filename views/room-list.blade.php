@extends('layout')
@section('content')
    <section class="rooms__list__section rooms--list">
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
                    </span><span>|</span><span>Rooms</span>
                </div>
            </div>
        </div>

        <div class="rooms_grid">
            <p class="counter"><i></i>Found <b>{{ count($rooms) }}</b> rooms available between <b>{{ date_format(new DateTime($arrival), 'd/m/Y')}}</b> and <b>{{ date_format(new DateTime($departure), 'd/m/Y')}}</b></p>

            {{--  --}}

            <div class="swiper pagination-swiper">
                <div class="swiper-wrapper">
                    @foreach($rooms as $room)
                        <div class="swiper-slide">
                            <div class="rooms__card">
                                <img src={{ $room['photo'] }} alt={{'room' . $room['_id'] . "image"}}>

                                <div class="rooms__card__icons">

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

                                <div class="rooms__card__info">
                                    <div class="rooms__card__info__description">
                                        <h2 class="rooms__card__info__description--title">Room {{$room['room_number'] . " " . $room['room_type']}}</h2>
                                        <p class="rooms__card__info__description--description">{{ $room['description'] }}</p>
                                    </div>
                                    <div class="rooms__card__info__price">
                                        <div>
                                            <h2 class="rooms__card__info__price--price">${{ round($room['price'] / 100) }}</h2>
                                            <p class="rooms__card__info__price--night">/Night</p>
                                        </div>
                                        <a 
                                            style="all:unset;" 
                                            href="room-details.php?id={{$room['_id']}}&check_in={{$arrival}}&check_out={{$departure}}"
                                        >
                                            <button class="rooms__card__info__price--button">Booking now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination"></div>

            {{--  --}}

        </div>
    </section>
@endsection