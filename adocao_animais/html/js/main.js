// Cria uma nova instância do Swiper para o slider de miniaturas
var swiper = new Swiper(".bg-slider-thumbs", {
    // Habilita o loop contínuo, permitindo que as slides se repitam infinitamente
    loop: true,
    // Define o espaço entre as slides como 0 pixels, sem espaço entre elas
    spaceBetween: 0,
    // Define o número de slides visíveis ao mesmo tempo como 0
    // Em geral, um valor de 0 significa que apenas um slide é visível por vez, ou o ajuste é feito de acordo com o tamanho do container
    slidesPerView: 0,
});

// Cria uma nova instância do Swiper para o slider principal
var swiper2 = new Swiper(".bg-slider", {
    // Habilita o loop contínuo, permitindo que as slides se repitam infinitamente
    loop: true,
    // Define o espaço entre as slides como 0 pixels, sem espaço entre elas
    spaceBetween: 0,
    // Configura o slider principal para usar o slider de miniaturas para navegação
    thumbs: {
        // Associa o slider de miniaturas (swiper) ao slider principal (swiper2) para controle de navegação
        swiper: swiper,
    },
});
