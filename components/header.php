<?php
$items = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '', 'texto' => 'LinkedIn'],
    ['href' => '', 'texto' => 'GitHub'],
];
?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- LOGO -->
    <div class="font-bold text-xl text-cyan-400 ">
        👨‍🚀 Meu Portfolio
    </div>

    <!-- LINKS -->
    <div class="">
        <ul class="flex gap-x-3 font-medium text-gray-400">

            <?php foreach ($items as $item): ?>

                <li>
                    <a
                        href="<?= $item['href'] ?>" class="hover:underline">
                        <?= $item['texto'] ?></a>
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
</header>