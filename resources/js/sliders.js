import 'slick-carousel'
import $ from "jquery";
import 'slick-carousel/slick/slick.scss';

document.addEventListener("DOMContentLoaded", () => {
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: false,
        autoplaySpeed: 3000,
        autoplay: false,
        adaptiveHeight: true
    });

    $('.about-pictures-slider').slick({
        slidesToShow: 3,
        arrows: true,
        prevArrow: $('.about-team .prev'),
        nextArrow: $('.about-team .next'),
        fade: false,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });

    $('.logo-pictures-slider').slick({
        slidesToShow: 3,
        arrows: true,
        prevArrow: $('.logo-gallery .prev'),
        nextArrow: $('.logo-gallery .next'),
        fade: false,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });
})
