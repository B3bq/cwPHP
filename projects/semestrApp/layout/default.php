<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>

    <body>
        <h1>Hello World App</h1>
        <p>Wybierz element z menu:</p>
        <ul>
            <li><a href="<?= $router->path('home') ?>">Strona główna</a></li>
            <li><a href="<?= $router->path('about') ?>">O nas</a></li>
            <li><a href="<?= $router->path('dashboard') ?>">Panel użytkownika</a></li>
            <li><a href="<?= $router->path('articles') ?>">Artykuły</a></li>
        </ul>
        <div>
            <?php echo $content; ?>
        </div>
    </body>
</html>

