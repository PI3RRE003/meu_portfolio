<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Meu Portfolio</title>

</head>

<body class="bg-slate-950 text-white">
    <?php include('./components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- HERO -->
        <?php include('./components/hero.php') ?>

        <!-- PROJETOS -->
        <section class="space-y-3 py-6" id="projetos">

            <h2 class="text-2xl font-bold">Meus Projetos</h2>

            <?php include('./components/projetos.php') ?>
        </section>

    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20 px-3">
        <div class="border-t border-gray-600 pt-7 px-3 text-sm text-gray-400">
            © Copyright <?= date('Y') ?>. Construido por mim mesmo 😁
        </div>
        <div>

        </div>
    </footer>
</body>

</html>