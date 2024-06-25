<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzas</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="./css/theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header>
            <div class="container">
                
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt=""/>
                </a>
                <nav class="navigation">
                    <ul class="menu">

                        <?php
                        foreach ($menu as $key => $value) {
                            ?>

                            <a href="/<?php echo $key ?>.php"><?php echo $value ?> </a>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>

            </div>
        </header>