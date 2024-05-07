let hovered = false;

const ajaxForm = (type, url, data, title, formElement, toast) => {
    $.ajax({
        type: type,
        url: url,
        data: data,
        success: function(_response){
            toast.fire({
                icon: "success",
                title: title
            });
            $(formElement)[0].reset();
            console.log(_response);
        },
        error: function(xhr, status, _error){
            console.error(status, xhr.statusText);
            toast.fire({
                icon: "error",
                title: `Error ${xhr.status}: ${xhr.responseText}`,
            });
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("header__menu-toggle");
    const menu = document.querySelector(".header__nav--list");
    const path = location.pathname;

    let video = document.getElementById("luxuryVideo");
    if(path === "/index.php" || path === "/about.php"){
        video.controls = false;

        $('.play-button').click(function() {
            if (video.paused) {
                video.play();
            }
        });

        $('#luxuryVideo').click(function() {
            if (video.paused) {
                video.play();
            }
        });

        video.addEventListener('play', function() {
            video.controls = true;
            $(".play-button").css("display", "none")
        });

        video.addEventListener('pause', function() {
            video.controls = false;
            $(".play-button").css("display", "block")
        });
    }

    menu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function() {
            menuToggle.checked = false;
        });
    });

    document.addEventListener("click", (event) => {
        const target = event.target;
        if (!target.closest(".header__nav") && menuToggle.checked) {
            menuToggle.checked = false;
        }
    });

    $(document).ready(function() {
        let lastScrollTop = 0;
        let navbarHeight = $('.header').outerHeight();

        const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            showCloseButton: true,
            timerProgressBar: true,
            timer: 3000,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    
        $(window).scroll(function() {
            if($(window).width() > 1000) {
                let toTop = $(this).scrollTop();
        
                if (toTop > lastScrollTop && toTop > navbarHeight) {
                    $('.header').css('transform', 'translate3d(0, -200px, 0');
                } else {
                    $('.header').css('transform', 'unset');
                }
                lastScrollTop = toTop;
            }
        });

        $(document).mousemove(function(event) {
            if($(window).width() > 1000) {
                let mouseY = event.clientY;
                if(mouseY < 200) {
                    $('.header').css('transform', 'unset');
                } else {
                    let toTop = $(window).scrollTop();
                    if(toTop > navbarHeight) {
                        $('.header').css('transform', 'translate3d(0, -200px, 0');
                    }
                }
            }
        });

        $( ".booking-form" ).on( "submit", function( event ) {
            event.preventDefault();
            const formData = $(this).serialize();

            ajaxForm(
                "POST",
                "../utils/forms/booking-form.php",
                formData,
                "Booking ordered successfully",
                '.booking-form',
                toast
            );
        });

        $( "#contact-form" ).on( "submit", function( event ) {
            event.preventDefault();
            const formData = $(this).serialize();

            ajaxForm(
                "POST", 
                "../utils/forms/contact-form.php", 
                formData, 
                "Form submitted successfully", 
                '#contact-form',
                toast
            );
        });

    });
});