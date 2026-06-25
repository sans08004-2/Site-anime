const carrossel = document.querySelector('.carrossell');
const fotos = Array.from(carrossel.children);
const proximo = document.getElementById('direita');
const antes = document.getElementById('esquerda');
let scroll = 0;

proximo.addEventListener('click', () => {
    scroll++;
    scroll %= fotos.length;

    updateCarousel();
});
antes.addEventListener('click', () => {
    scroll--;
    if (scroll < 0) {
        scroll = fotos.length - 1;
    }
    
    updateCarousel();
});
function updateCarousel() {
    const largura = fotos[0].getBoundingClientRect().width;
    carrossel.style.transform = `translateX(-${largura * scroll}px)`;
}
