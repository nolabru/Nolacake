document.addEventListener('DOMContentLoaded', () => {
    const itensCarrinho = document.getElementById('itensCarrinho');
    const totalPreco = document.getElementById('totalPreco');

    // Carrega os itens do carrinho a partir do localStorage
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

    // Função para atualizar a exibição do carrinho
    function atualizarCarrinho() {
        itensCarrinho.innerHTML = ''; // Limpa os itens exibidos
        let total = 0;

        if (carrinho.length === 0) {
            itensCarrinho.innerHTML = '<p>Seu carrinho está vazio.</p>';
        } else {
            carrinho.forEach((item, index) => {
                const itemHTML = `
                    <div class="itemCarrinho">
                        <img src="${item.imagem}" alt="${item.sabor}" class="imagemItemCarrinho">
                        <div class="detalhesItemCarrinho">
                            <h3>${item.sabor}</h3>
                            <p id="preco">R$${item.preco}</p>
                            <p>
                                <button class="btnQuantidade" data-index="${index}" data-operacao="diminuir">-</button>
                                ${item.quantidade}
                                <button class="btnQuantidade" data-index="${index}" data-operacao="aumentar">+</button>
                            </p>
                            <button class="removerItem" data-index="${index}"></button>
                        </div>
                    </div>
                `;
                itensCarrinho.insertAdjacentHTML('beforeend', itemHTML);
                total += item.preco * item.quantidade;
            });
        }

        totalPreco.textContent = total;
    }

    // Função para remover um item do carrinho
    function removerItem(index) {
        carrinho.splice(index, 1); // Remove o item do array
        localStorage.setItem('carrinho', JSON.stringify(carrinho)); // Atualiza o localStorage
        atualizarCarrinho();
    }

    // Função para alterar a quantidade de um item
    function alterarQuantidade(index, operacao) {
        if (operacao === 'aumentar') {
            carrinho[index].quantidade += 1;
        } else if (operacao === 'diminuir' && carrinho[index].quantidade > 1) {
            carrinho[index].quantidade -= 1;
        }
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
        atualizarCarrinho();
    }

    // Evento para lidar com cliques em botões de ação
    itensCarrinho.addEventListener('click', (event) => {
        const btn = event.target;
        const index = btn.getAttribute('data-index');

        if (btn.classList.contains('removerItem')) {
            removerItem(index);
        } else if (btn.classList.contains('btnQuantidade')) {
            const operacao = btn.getAttribute('data-operacao');
            alterarQuantidade(index, operacao);
        }
    });

    // Atualiza a exibição ao carregar a página
    atualizarCarrinho();
});
