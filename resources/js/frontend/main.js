$('#header-carousel').owlCarousel({
    // singleItem:true,
    loop:true,
    margin:20,
    nav:true,
    navText: [
        "<img src='images/arrow-left.png'>",
        "<img src='images/arrow-right.png'>"
        
    ],
    
    dots: true,
    mouseDrag:true,
    autoplay:false,
    touchDrag:true,
    slideSpeed:3000,
    // paginationSpeed:400,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})



$( document ).ready(function() {
    $('#menu').on("click",function(){
        $('.nav_ul').toggleClass('nav_ul-toggle');
    })
});
