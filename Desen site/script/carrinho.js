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
function abrirCarrinho(e){
    e.preventDefault();
    document.getElementById("modalCarrinho").style.display = "block";
}

function fecharCarrinho(){
    document.getElementById("modalCarrinho").style.display = "none";
}

window.onclick = function(event){
    let modal = document.getElementById("modalCarrinho");
    if(event.target == modal){
        modal.style.display = "none";
    }
}