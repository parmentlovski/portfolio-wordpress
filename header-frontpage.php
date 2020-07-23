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

</head>

<body>


    <header class="container">
        <!-- <div id="top-header" class="columns is-vcentered">
            <div id="content-logo" class="column is-half is-flex">
                <a href="/" id="logo">
                    BP -->
        <!-- <img src="../wp-content/themes/fromscratch/assets/img/" alt="Logo" width="" alt=""> -->
        <!-- </a>
                <p class="pl-5">Soutient vos projets web</p>
            </div> -->
        <!-- <nav class="column navbar" role="navigation" aria-label="main navigation">
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <ul class="is-flex navbar-item has-dropdown is-hoverable">
                    <div class="navbar-dropdown">
                        <li class="ml-5 navbar-item"><a href="#" class="link" data-content="Services"><span>Services</span></a></li>
                        <li class="mx-6 navbar-item"><a href="#" class="link" data-content="Projets"><span>Projets</span></a></li>
                        <li class="navbar-item"><a href="#" class="link" data-content="Contact"><span>Contact</span></a></li>
                    </div>
                </ul>
            </nav> -->

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a id="logo" class="navbar-item" href="/">
                    BP
                    <span class="pl-5">Soutient vos projets web</span>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                    <a href="#" class="link navbar-item" data-content="Services"><span>Services</span></a>
                    <a href="#" class="link navbar-item" data-content="Projets"><span>Projets</span></a>
                    <a href="#" class="link navbar-item" data-content="Contact"><span>Contact</span></a>
                </div>
            </div>
        </nav>
        </div>

        <div id="bottom-header" class="columns mt-6">
            <div id="content-action" class="column is-half mt-6 pt-6">
                <h1>Freelance développeur web
                    <br>
                    à Besançon et ses alentours.
                    <br>
                    Je crée votre projet web.</h1>

                <button class="mt-6">
                    <a href="#">Devis gratuit</a>
                </button>
            </div>

            <div class="column mt-6">
                <img src="wp-content/themes/from_scratch/assets/img/header.png" class="img-header ml-6">
            </div>
        </div>
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" width="735.781" height="793.607" viewBox="0 0 735.781 793.607" style="position: absolute; top:0; right:0; z-index: -1;">
        <path id="blob_menu" data-name="blob menu" d="M1005.2,0h639.737V734.949S1170.2,855.68,1028.154,750.728C963.24,702.765,903.289,606.049,909.61,418.235,917.125,194.935,1005.2,0,1005.2,0Z" transform="translate(-909.151)" fill="#f3fafb" />
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