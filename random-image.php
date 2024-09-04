<?php
    // Lista de URLs de imagens
    $images = [
        'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia16043/caracteristicas-cavalos-saudaveis-artigos-cursos-cpt.jpg',
        'https://s1.static.brasilescola.uol.com.br/be/conteudo/images/cavalo.jpg',
        'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia25135/cavalo-pelagem-cpt.jpg',
        'https://super.abril.com.br/wp-content/uploads/2022/07/SI_441_ORCL_potencia_site.jpg?quality=90&strip=info&w=720&h=440&crop=1',
        'https://blog.7mboots.com.br/wp-content/uploads/2020/06/the-black-horse-of-the-frisian-breed-walks-in-the-P77UURU_Easy-Resize.com_.jpg',
        'https://static.wikia.nocookie.net/mundo-animal/images/a/a1/Cavalos-selvagens-cavlos.jpg/revision/latest?cb=20140328222555&path-prefix=pt',
        'https://vedovatipisos.com.br/wp-content/uploads/2016/10/4.jpg',
        'https://www.petz.com.br/blog/wp-content/uploads/2022/06/por-que-cavalo-usa-ferradura-2.jpg',
        'https://files.agro20.com.br/uploads/2019/09/cavalo-3-1024x576.jpg',
        'https://framerusercontent.com/images/hJdquuZWHdjptkuBFuSnd4snRLs.jpg',
        'https://fazendadaroseta.com.br/wp-content/uploads/2021/02/cavalos-mais-bonitos-do-mundo.jpg',
        'https://framerusercontent.com/images/of2Zi78PVMok6TmLryQLI7djbt0.jpeg',
        'https://www.infoescola.com/wp-content/uploads/2008/05/cavalo-143531608.jpg',
        'https://premix.com.br/blog/wp-content/uploads/2021/03/racas_cavalo_thumbnail.png',
        'https://www.cavaloatleta.com.br/wp-content/uploads/2023/01/cavalodeesporte.jpg',
        'https://blog.cobasi.com.br/wp-content/uploads/2023/05/quantos-anos-vive-cavalo-capa.webp',
        'https://www.comprerural.com/wp-content/uploads/2023/07/cavalo-1-750x430.jpg'
    ];

    // Seleciona uma imagem aleatória da lista
    $randomImage = $images[array_rand($images)];

    // Redireciona para a URL da imagem aleatória
    header("Location: $randomImage");
    exit();
?>
