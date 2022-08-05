
$('#header-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    mouseDrag:true,
    autoplay:true,
    touchDrag:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:4,
        }
    }
})


// $( document ).ready(function() {
//     $('#menu').on("click",function(){
//         $('.hide-content').toggleClass('hide');
//         console.log("hello");
//     })
// });

// const menu=document.querySelector("#menu");
// const hidecontent=document.querySelector(".hide-content");

// menu.addEventListener("click" =()=>{
//    hidecontent.classList.toggle(".hide");
//    console.log("hello");
// })
// console.log("hello");