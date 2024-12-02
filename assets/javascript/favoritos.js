// Função para carregar os cupcakes favoritos
function carregarFavoritos() {
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
    let cupcakesFavoritosContainer = document.getElementById('cupcakesFavoritos');

    if (favoritos.length === 0) {
        cupcakesFavoritosContainer.innerHTML = '<p id="aviso">Nenhum cupcake favorito.</p>';
    } else {
        cupcakesFavoritosContainer.innerHTML = favoritos.map(cupcake => `
            <div class="cardCupcake" data-sabor="${cupcake.sabor}">
                <img class="img" src="${cupcake.imagem}" alt="${cupcake.sabor}">
                <h1 class="title font">${cupcake.sabor}</h1>
                <p class="descricao">${cupcake.descricao}</p>
                <h2 class="preco font">R$${cupcake.preco}</h2>
                <div class="interacao">
                    <span class="curtir ativo" onclick="removerFavorito('${cupcake.sabor}')"></span>
                </div>
            </div>
        `).join('');
    }
}

// Função para remover cupcake dos favoritos
function removerFavorito(sabor) {
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
    favoritos = favoritos.filter(cupcake => cupcake.sabor !== sabor);
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
    carregarFavoritos();  // Atualiza a página
}

// Carrega os favoritos ao abrir a página
window.onload = carregarFavoritos;