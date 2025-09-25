<?php
$items = [
    ['href' => 'www.linkedin.com/in/vitor-pierre-', 'src' => 'assets/linkedin.png', 'alt' => 'LinkedIn logo', 'class' => 'h-8 mt-1 hover:animate-bounce'],
    ['href' => 'https://github.com/PI3RRE003', 'src' => 'assets/github.svg', 'alt' => 'GitHub logo', 'class' => 'h-7 mt-1 hover:animate-bounce bg-neutral-50 rounded-full'],

];
?>
<section class="flex gap-x-3">
    <!-- TITULO E DESCRIÇÃO -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Vitor Pierre.</h1>
        <p class="text-xl leading-7 mt-6">Falando um pouco sobre mim, sou estudante de sistemas da informação no
            centro universitario do rio são francisco - Unirios e
            adoro programar, tenho foco em
            ser um desenvolvedor full-stack, estudando diversas tecnologias além da faculdade</p>
        <p>
        <ul class="flex gap-3 mt-3">
            <?php foreach ($items as $item): ?>

                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img src="<?= $item['src'] ?>"
                            alt="<?= $item['alt'] ?>" class="<?= $item['class'] ?>">
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>
        </p>
    </div>

    <!-- IMAGEM -->
    <div class="w-1/3 flex items-center justify-center">
        <div><img src="assets/my profile.jpg" alt="" class="h-50 -mt-6 hover:animate-pulse rounded-lg ">
        </div>
    </div>
</section>