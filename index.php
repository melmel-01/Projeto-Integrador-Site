
<?php

include "dados.php";


// ==========================================
// FUNÇÕES PHP
// ==========================================

function mostrarImagem($caminho, $descricao, $classe = "") {
    echo '<div class="photo-placeholder ' . htmlspecialchars($classe) . '">';
    echo '<img src="' . htmlspecialchars($caminho) . '" alt="' . htmlspecialchars($descricao) . '">';
    echo '</div>';
}

function mostrarTitulo($titulo, $destaque) {
    echo '<h2>';
    echo htmlspecialchars($titulo);
    echo '<br><span>' . htmlspecialchars($destaque) . '</span>';
    echo '</h2>';
}

function mostrarTexto($texto) {
    echo '<p>' . nl2br(htmlspecialchars($texto)) . '</p>';
}

// ==========================================
// CONTEÚDO SOBRE A SUÍÇA
// ==========================================

$suica = [
    "titulo" => "Bem-vindos à",
    "destaque" => "Suíça!",
    "texto1" => "A Suíça é conhecida por suas paisagens de montanhas, tradições, chocolates e histórias fascinantes. Neste projeto, exploramos aspectos da cultura suíça e compartilhamos o que aprendemos em diferentes feiras escolares.",
    "texto2" => "Prepare-se para conhecer lendas, descobrir ideias empreendedoras e acompanhar nossas apresentações.",
    "imagem" => "img/image copy 5.png"
];



// ==========================================
// FEIRA DO EMPREENDEDORISMO
// ==========================================

$empreendedorismo = [
    "imagem" => "img/image copy.png",
    "titulo" => "Feira do",
    "destaque" => "Empreendedorismo",
    "texto1" => "A Feira do Empreendedorismo incentiva a criatividade, o planejamento, o trabalho em equipe e a iniciativa. É uma oportunidade de transformar ideias em negócios e aprender na prática.",
    "texto2" => "Na nossa feira, apresentamos a Choco Muu, uma experiência de chocolate quente, com atenção aos produtos, à organização, às vendas e ao atendimento dos visitantes.",
    "fotos" => [
        "img/image copy 4.png",
        "img/image copy 3.png"
    ]
];

// ==========================================
// FEIRA CULTURAL
// ==========================================

$cultural = [
    "imagem" => "img/Image (1).jpg",
    "titulo" => "Feira",
    "destaque" => "Cultural",
    "texto1" => "A Feira Cultural é um espaço para apresentar tradições, pesquisas, histórias e manifestações culturais. Nosso trabalho trouxe elementos das lendas e dos mitos, com decoração, caracterização e explicações para os visitantes.",
    "texto2" => "Foi uma oportunidade de compartilhar conhecimento, valorizar diferentes culturas e desenvolver a comunicação e a criatividade.",
    "foto_extra" => "img/img 1/image.png"
];

// ==========================================
// FEIRA DO CONHECIMENTO
// ==========================================

