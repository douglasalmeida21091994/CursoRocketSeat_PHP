<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 Rocketseat</title>
</head>

<body>

    <?php

    $nome = "João";
    $saudacao = "Oi";
    $titulo = $saudacao . ", Portifólio do " . $nome;
    $subtitulo = "Seja bem-vindo ao meu portifólio!!";
    $ano = 2019;

    $projeto = "Meu Portifólio";
    $finalizado = 1;
    $dataDoProjeto = "2024-12-01";
    $descricao = "Meu primeiro portifólio. Escrito em PHP e HTML.";

    $projetos = [
        [
            "titulo" => "Meu Portfólio",
            "finalizado" => false,
            "ano" => 2024,
            "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML."
        ],
        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => true,
            "ano" => 2023,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML."
        ],
        [
            "titulo" => "Gerenciamento de Arquivos",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML."
        ],
        [
            "titulo" => "Site Vídeos YouTube",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML."
        ],
        [
            "titulo" => "Lista de Livros",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML."
        ]
    ];


    // $livros = [
    //     ["nome" => "Senhor dos anéis"],
    //     ["nome" => "Harry Potter"]
    // ];  

    function verificaSeEstaFinalizado($e)
    {
        if ($e['finalizado']) {
            return '<span style="color: green">Finalizado! ✅ <br></span>';
        } else {
            return '<span style="color:red">Não finalizado!⛔<br></span>';
        }
    };

    // function filtro($listaDeProjetos, $chave, $valor)
    // {

    //     $filtrados = [];

    //     foreach ($listaDeProjetos as $projeto) {

    //         if ($projeto[$chave] === $valor) {

    //             $filtrados[] = $projeto;
    //         }
    //     }

    //     return $filtrados;
    // };    

    // $projetosFiltrados = filtro($projetos, 'ano', 2024);
    // $projetosFiltrados = filtro($projetosFiltrados, 'finalizado', true);

    # USANDO O ARRAY_FILTER

    $projetosFiltrados = array_filter($projetos, function($projeto) {
        return $projeto['ano'] >= 2022 && $projeto['finalizado'] == true;
    });

    $projetosFiltrados = array_values($projetosFiltrados);   


    ?>

    <!-- FECHAMENTO PHP INICIAL -->

    <h2><?= $titulo ?></h2>

    <p><?= $subtitulo ?></p>

    <p><?= $ano ?></p>

    <hr>  

    <hr>

    <?php if (empty($projetosFiltrados)): ?>
        <span style="color: #e76c6a">Nenhum resultado encontrado!!</span>

    <?php else: ?>
        <span">Segue abaixo a relação de projetos:</span>
        <?php endif; ?>

        <ul>
            <?php foreach ($projetosFiltrados as $projects): ?>

                <div <?php if ($projects['finalizado']): ?>
                    style="background-color: #85e6c0; border-radius: 5px; max-width: 500px"

                    <?php else: ?>
                    style="background-color:#e76c6a; border-radius: 5px; max-width: 500px"

                    <?php endif ?>>

                    <h2>
                        <?= $projects['titulo'] ?>
                    </h2>

                    <p>
                        <?= $projects['descricao'] ?>
                    </p>

                    <div>
                        <div>
                            <?= $projects['ano'] ?>
                        </div>

                        <div> Projeto: <br>

                            <?= verificaSeEstaFinalizado($projects) ?>

                            <!-- MENOS VERBOSA: -->
                            <!-- <?php if (!$projects['finalizado']): ?>

                            <span style="color:red">Não finalizado!⛔<br></span>

                        <?php else: ?>

                            <span style="color: green">Finalizado! ✅ <br></span>

                        <?php endif; ?> -->

                            <!-- FORMA MAIS VERBOSA -->
                            <!-- <?php

                                    if ($projects['finalizado']) {
                                        echo "Finalizado! ✅<br>";
                                    } else {
                                        echo "Não finalizado!⛔<br>";
                                    }

                                    ?> -->


                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </ul>

</body>

</html>