@extends('layout')
@section('content')
    <section class="rooms__list__section rooms--grid">
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

            @foreach($rooms as $room)
                <div class="rooms__card">
                    <img src={{ $room['photo'] }} alt={{'room' . $room['_id'] . "image"}}>

                    <div class="rooms__card__icons">
                        @if(in_array('Single Bed', json_decode($room['amenities'], true)))
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
                        @endif
                    </div>

                    <div class="rooms__card__info">
                        <div class="rooms__card__info__description">
                            <h2 class="rooms__card__info__description--title">{{$room['name']}}</h2>
                            <p class="rooms__card__info__description--description">{{ $room['description'] }}</p>
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
        <div class="number-pagination">
            <ul class="number-pagination__items">
                <li class="number-pagination__items--arrow">
                    <i class="fa-solid fa-angles-left"></i>
                </li>
                <li class="number-pagination__items--number">1</li>
                <li class="number-pagination__items--number">2</li>
                <li class="number-pagination__items--number">3</li>
                <li class="number-pagination__items--number">...</li>
                <li class="number-pagination__items--number">10</li>
                <li class="number-pagination__items--arrow">
                    <i class="fa-solid fa-angles-right"></i>
                </li>
            </ul>
        </div>
    </section>
@endsection