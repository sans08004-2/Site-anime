let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
function atualizar(){
    let lista = document.getElementById("listaCarrinhoSite");
    let total = document.getElementById("totalSite");
    lista.innerHTML = "";
    let soma = 0;
    carrinho.forEach((p, i) => {
        let li = document.createElement("li");
        li.innerHTML = `
            ${p.nome} - R$ ${p.preco}
            <button onclick="remover(${i})">X</button>
        `;
        lista.appendChild(li);
        soma += p.preco;
    });
    total.innerText = soma.toFixed(2);
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
}
function remover(i){
    carrinho.splice(i, 1);
    atualizar();
}
function finalizarCompra(){
    if(carrinho.length === 0){
        alert("Carrinho vazio");
        return;
    }
    let total = carrinho.reduce((a,b)=> a + b.preco, 0);
    alert("Compra finalizada! Total: R$ " + total.toFixed(2));
    carrinho = [];
    atualizar();
}
atualizar();
