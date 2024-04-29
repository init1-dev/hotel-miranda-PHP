<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Miranda</title>
    <link rel="icon" type="image/png" href="./assets/h.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script type="module" src="./js/main.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
</head>

<body>

    <?php include_once('header.php') ?>

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
                    <span>Home</span><span>|</span><span>Rooms</span>
                </div>
            </div>
        </div>

        <div class="rooms_grid">

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rooms__card">
                <img src="./assets/room-images/luxuryroom2.png" alt="Imagen 1">

                <div class="rooms__card__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>

                <div class="rooms__card__info">
                    <div class="rooms__card__info__description">
                        <h2 class="rooms__card__info__description--title">Minimal Duplex Room</h2>
                        <p class="rooms__card__info__description--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="rooms__card__info__price">
                        <div>
                            <h2 class="rooms__card__info__price--price">$345</h2>
                            <p class="rooms__card__info__price--night">/Night</p>
                        </div>
                        <a href="room-details.php">
                            <button class="rooms__card__info__price--button">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>

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

    <?php include_once('footer.php') ?>

</body>

</html>