<?php

include "dados.php";

$titulo = $_GET['lenda']
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

        <img class="brand-choco" src="<?php echo $logoChoco; ?>" alt="Choco Muu">

    </header>

    <main>


        <section class="section event reverse">





            <?php
            foreach ($lendas as $lenda) {
                if ($lenda['lenda'] == $titulo) {
            ?>
            <div class="section-copy">
                <div class="photo-placeholder ' . htmlspecialchars($classe) . '">
                    <img src="<?= $lenda['imagem'] ?>" alt="">
                </div>
            </div>
            <div class="section-copy">
                <h2> <?= $lenda['descricao'] ?> </h2>

                <p> <?= $lenda['texto'] ?></p>
            </div>




            <?php  }
            }   ?>

        </section>








        <section class="about" id="sobre">

            <img src="<?php echo $logoChoco; ?>" alt="Logo Choco Muu" class="about-logo">

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