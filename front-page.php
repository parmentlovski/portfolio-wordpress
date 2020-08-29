<?php do_action('display_header', 'package_header'); ?>

<main class="container mt-6">

    <section id="services" class="mt-8">

        <h2 class="is-size-2 mt-6 mb-10 titleSection"><span class="backgroundYellow">SERVICES</span></h2>

        <div class="content-services">

            <div class="box-services columns is-multiline">
                <div class="card-services column is-8 mt-6">
                    <h3 class="mt-5">
                        <img src="wp-content/themes/from_scratch/assets/img/design.png" class="mr-4" alt="Logo représentant le design web" width="64px" height="64px">
                        <span>Design</span></h3>
                    <h4 class="my-5">“Mettons en valeur votre identité en répondant à vos objectifs“</h4>
                    <p>
                        La magie de la programmation réalisera tout vos désirs. </p>
                    <p>Je dispose des compétences permettant de mettre en valeur l'identité de votre projet : allant du template acheté au design sur mesure.
                    </p>
                    <p>Selon votre budget nous déciderons ensemble de la solution la plus adéquate.</p>
                    </p>
                </div>
                <img class="img-services mt-6 column is-half services" src="wp-content/themes/from_scratch/assets/img/services.png" alt="Image représentant le service" width="1256px" height="1588px">

                <div class="card-services column is-offset-2 mt-6">
                    <h3>
                        <img src="wp-content/themes/from_scratch/assets/img/repair.png" class="mr-4" alt="Logo représentant le développement web" width="64px" height="64px"> <span>Développement</span></h3>
                    <h4 class="my-5">“La clef de voûte de votre site internet“</h4>
                    <p>
                        Selon vos besoins et vos objectifs je propose différentes solutions :
                    </p>
                    <ul>
                        <li>- Un <strong>CMS</strong>, soit un système de gestion de contenu, vous permettant d'éditer par vous même vos contenus. Allant du site vitrine à la mise en place d'une boutique. </li>
                        <li>- Un site <strong>sur mesure</strong> vous permettant de répondre à toutes vos envies.</li>
                        <li>- La création d'applications vous permettant d'améliorer votre productivité.</li>
                    </ul>
                </div>

                <div class="card-services column is-8 mt-6">
                    <h3>
                        <img src="wp-content/themes/from_scratch/assets/img/vision.png" class="mr-4" alt="Logo représentant la méthodologie" width="64px" height="64px">
                        <span>Procédé</span></h3>
                    <h4 class="my-5">“Ensemble, nous répondrons à vos besoins“</h4>

                    <p>Dès notre premier échange nous discuterons ensemble de vos besoins et objectifs ce qui me permettra d'effectuer un devis détaillée.</p>

                    <p>Au quotidien nous validerons ensemble chaques étapes du projet: design, maquette et développement.</p>
                    <p>
                        Une fois le projet livré je resterai entièrement disponible tout en effectuant un support technique et en vous formant à l'utilisation de votre site internet.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="projets" class="mt-6">
        <h2 class="is-size-2 mt-6 mb-10 titleSection"><span class="backgroundYellow">PROJETS</span></h2>

        <div class="content-projets">

            <div class="box-projets columns is-multiline">
                <div class="line horizontal-right"></div>
                
                <div class="line horizontal-left"></div>
                <div class="line vertical-bottom"></div>
                <div class="line vertical-top"></div>

                <div class="content-heart">
                <i class="far fa-heart"></i>
                </div>
                <?php
                $post = array(
                    'post_type' => 'post',
                    'showposts' => -1,
                    'cat' => 2,
                    // 'posts_per_page' => 1,
                    // 'order' => 'ASC', // classé par ordre alphabétique
                    'orderby' => array('date_post' => 'ASC'), // par titre
                );

                $post_query = new WP_Query($post);
                if ($post_query->have_posts()) :
                    while ($post_query->have_posts()) : $post_query->the_post();

                        $competences = get_post_custom();

                ?>
                        <div class="projet item column is-5">


                            <h3 class="has-text-centered is-size-3 mb-4"><?php the_title(); ?></h3>

                            <div id="content-placement" class="columns my-5">

                                <!-- <div class="column is-1 arrow">
                                        <img src="wp-content/themes/from_scratch/assets/img/left.png" class="left" alt="Logo représentant une flèche allant dans la direction de gauche" height="32px" width="32px">
                                    </div> -->


                                <div class="has-text-centered column is-offset-1 is-4 content-img-projet" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
                                    <!-- <img src="wp-content/themes/from_scratch/assets/img/bysshe.png" alt="Image du projet Bysshe" height="" width=""> -->
                                </div>
                                <div class="content-competences column is-half ">
                                    <div class="columns is-multiline">

                                        <?php
                                        $competencesUne = $competences['_competencesUne'][0];
                                        $competencesDeux = $competences['_competencesDeux'][0];
                                        $competencesTrois = $competences['_competencesTrois'][0];
                                        $competencesQuatres = $competences['_competencesQuatres'][0];
                                        $competencesCinq = $competences['_competencesCinq'][0];
                                        ?>
                                        <?php if (isset($competencesUne)) : ?>
                                            <div class="competences column is-half"><span class="stringCompetences"><?php echo $competencesUne; ?></span></div>

                                        <?php
                                        endif; ?>
                                        <?php if (isset($competencesDeux)) : ?>
                                            <div class="competences column is-half"><span class="stringCompetences"><?php echo $competencesDeux; ?></span></div>
                                        <?php
                                        endif; ?>
                                        <?php if (isset($competencesTrois)) : ?>
                                            <div class="competences column is-half"><span class="stringCompetences"><?php echo $competencesTrois; ?></span></div>
                                        <?php
                                        endif; ?>
                                        <?php if (isset($competencesQuatres)) : ?>
                                            <div class="competences column is-half"><span class="stringCompetences"><?php echo $competencesQuatres; ?></span></div>
                                        <?php
                                        endif; ?>
                                        <?php if (isset($competencesCinq)) : ?>
                                            <div class="competences column is-half"><span class="stringCompetences"><?php echo $competencesCinq; ?></span></div>
                                        <?php
                                        endif; ?>
                                    </div>

                                </div>

                                <!-- <div class="column is-1 arrow">
                                        <img src="wp-content/themes/from_scratch/assets/img/right.png" class="right somewhere_projet a_la_suite_projet" alt="Logo représentant une flèche allant dans la direction de droite" height="32px" width="32px">
                                    </div> -->
                            </div>
                            <p class="my-4 descriptifProjet"><?php the_excerpt(); ?></p>
                            <p><?php the_content(); ?></p>
                            <!-- <hr> -->
                        </div>
                <?php
                    endwhile;
                endif; ?>
                <img class="img-projet item column is-5" src="wp-content/themes/from_scratch/assets/img/online_presentation.png" alt="Image représentant les projets" width="1574px" height="1180px">
            </div>
            <!-- <div class="box-img column is-half">
                <img class="img-projets" src="wp-content/themes/from_scratch/assets/img/super_man.svg">
            </div> -->
        </div>

    </section>


