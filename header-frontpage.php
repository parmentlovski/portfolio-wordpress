<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vous avez un projet web et cela nécessite un site internet ? N'hésitez pas à cliquer sur lien. Je suis freelance développeur web à Besançon">
    <meta name="author" content="Parmentelot Bryan">
    <title>Développeur web Freelance à Besançon - Création de site internet – Parmentelot Bryan</title>

    <!-- Add css specifiq at this theme -->

    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->

</head>

<body>

    <header class="container">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a id="logo" class="navbar-item" href="/">
                    BP
                </a>
                <span id="slogan">Soutient vos projets web</span>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                    <a href="#services" class="link navbar-item" data-content="Services"><span>Services</span></a>
                    <!-- <a href="#solution" class="link navbar-item" data-content="Solutions"><span>Solutions</span></a> -->
                    <a href="#projets" class="link navbar-item" data-content="Projets"><span>Projets</span></a>
                    <a href="#contact" class="link navbar-item" data-content="Contact"><span>Contact</span></a>
                </div>
            </div>
        </nav>
        </div>

        <div id="bottom-header" class="columns">
            <div id="content-action" class="column is-7 mt-6 pt-6 ">
                <h1 class="primary">
                <div class="freelance">   
                Freelance développeur web
                    <br>
                    à Besançon et ses alentours.
                    <br> 
                    </div> 
                    <!-- Je crée votre site internet. -->
                    <div class="animationLetters">
                    <span>C</span>
                    <span>r</span>
                    <span>é</span>
                    <span>a</span>
                    <span>t</span>
                    <span>i</span>
                    <span>o</span>
                    <span class="spaceWords">n</span>   
                    &nbsp;
                    <span>d</span>
                    <span class="spaceWords">e</span>
                    &nbsp;
                    <span>s</span>
                    <span>i</span>
                    <span>t</span>
                    <span class="spaceWords">e</span>
                    &nbsp;
                    <span>i</span>
                    <span>n</span>
                    <span>t</span>
                    <span>e</span>
                    <span>r</span>
                    <span>n</span>
                    <span>e</span>
                    <span>t</span>
                    <span>.</span>
                    <!-- <div class="ligne"></div> -->
                </div>
                </h1>
                

                <button id="btn-contact" class="mt-6">
                    <a href="#contact">ME CONTACTER</a>
                </button>

            </div>

            <div class="column content-header">
                <img src="wp-content/themes/from_scratch/assets/img/header.svg" class="img-header">
            </div>
        </div>
    
    </header>

    <svg xmlns="http://www.w3.org/2000/svg" width="735.781" height="793.607" viewBox="0 0 735.781 793.607" style="position: absolute; top:0; right:0; z-index: -1;" class="svgHeader"> 
            <path id="blob_menu" data-name="blob menu" d="M1005.2,0h639.737V734.949S1170.2,855.68,1028.154,750.728C963.24,702.765,903.289,606.049,909.61,418.235,917.125,194.935,1005.2,0,1005.2,0Z" transform="translate(-909.151)" fill="#ff9f40" />
        </svg>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>