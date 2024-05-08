let hovered = false;

const ajaxForm = (type, url, data) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: type,
            url: url,
            data: data,
            dataType: "json",
            success: function(response){
                if(response.success){
                    resolve("success");
                }
            },
            error: function(xhr, status, _error){
                console.error(status, xhr.responseJSON.message);
                reject(xhr.responseJSON.message);
            }
        });
    });
};

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("header__menu-toggle");
    const menu = document.querySelector(".header__nav--list");
    const path = location.pathname;

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
            icon: "success",
            position: "center",
            showConfirmButton: false,
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
                formData
            ).then((_result) => {
                $("#arrival").css("border-color", "green");
                $("#departure").css("border-color", "green");
                window.location.href = "index.php?booking=success";
            }).catch(error => {
                $("#arrival").css("border-color", "red");
                $("#departure").css("border-color", "red");
                toast.fire({
                    icon: "error",
                    html: `<h3>${error}</h3>`
                });
            })
        });

        $( "#contact-form" ).on( "submit", function( event ) {
            event.preventDefault();
            const formData = $(this).serialize();

            ajaxForm(
                "POST", 
                "../utils/forms/contact-form.php", 
                formData
            ).then(_result => {
                toast.fire({
                    title: "Form submitted successfully"
                });
                $(this).reset;
            }).catch(error => {
                toast.fire({
                    icon: "error",
                    html: `<h3>${error}</h3>`
                });
            })
        });

    });
});