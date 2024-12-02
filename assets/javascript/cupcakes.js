function pesquisarCupcakes() {
    const searchInput = document.getElementById('searchInput');
    const searchTerm = searchInput.value.toLowerCase();
    const cupcakeCards = document.querySelectorAll('.cardCupcake');

    cupcakeCards.forEach(card => {
        const sabor = card.getAttribute('data-sabor').toLowerCase();

        if (sabor.startsWith(searchTerm)) {  // Verifica se o nome começa com o termo de pesquisa
            card.style.display = 'block'; // Mostra o cupcake
        } else {
            card.style.display = 'none'; // Esconde o cupcake
        }
    });
}

const urlParams = new URLSearchParams(window.location.search);
const sabor = urlParams.get('sabor');

const cupcakeData = {
    brigadeiro: {
        name: "Brigadeiro",
        img: "../imgs/cupcake-1.png",
        description: "Uma deliciosa massa de chocolate fofinha, combinada com um recheio cremoso de brigadeiro e finalizada com uma cobertura generosa do mesmo doce clássico brasileiro. Ideal para os apaixonados por sabores intensos e irresistíveis!",
        price: "R$7,50"
    },
    baunilha: {
        name: "Baunilha",
        img: "../imgs/cupcake-7.png",
        description: "Um clássico atemporal! Massa leve e macia de baunilha, recheada com um creme suave e aromático da mesma essência, finalizada com uma cobertura delicada que derrete na boca.",
        price: "R$7,50"
    },
    "frutas-vermelhas": {
        name: "Frutas Vermelhas",
        img: "../imgs/cupcake-8.png",
        description: "Uma combinação perfeita de sabores! Massa de chocolate rica e úmida, recheada com um creme de frutas vermelhas levemente azedinho e coberta com uma camada brilhante e deliciosa do mesmo sabor.",
        price: "R$9,50"
    },
    morango: {
        name: "Morango",
        img: "../imgs/cupcake-4.png",
        description: "Massa leve de baunilha que combina perfeitamente com um recheio cremoso de morango fresco. A cobertura traz o toque final, com um doce sabor de morangos para encantar o paladar. ",
        price: "R$7,50"
    },
    oreo: {
        name: "Oreo",
        img: "../imgs/cupcake-6.png",
        description: "Massa de chocolate rica e macia, recheada com um creme irresistível de Oreo e finalizada com uma cobertura cremosa que inclui pedaços crocantes do famoso biscoito.",
        price: "R$9,50"
    },
    "red-velvet": {
        name: "Red Velvet",
        img: "../imgs/cupcake-5.png",
        description: "Uma opção surpreendentemente deliciosa! A massa de beterraba traz uma textura úmida e um leve toque de doçura natural, combinada com um recheio e cobertura suaves de baunilha, criando uma harmonia única de sabores.",
        price: "R$9,50"
    },
    sensacao: {
        name: "Sensação",
        img: "../imgs/cupcake-2.png",
        description: "Uma combinação clássica e irresistível! Massa de chocolate macia, recheada com um creme de morango doce e coberta com uma camada brilhante e deliciosa do mesmo sabor.",
        price: "R$8,50"
    },
    "tutti-frutti": {
        name: "Tutti Frutti",
        img: "../imgs/cupcake-3.png",
        description: "Para os fãs de sabores coloridos e divertidos! Massa de chocolate rica e úmida, recheada com um creme alegre de tutti-frutti e coberta com uma camada vibrante que garante um toque doce e refrescante.",
        price: "R$8,50"
    }
};

if (sabor && cupcakeData[sabor]) {
    const cupcake = cupcakeData[sabor];
    document.getElementById('cupcake-name').textContent = cupcake.name;
    document.getElementById('cupcake-img').src = cupcake.img;
    document.getElementById('cupcake-description').textContent = cupcake.description;
    document.getElementById('cupcake-price').textContent = cupcake.price;
} else {
    document.getElementById('cupcake-detail').textContent = "Cupcake não encontrado!";
}

function adicionarFavorito(sabor, descricao, preco, imagem) {
    alert(`${sabor} foi adicionado aos Favoritos!`);
    // Verifica se os favoritos já existem no localStorage
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

    // Verifica se o cupcake já está nos favoritos
    const cupcakeExistente = favoritos.find(cupcake => cupcake.sabor === sabor);

    if (cupcakeExistente) {
        // Remove o cupcake dos favoritos
        favoritos = favoritos.filter(cupcake => cupcake.sabor !== sabor);
    } else {
        // Adiciona o cupcake aos favoritos
        favoritos.push({ sabor, descricao, preco, imagem });
    }

    // Atualiza o localStorage com os favoritos
    localStorage.setItem('favoritos', JSON.stringify(favoritos));

    // Atualiza a aparência do botão de curtir
    document.querySelector(`.curtir[data-sabor="${sabor}"]`).classList.toggle('ativo', !cupcakeExistente);
}
