var gallery = new Swiper(".myGallery", {
    slidesPerView: 1,
    spaceBetween: 50,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        976: {
            slidesPerView: 3,
        }
    }
});