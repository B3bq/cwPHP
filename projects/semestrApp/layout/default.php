<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>

    <body>
        <h1>Hello World App</h1>
        <p>Wybierz element z menu:</p>
        <ul>
            <li><a href="<?= $router->generate('home') ?>">Strona główna</a></li>
            <li><a href="<?= $router->generate('articles', ['id' => 6]) ?>">Artykuły</a></li>
            <li><a href="<?= $router->generate('dashboard') ?>">Panel użytkownika</a></li>
            <li><a href="<?= $router->generate('about') ?>">O nas</a></li>
        </ul>
        <div>
            <?php echo $content; ?>
        </div>
    </body>
</html>

