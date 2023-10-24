var brigadas = new Swiper(".myBrigadas", {
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 15,  
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,  
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 10,  
        },250: {
            slidesPerView: 1,
            spaceBetween: 0,  
        }
    }
  });
