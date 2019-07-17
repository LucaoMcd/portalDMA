import owlCarousel from "../libs/owl.carousel.min.js"

export default function Carousel() {
    console.log('carousel')
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            margin: 10,
            responsiveClass: true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    loop:true
                },
                600:{
                    items:2,
                    nav:true,
                    loop:true
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true
                }
            }
        });
    });   
}