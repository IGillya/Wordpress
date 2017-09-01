<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto" id="ul">
        <?php
        $massiv_vhodnih_parametrov = array(
            'container' => false,    // - без предварительно обертки тегом.
            'echo' => false,         // - вернуть меню для предварительной обработки средствами PHP.
            'items_wrap' => '%3$s',  // - аргумент функции формата строки sprintf().
            'depth' => 0,            // - глубина, уровень вложенности = 0.
        );

        /* Удалим из строки меню всё кроме HTML-тега гиперссылки: */
        print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov ), '<a>, <li></li>');
        ?>
        </ul>

        <form class="form-inline my-2 my-lg-0" action="">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>


    </nav>

