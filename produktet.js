$('.buy').click(function(){
  $('.bottom').addClass("clicked");
});

$('.remove').click(function(){
  $('.bottom').removeClass("clicked");
});

 var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });