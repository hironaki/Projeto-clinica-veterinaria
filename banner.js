const banners = document.querySelectorAll('.banner-rotativo img');
let index = 0;

function trocarBanner() {
    banners.forEach(img => img.classList.remove('mostrar'));
    banners[index].classList.add('mostrar');
    index = (index + 1) % banners.length;
}

window.addEventListener('DOMContentLoaded', () => {
    if (banners.length > 0) {
        banners[0].classList.add('mostrar');
        setInterval(trocarBanner, 4000);
    }
});
