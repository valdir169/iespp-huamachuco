const images = document.querySelectorAll('.img-transparencia')
const imageContainer = document.querySelector('.transparencia-img')
const imageShow = document.querySelector('.img-show')
const copy = document.querySelector('.copy')
const closeModal = document.querySelector('.bx.bx-x')

images.forEach(image => {
    image.addEventListener("click", () => {
        addImage(image.getAttribute('src'), image.getAttribute('alt'))
    })
})

const addImage = (src, alt) => {
    imageContainer.classList.toggle('move')
    imageShow.classList.toggle('show')
    imageShow.src = src;
    copy.innerHTML = alt
}

closeModal.addEventListener("click", () => {
    imageContainer.classList.toggle('move')
    imageShow.classList.toggle('show')

})