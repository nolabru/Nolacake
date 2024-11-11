function pesquisarCupcakes() {
    const searchInput = document.getElementById('searchInput');
    const searchTerm = searchInput.value.toLowerCase();
    const cupcakeCards = document.querySelectorAll('.cardCupcake');

    cupcakeCards.forEach(card => {
        const sabor = card.getAttribute('data-sabor').toLowerCase();

        if (sabor.startsWith(searchTerm)) {
            card.style.visibility = 'visible';
        } else {
            card.style.visibility = 'hidden';
        }
    });
}

// Obter o parâmetro 'sabor' da URL
const urlParams = new URLSearchParams(window.location.search);
const sabor = urlParams.get('sabor');

// Dados dos cupcakes
const cupcakeData = {
    brigadeiro: {
        name: "Brigadeiro",
        img: "/assets/imgs/cupcake-1.png",
        description: "Massa de chocolate com recheio e cobertura de brigadeiro",
        price: "R$7,50"
    },
    baunilha: {
        name: "Baunilha",
        img: "/assets/imgs/cupcake-7.png",
        description: "Massa de baunilha com recheio e cobertura de baunilha",
        price: "R$7,50"
    },
    "frutas-vermelhas": {
        name: "Frutas Vermelhas",
        img: "/assets/imgs/cupcake-8.png",
        description: "Massa de chocolate com recheio e cobertura de frutas vermelhas",
        price: "R$9,50"
    },
    morango: {
        name: "Morango",
        img: "/assets/imgs/cupcake-4.png",
        description: "Massa de baunilha com recheio e cobertura de morango",
        price: "R$7,50"
    },
    oreo: {
        name: "Oreo",
        img: "/assets/imgs/cupcake-6.png",
        description: "Massa de chocolate com recheio e cobertura de oreo",
        price: "R$9,50"
    },
    "red-velvet": {
        name: "Red Velvet",
        img: "/assets/imgs/cupcake-5.png",
        description: "Massa de beterraba com recheio e cobertura de baunilha",
        price: "R$9,50"
    },
    sensacao: {
        name: "Sensação",
        img: "/assets/imgs/cupcake-2.png",
        description: "Massa de chocolate com recheio e cobertura de morango",
        price: "R$8,50"
    },
    "tutti-frutti": {
        name: "Tutti Frutti",
        img: "/assets/imgs/cupcake-3.png",
        description: "Massa de chocolate com recheio e cobertura de tutti frutti",
        price: "R$8,50"
    }
};

// Verificar se o sabor existe no objeto
if (sabor && cupcakeData[sabor]) {
    const cupcake = cupcakeData[sabor];
    document.getElementById('cupcake-name').textContent = cupcake.name;
    document.getElementById('cupcake-img').src = cupcake.img;
    document.getElementById('cupcake-description').textContent = cupcake.description;
    document.getElementById('cupcake-price').textContent = cupcake.price;
} else {
    document.getElementById('cupcake-detail').textContent = "Cupcake não encontrado!";
}
