document.addEventListener('DOMContentLoaded', function () {
    // O código JavaScript será executado após o carregamento completo do DOM
    window.adicionarAoCarrinho = function(nomeProduto, precoProduto) {
        const produtoExistente = carrinhoItens.find(item => item.nome === nomeProduto);
    
        if (produtoExistente) {
            produtoExistente.quantidade++;
            produtoExistente.precoTotal = produtoExistente.quantidade * precoProduto;
        } else {
            carrinhoItens.push({ nome: nomeProduto, preco: precoProduto, quantidade: 1, precoTotal: precoProduto });
        }
        atualizarCarrinho();
    };

    window.removerDoCarrinho = function(index) {
        carrinhoItens.splice(index, 1);
        atualizarCarrinho();
    };

const carrinhoItens = [];
const carrinho = document.getElementById('carrinho');
const botaoFecharCarrinho = document.getElementById('fechar-carrinho');
const contadorCarrinho = document.getElementById('contador-carrinho');

document.getElementById('cart-icon').addEventListener('click', () => {
    carrinho.style.display = (carrinho.style.display === 'block') ? 'none' : 'block';
});

botaoFecharCarrinho.addEventListener('click', () => {
    carrinho.style.display = 'none';
});

function atualizarContador() {
    let totalItens = 0;

    for (const item of carrinhoItens) {
        totalItens += item.quantidade;
    }

    contadorCarrinho.textContent = totalItens;
}


function atualizarCarrinho() {
    const carrinhoLista = document.getElementById('carrinho-itens');

    if (carrinhoLista) {
        carrinhoLista.innerHTML = '';

        let total = 0;
        let totalItens = 0;

        carrinhoItens.forEach((item, index) => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `${item.nome} - Quantidade: ${item.quantidade}, Preço Unitário: R$ ${item.preco}, Preço Total: R$ ${item.precoTotal} <button onclick="removerDoCarrinho(${index})">Remover</button>`;
            carrinhoLista.appendChild(listItem);
            total += item.precoTotal;
            totalItens += item.quantidade;
        });

        const totalElement = document.createElement('li');
        totalElement.innerHTML = `<strong>Total:</strong> R$ ${total} (${totalItens} itens)`;
        carrinhoLista.appendChild(totalElement);

        atualizarContador();
    }
}

    // Chame a função atualizarContador uma vez para configurar o contador inicial
    atualizarContador();
});