$conhecimento = [
    "imagem" => "img/Image (2).jpg",
    "titulo" => "Feira do",
    "destaque" => "Conhecimento",
    "texto1" => "Na Feira do Conhecimento, apresentamos informações, pesquisas e descobertas. O objetivo é aprender, compartilhar ideias e despertar a curiosidade por diferentes assuntos.",
    "texto2" => "Nosso espaço sobre a Suíça reuniu conteúdos, imagens e elementos que ajudaram a explicar o tema aos visitantes.",
    "foto_extra" => "img/img 1/image copy.png"
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($tituloSite); ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ======================================
CABEÇALHO
====================================== -->

<header class="header">

    <a class="brand" href="#inicio">
        <img src="<?php echo $logoSenac; ?>" alt="Logo Senac">
    </a>

    <nav>

        <?php foreach ($menu as $nome => $link): ?>

            <a href="<?php echo htmlspecialchars($link); ?>">
                <?php echo htmlspecialchars($nome); ?>
            </a>

        <?php endforeach; ?>

    </nav>

    <img class="brand-choco"
         src="<?php echo $logoChoco; ?>"
         alt="Choco Muu">

</header>

<main>

<!-- ======================================
INÍCIO
====================================== -->

<section class="hero" id="inicio">

    <div class="hero-shade"></div>

    <div class="hero-content">

        <span class="tag">
            PROJETO INTEGRADOR • <?php echo $ano; ?>
        </span>

        <h1>
            Uma viagem pelo<br>
            <em>Projeto Integrador</em> e pelo conhecimento
        </h1>

        <p>
            Cultura, histórias, criatividade e experiências.
        </p>

        <a class="btn" href="#suica">
            Explorar o projeto ↓
        </a>

    </div>

</section>

<!-- ======================================
SUÍÇA
====================================== -->

<section class="intro section" id="suica">

    <div class="section-copy">

        <span class="tag dark">
            CULTURA • HISTÓRIA • TRADIÇÃO
        </span>

        <?php mostrarTitulo(
            $suica["titulo"],
            $suica["destaque"]
        ); ?>

        <?php mostrarTexto($suica["texto1"]); ?>

        <?php mostrarTexto($suica["texto2"]); ?>

    </div>

    <?php mostrarImagem(
        $suica["imagem"],
        "Paisagem da Suíça",
        "tall"
    ); ?>

</section>

<!-- ======================================
LENDAS E MITOS
====================================== -->

<section class="section legends">

    <div class="section-copy centered">

        <span class="tag">
            CONTOS E IMAGINAÇÃO
        </span>

        <h2>
            Lendas e mitos
            <span>de Guaratuba</span>
        </h2>

        <p>
            As lendas fazem parte da memória e da identidade
            de um povo. Conheça narrativas tradicionais de Guaratuba,
            personagens lendários e histórias transmitidas
            de geração em geração.
        </p>

    </div>

    <div class="photo-grid three">

        <?php foreach ($lendas as $indice => $lenda): ?>

            <a href="lendas.php?lenda=<?= $lenda['lenda'] ?>">

                <?php mostrarImagem(
                    $lenda["imagem"],
                    $lenda["descricao"]
                ); ?>

            </a>

        <?php endforeach; ?>

    </div>

</section>

<!-- ======================================
EMPREENDEDORISMO
====================================== -->

<section class="section event" id="empreendedorismo">

    <?php mostrarImagem(
        $empreendedorismo["imagem"],
        "Feira do Empreendedorismo",
        "event-photo"
    ); ?>

    <div class="section-copy">

        <span class="tag">
            IDEIAS QUE VIRAM EXPERIÊNCIAS
        </span>

        <?php mostrarTitulo(
            $empreendedorismo["titulo"],
            $empreendedorismo["destaque"]
        ); ?>

        <?php mostrarTexto($empreendedorismo["texto1"]); ?>

        <?php mostrarTexto($empreendedorismo["texto2"]); ?>

        <div class="mini-gallery">

            <?php foreach ($empreendedorismo["fotos"] as $foto): ?>

                <?php mostrarImagem(
                    $foto,
                    "Detalhes da Feira do Empreendedorismo"
                ); ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- ======================================
FEIRA CULTURAL
====================================== -->

<section class="section event reverse" id="cultural">

    <?php mostrarImagem(
        $cultural["imagem"],
        "Feira Cultural",
        "event-photo"
    ); ?>

    <div class="section-copy">

        <span class="tag">
            ARTE • CULTURA • EXPRESSÃO
        </span>

        <?php mostrarTitulo(
            $cultural["titulo"],
            $cultural["destaque"]
        ); ?>

        <?php mostrarTexto($cultural["texto1"]); ?>

        <?php mostrarTexto($cultural["texto2"]); ?>

        <?php mostrarImagem(
            $cultural["foto_extra"],
            "Detalhes da Feira Cultural",
            "extra-photo"
        ); ?>

    </div>

</section>

<!-- ======================================
FEIRA DO CONHECIMENTO
====================================== -->

<section class="section event" id="conhecimento">

    <?php mostrarImagem(
        $conhecimento["imagem"],
        "Feira do Conhecimento",
        "event-photo"
    ); ?>

    <div class="section-copy">

        <span class="tag">
            PESQUISA • DESCOBERTAS • APRENDIZADO
        </span>

        <?php mostrarTitulo(
            $conhecimento["titulo"],
            $conhecimento["destaque"]
        ); ?>

        <?php mostrarTexto($conhecimento["texto1"]); ?>

        <?php mostrarTexto($conhecimento["texto2"]); ?>

        <?php mostrarImagem(
            $conhecimento["foto_extra"],
            "Detalhes da Feira do Conhecimento",
            "extra-photo"
        ); ?>

    </div>

</section>

<!-- ======================================
SOBRE
====================================== -->

<section class="about" id="sobre">

    <img src="<?php echo $logoChoco; ?>"
         alt="Logo Choco Muu"
         class="about-logo">

    <div>

        <span class="tag">
            NOSSA EXPERIÊNCIA
        </span>

        <h2>
            Aprender, criar<br>
            e compartilhar.
        </h2>

        <p>
            Este Projeto Integrador reúne cultura, pesquisa,
            empreendedorismo e colaboração. Cada feira foi
            uma oportunidade de colocar em prática o que
            aprendemos, trabalhar em equipe e construir
            experiências especiais.
        </p>

    </div>

</section>

</main>

<!-- ======================================
RODAPÉ
====================================== -->

<footer>

    <img src="<?php echo $logoSenac; ?>" alt="Senac">

    <p>
        Projeto Integrador • <?php echo $ano; ?> -

        <?php foreach ($integrantes as $indice => $integrante): ?>

            <?php echo htmlspecialchars($integrante); ?>

            <?php if ($indice < count($integrantes) - 1): ?>
                ,
            <?php endif; ?>

        <?php endforeach; ?>

    </p>

    <img src="<?php echo $logoChoco; ?>" alt="Choco Muu">

</footer>

</body>
</html>
