<?php
$projetos = [
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Meu Primeiro Portfolio. Feito em PHP e html",
        "stack" => ['HTML', 'PHP'],
        "imagem" => "/assets/portfolio.png"
    ],
    [
        "titulo" => "Arena Sport Bar",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Site feito como projeto final da materia da faculdade sobre introdução a web",
        "stack" => ['HTML', 'CSS', 'JAVASCRIPT'],
        "imagem" => "/assets/arena.png"

    ],
    [
        "titulo" => "Evolve Mind",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Projeto pensado na facilidade para os profissionais da saude mental onde disponibiliza para seus pacientes um diario virtual",
        "stack" => ['HTML', 'CSS', 'JAVASCRIPT', 'PYTHON', 'FLASK'],
        "imagem" => "/assets/evolve.png"
    ],
];
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
        <div class=" w-1/5 flex items-center justify-center">
            <img src="<?= $projeto['imagem'] ?>" class="h-25 rounded-md">
        </div>

        <div class=" w-4/5 space-y-3">

            <div class="flex gap-3 justify-between">

                <h3 class="font-semibold text-xl">
                    <?php if ($projeto['finalizado']): ?>
                        ✅
                    <?php endif; ?>

                    <?= $projeto['titulo'] ?>

                    <?php if ($projeto['finalizado']): ?>
                        <span class="text-xs text-gray-400 px-2 py-3 opacity-40 italic ">(finalizado em <?= $projeto['ano'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 px-2 py-3 opacity-40 italic ">(em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>

                <div class="space-x-1">
                    <?php
                    $colors = ['sky', 'yellow', 'orange', 'blue', 'red'];
                    foreach ($projeto['stack'] as $position => $language):
                    ?>
                        <span class="bg-<?= $colors[$position] ?>-600 text-<?= $colors[$position] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                            <?= $language ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-7"><?= $projeto['descricao'] ?></p>
        </div>
    </div>
<?php endforeach; ?>