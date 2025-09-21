<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu portfolio</title>
</head>

<body>

    <?php
        $nome = "Vitor";
        $saudacao = "Olá";

        $titulo = " Portfolio de " . $nome;

        $subtitulo = "Seja Bem Vindo ao meu Portfolio";
        $ano = 2025;

        $projeto = "Evolve Mind";
        $finalizado = false;
        $data_do_projeto = "25/08/2025";
        $descricao = "Projeto realizado para o 1° Hackaton da Unirios";

        $projetos = [
            [
               "titulo" => "Meu Portfolio",
                "finalizado" => false,
                "ano" => 2023,
                "descricao" => "Portfolio em PHP e html",
                "stack" => ['HTML', 'PHP' ]
            ],
            [
               "titulo" => "Arena Sport Bar",
                "finalizado" => false,
                "ano" => 2025,
                "descricao" => "Site feito como projeto final da materia da faculdade sobre introdução a web",
                "stack" => ['HTML', 'CSS', 'JAVASCRIPT']

            ],
            [
               "titulo" => "Evolve Mind",
                "finalizado" => false,
                "ano" => 2025,
                "descricao" => "Projeto pensado na facilidade para os profissionais da saude mental onde disponibiliza para seus pacientes um diario virtual",
                "stack" => ['HTML', 'CSS', 'JAVASCRIPT', 'PYTHON', 'FLASK' ]
            ],
            
            // "Lista de tarefas",
            // "PROJETO TESTE",
            // "Evolve Mind"
        ];

        function verificarSeEstarAtualizado($projeto)
        {
            if( ! $projeto['finalizado']){
               return '<span style="color: red">❌ Não finalizado</span>';
            }
            else{
                return '<span style="color: green">✅ Finalizado</span>';
            }
        }
        
        $projetosFiltrados = array_filter($projetos, function($projeto){
            return $projeto['ano'] >= 2024;
        });
        
    ?>

    <h1><?php echo $titulo ?></h1>
    <p><?php echo $subtitulo ?></p>
    <p><?php echo $ano ?></p>

    <hr/>

    <ul>
        <?php foreach($projetosFiltrados as $projeto):?>
           <div
        <?php if(! (2024 - $ano) > 2):?>
            style="background-color: burlywood;"
        <?php endif; ?>
    >

    <div>
        <h2><?php echo $projeto['titulo']?></h2>
        <p><?php echo $projeto['descricao']?></p>
    <div>
    <div><?php echo $projeto['ano']?></div>
            <div>Projeto:

                <?=verificarSeEstarAtualizado($projeto);?>

                <!--                
                <?php if($projeto['finalizado']): ?>
                    <span style="color: green">✅ Finalizado</span>
                <?php else: ?>
                    <span style="color: red">❌ Não finalizado</span>
                <?php endif;?> -->
                
            </div>
            <br>
        </div>
    </div> 
        <?php endforeach; ?>

    </ul>

    
</body>

</html>