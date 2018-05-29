<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Articles</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>/css/style.css" />
    </head>
    <body>
        <div id="page">
            <main>
                <nav>
                    <ul>
                        <li><a href="<?php echo SITE_URL;?>/articles/form">Add article</a></li>
                        <li><a href="<?php echo SITE_URL;?>/articles">Accueil</a></li>
                        <li><a href="<?php echo SITE_URL;?>/contact">Contact</a></li>
                    </ul>
                </nav>
                <?php include SITE_PATH . '/view/'. $view; ?>
            </main>
        </div>
    </body>
</html>