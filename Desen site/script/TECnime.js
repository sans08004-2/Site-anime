const carrossel = document.querySelector('.carrossell');
const fotos = document.querySelectorAll('.carrosselll');
const proximo = document.getElementById('direita');
const antes = document.getElementById('esquerda');
let scroll = 0;
function updateCarousel() {
    const largura = fotos[0].clientWidth;
    carrossel.style.transform = `translateX(-${largura * scroll}px)`;
}
function proximaImagem() {
    scroll++;
    if (scroll >= fotos.length) {
        scroll = 0;
    }
    updateCarousel();
}
proximo.addEventListener('click', proximaImagem);
antes.addEventListener('click', () => {
    scroll--;
    if (scroll < 0) {
        scroll = fotos.length - 1;
    }
    updateCarousel();
});
