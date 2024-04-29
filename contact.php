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

    <div class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">New Details</p>
            </div>
        </div>
        <div class="banner__breadcrumb">
            <div class="banner__breadcrumb-inner">
                <span>Home</span><span>|</span><span>Blog</span>
            </div>
        </div>
    </div>

    <section class="contact">

        <div class="contact__top-info">

            <div class="container">
                <p class="float-text">01</p>
                <i class="fa-solid fa-map-location-dot"></i>
                <div class="container__text">
                    <p class="title">Hotel Address</p>
                    <p class="subtitle">19/A, Cirikon City hall Tower New York, NYC</p>
                </div>
            </div>

            <div class="container">
                <p class="float-text">02</p>
                <i class="fa-solid fa-phone-volume"></i>
                <div class="container__text">
                    <p class="title">Phone Number </p>
                    <p class="subtitle">+ 97656 8675 7864 7</p>
                    <p class="subtitle">+ 876 766 8675 765 6</p>
                </div>
            </div>

            <div class="container">
                <p class="float-text">03</p>
                <i class="fa-regular fa-envelope-open"></i>
                <div class="container__text">
                    <p class="title">Email </p>
                    <p class="subtitle">info@webmail.com </p>
                    <p class="subtitle">jobs.webmail@mail.com</p>
                </div>
            </div>
        </div>

        <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/02/google-maps-2961754.jpg" alt="">

        <form action="">
            <div class="groups">
                <div class="group1">
                    <div class="name">
                        <i class="fa-solid fa-user"></i>
                        <input class="input-text" type="text" name="" id="" placeholder="Your full name">
                    </div>

                    <div class="number">
                        <i class="fa-solid fa-phone"></i>
                        <input class="input-text" type="text" name="" id="" placeholder="Add phone number">
                    </div>
                </div>

                <div class="group2">
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="input-text" type="text" name="" id="" placeholder="Enter email address">
                    </div>

                    <div class="subject">
                        <i class="fa-solid fa-file-lines"></i>
                        <input class="input-text" type="text" name="" id="" placeholder="Enter subject">
                    </div>
                </div>
            </div>

            <div class="message">
                <i class="fa-solid fa-pencil"></i>
                <textarea class="text-area" name="" id="" cols="30" rows="10" placeholder="Enter message"></textarea>
            </div>

            <button type="submit">SEND</button>
        </form>

    </section>

    <?php include_once('footer.php') ?>

</body>

</html>