let carrinho = [];
let logado = false;
const abrircarrinho = document.getElementById("abrircarrinho");
const divcarrinho = document.getElementById("carrinho");
const listacarrinho = document.getElementById("listacarrinho");
const total = document.getElementById("total");
const contador = document.getElementById("contadorcarrinho");
if (abrircarrinho && divcarrinho) {
    abrircarrinho.addEventListener("click", (e) => {
        e.preventDefault();

        divcarrinho.style.display =
            divcarrinho.style.display === "block"
            ? "none"
            : "block";
    });
}

function adicionarcarrinho(nome, preco){

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    carrinho.push({nome, preco});

    localStorage.setItem("carrinho", JSON.stringify(carrinho));

    alert("Adicionado ao carrinho!");
}

function atualizarcarrinho(){

    if (!listacarrinho) return;

    listacarrinho.innerHTML = "";

    let soma = 0;

    carrinho.forEach((p, i) => {

        let li = document.createElement("li");

        li.innerHTML = `
            ${p.nome} - R$ ${p.preco}
            <button onclick="remover(${i})">x</button>
        `;

        listacarrinho.appendChild(li);

        soma += p.preco;
    });

    if (total) total.textContent = soma.toFixed(2);
    if (contador) contador.textContent = carrinho.length;
}

function remover(i){
    carrinho.splice(i, 1);
    atualizarcarrinho();
}
function finalizarCompra(){
    if(carrinho.length === 0){
        alert("Carrinho vazio!");
        return;
    }

    let totalCompra = carrinho.reduce((acc, p) => acc + p.preco, 0);

    alert(`Compra finalizada!\nTotal: R$ ${totalCompra.toFixed(2)}`);

    carrinho = [];
    atualizarcarrinho();
}