</main>

<section id="contact" class="mt-6">
    <h2 class="is-size-2 mt-10 titleSection titleWhite"><span class="backgroundYellow titleContact mt-6">CONTACT</span></h2>

    <div class="content-form columns">

        <div class="column is-offset-1 is-3-fullhd content-img">
            <img class="img-contact" src="wp-content/themes/from_scratch/assets/img/mail2.svg">
        </div>


        <div class="box-form column is-4-fullhd">

            <form action="#" id="contactForm" method="post">
                <!-- <legend class="text-center">Me contacter</legend> -->

                <div id="content-input" class="columns is-multiline">

                    <div class="column is-offset-1 is-11">
                        <div class="box-input columns">
                            <!-- <img src="wp-content/themes/from_scratch/assets/img/user.png" class="formLogo" alt="Logo pour le champ du formulaire prénom" width="16px" height="16px"> -->
                            <span class="input-logo column is-1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" id="name" class="column is-10" name="name" placeholder="Nom / prénom">
                            <span class="input-obligatoire column is-1"><i class="fas fa-asterisk"></i></span>
                            <br>
                            <!-- <span id="erreurName" class="erreur"></span> -->
                        </div>
                    </div>

                    <div class="column is-offset-1 is-11">
                        <div class="box-input columns">
                            <span class="input-logo column is-1"><i class="fas fa-at" aria-hidden="true"></i></span>
                            <input type="email" name="email" class="column is-10" id="email" placeholder="E-mail">
                            <span class="input-obligatoire column is-1"><i class="fas fa-asterisk"></i></span>
                            <br>
                            <!-- <span id="erreurEmail" class="erreur"></span> -->
                        </div>
                    </div>

                    <div class="column is-offset-1 is-11">
                        <div class="box-input columns">
                            <span class="column is-1 input-logo-tel"><i class="fas fa-phone" aria-hidden="true" style="transform: rotate(100deg);"></i></span>
                            <input type="tel" id="tel" class="column is-11" name="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Téléphone">
                        </div>
                    </div>

                    <!-- <div class="column is-offset-2 is-4">
                            <input type="text" id="object" name="object" placeholder="Objet *"><br>
                            <span id="erreurObject" class="erreur"></span>
                        </div> -->

                    <div class="column is-offset-1 is-11">
                        <div class="box-input columns">
                            <textarea id="message" name="message" class="column is-11" placeholder="Merci de détailler vos besoins."></textarea>
                            <span class="input-obligatoire-message column is-1"><i class="fas fa-asterisk"></i></span>
                            <br>
                            <!-- <span id="erreurMessage" class="erreur"></span> -->
                            <!-- <div class="help-block with-errors"></div> -->
                        </div>
                    </div>
                    <div class="send column is-12 mt-10 form-button">
                        <button name="message-submit" type="submit" id="form-submit" class="btnSend ml-6"><span>Envoyer</span></button>
                        <input type="hidden" name="hidden" value="1">
                    </div>
                </div>

                <?php

                if (isset($_GET['send']) && $_GET['send'] === "sent") {
                    echo 'E-mail envoyé';
                } else if (isset($_GET['send']) && $_GET['send'] === "notSent") {
                    echo 'Problème de serveur';
                } ?>

            </form>

            <!-- <svg id="Composant_1_1" data-name="Composant 1 – 1" xmlns="http://www.w3.org/2000/svg" width="770.513" height="544.875" viewBox="0 0 770.513 544.875" style="margin-bottom: -6%;">
                    <path id="blob_menu" data-name="blob menu" d="M67.017,42.622c87.077-95.9,292.155,0,292.155,0v674.09S134.3,827.447,67.017,731.185C36.268,687.194-2.448,575.044.546,402.782,4.106,197.973-20.06,138.523,67.017,42.622Z" transform="translate(770.513 0) rotate(90)" fill="#DDDEE0" />
                    <path id="Tracé_9" data-name="Tracé 9" d="M1002.585,5430.063v185.7" transform="translate(-606.825 -5070.891)" fill="none" stroke="#DDDEE0" stroke-width="20" />
                </svg> -->
        </div>

        <div id="map" class="column is-2-fullhd">
            <!-- Ici s'affichera la carte -->
        </div>

    </div>

</section>

<script>
    macarte = L.map('map');
    var mondayLayer = L.geoJSON();


    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat = 48.862725;
    var lon = 2.287592;

    function Goto(address) {
        fetch('https://nominatim.openstreetmap.org/search?format=json&limit=3&q=' + address) // ('url') par défaut méthode get
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                var latitudex = data[0]['lat'];
                var longitudex = data[0]['lon'];
                var marker = L.marker([latitudex, longitudex]).addTo(macarte);
                console.log('latitude=' + latitudex + ' et longitude=' + longitudex);
            })

            .catch(function(error) {
                console.log('ici ' + error.message);
            });
    }

    // var macarte = null;
    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte.setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'donnsées © <a href="osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);
    }
    window.onload = function() {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
    Goto(adress_client);
</script>

<?php do_action('display_footer', 'package_footer'); ?>