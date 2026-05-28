const aaaa = document.querySelector('.carrossell');
const fts = Array.from(aaaa.children);
const proximo = document.getElementById('direita');
const antes = document.getElementById('esquerda');
let ftsaaa = 0;
proximo.addEventListener('click', () => {
    if (ftsaaa < fts.length - 1) {
        ftsaaa++;
        updateCarousel();
    }
});
antes.addEventListener('click', () => {
    if (ftsaaa > 0) {
        ftsaaa--;
        updateCarousel();
    }
});
function updateCarousel() {
    const slideWidth = fts[0].getBoundingClientRect().width;
    aaaa.style.transform = `translateX(-${slideWidth * currentSlideIndex}px)`;
}
