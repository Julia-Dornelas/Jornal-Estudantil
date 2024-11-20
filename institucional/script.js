// Função para rolar para a esquerda nos containers de ícones
function scrollLeftIcons() {
    const container = document.getElementById('icons-container');
    if (container) {
        container.scrollBy({
            left: -200, // Valor de rolagem ajustado para rolar para a esquerda
            behavior: 'smooth'
        });
    }
}

// Função para rolar para a direita nos containers de ícones
function scrollRightIcons() {
    const container = document.getElementById('icons-container');
    if (container) {
        container.scrollBy({
            left: 200, // Valor de rolagem ajustado para rolar para a direita
            behavior: 'smooth'
        });
    }
}

// Função para rolar para a esquerda no container de vídeos
function scrollLeft() {
    const container = document.getElementById('videos-container');
    if (container) {
        container.scrollBy({
            left: -400, // Valor de rolagem ajustado para rolar para a esquerda
            behavior: 'smooth'
        });
    }
}

// Função para rolar para a direita no container de vídeos
function scrollRight() {
    const container = document.getElementById('videos-container');
    if (container) {
        container.scrollBy({
            left: 200, // Valor de rolagem ajustado para rolar para a direita
            behavior: 'smooth'
        });
    }
}


// Ativar eventos de rolagem suave nas setas de navegação para ícones e vídeos
document.addEventListener('DOMContentLoaded', function() {
    // Adiciona eventos de clique para as setas de ícones
    const leftArrowIcons = document.querySelector('.seta-esquerda');
    const rightArrowIcons = document.querySelector('.seta-direita');
    
    leftArrowIcons.addEventListener('click', scrollLeftIcons);
    rightArrowIcons.addEventListener('click', scrollRightIcons);

    // Adiciona eventos de clique para as setas de vídeos
    const leftArrowVideos = document.querySelector('.seta-esquerda-videos');
    const rightArrowVideos = document.querySelector('.seta-direita-videos');

    leftArrowVideos.addEventListener('click', scrollLeftVideos);
    rightArrowVideos.addEventListener('click', scrollRightVideos);
});
