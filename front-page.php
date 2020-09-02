<?php do_action('display_header', 'package_header'); ?>

<main class="mt-6">

    <section id="services" class="container mt-8">

        <h2 class="is-size-2 is-size-3-mobile mt-6 mb-10 titleSection"><span class="backgroundYellow">SERVICES</span></h2>

        <div class="content-services">

            <div class="box-services columns is-mobile is-multiline">
                <div class="card-services animation-services column is-offset-1-mobile is-10-mobile is-offset-1-desktop is-11-desktop mt-6">
                    <h3 class="mt-5">
                        <img src="wp-content/themes/from_scratch/assets/img/design.png" class="mr-4" alt="Logo représentant le design web" width="64" height="64">
                        <span>Design</span></h3>
                    <h4 class="mt-6 mb-5">“Mettons en valeur votre identité en répondant à vos objectifs“</h4>
                    <p>
                        La magie de la programmation réalisera tout vos désirs. </p>
                    <p>Je dispose des compétences permettant de mettre en valeur l'identité de votre projet : allant du template acheté au design sur mesure.
                    </p>
                    <p>Selon votre budget nous déciderons ensemble de la solution la plus adéquate.</p>
                </div>

                <div class="animation-services line-services-horizontal">
                </div>

                <div class="card-services animation-services column is-offset-1-mobile is-10-mobile is-offset-1-desktop is-11-desktop">
                    <h3>
                        <img src="wp-content/themes/from_scratch/assets/img/repair.png" class="mr-4" alt="Logo représentant le développement web" width="64" height="64"> <span>Développement</span></h3>
                    <h4 class="mt-6 mb-5">“La clef de voûte de votre site internet“</h4>
                    <p>
                        Selon vos besoins et vos objectifs je propose différentes solutions :
                    </p>
                    <ul>
                        <li>- Un <strong>CMS</strong>, soit un système de gestion de contenu, vous permettant d'éditer par vous même vos contenus. Allant du site vitrine à la mise en place d'une boutique. </li>
                        <li>- Un site <strong>sur mesure</strong> vous permettant de répondre à toutes vos envies.</li>
                        <li>- La création d'applications vous permettant d'améliorer votre productivité.</li>
                    </ul>
                </div>

                <div class="animation-services line-services-horizontal">
                </div>

                <div class="card-services animation-services column is-offset-1-mobile is-10-mobile is-offset-1-desktop is-11-desktop">
                    <h3>
                        <img src="wp-content/themes/from_scratch/assets/img/vision.png" class="mr-4" alt="Logo représentant la méthodologie" width="64" height="64">
                        <span>Procédé</span></h3>
                    <h4 class="mt-6 mb-5">“Ensemble, nous répondrons à vos besoins“</h4>

                    <p>Dès notre premier échange nous discuterons ensemble de vos besoins et objectifs ce qui me permettra d'effectuer un devis détaillée.</p>

                    <p>Au quotidien nous validerons ensemble chaques étapes du projet: design, maquette et développement.</p>
                    <p>
                        Une fois le projet livré je resterai entièrement disponible tout en effectuant un support technique et en vous formant à l'utilisation de votre site internet.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="projets" class="container mt-6">
        <h2 class="is-size-2 is-size-3-mobile mt-6 mb-10 titleSection"><span class="backgroundYellow">PROJETS</span></h2>

        <div class="content-projets">

            <div class="box-projets columns is-multiline is-mobile">
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
                    'orderby' => array('date_post' => 'ASC'), // par titre
                );

                $post_query = new WP_Query($post);
                if ($post_query->have_posts()) :
                    while ($post_query->have_posts()) : $post_query->the_post();

                        $competences = get_post_custom();

                ?>
                        <div class="projet item column is-offset-1-mobile is-10-mobile is-5-tablet">

                            <h3 class="has-text-centered is-size-3 mb-4"><?php the_title(); ?></h3>

                            <div class="content-placement columns is-mobile my-5">

                                <div class="has-text-centered column is-half-mobile is-offset-1-tablet is-4-tablet content-img-projet" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
                                </div>
                                <div class="content-competences column is-half-mobile is-half-tablet ">
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
                            </div>
                            <div class="my-4 descriptifProjet"><?php the_excerpt(); ?></div>
                            <p><?php the_content(); ?></p>
                        </div>
                <?php
                    endwhile;
                endif; ?>
                <img class="img-projet item column is-5" src="wp-content/themes/from_scratch/assets/img/presentation_projet.svg" alt="Image représentant les projets">
            </div>
        </div>

    </section>

    <section id="contact" class="mt-6">

        <h2 class="is-size-2 is-size-3-mobile mt-10 titleSection titleWhite"><span class="backgroundYellow titleContact mt-6">CONTACT</span></h2>

        <div class="content-form columns">

            <div class="column is-offset-1-fullhd is-3-fullhd content-img">
                <img class="img-contact" src="wp-content/themes/from_scratch/assets/img/formulaire_contact.svg" alt="Image représentant un mail envoyé via le formulaire de contact">
            </div>


            <div class="box-form column is-auto-tablet is-4-fullhd">

                <form action="#" id="contactForm" method="post">

                    <div id="content-input" class="columns is-multiline is-mobile">

                        <div class="help-block with-errors column is-12-mobile is-offset-desktop is-11-desktop">
                            <div class="box-input columns is-mobile input-erreur">
                                <span class="input-logo column is-1"><i class="fas fa-exclamation-circle" aria-hidden="true"></i></span>
                                <span id="erreur" class="erreur column is-11"></span>
                            </div>
                        </div>

                        <div id="sendEmail" class="column is-12-mobile is-offset-1-desktop is-11-desktop ">
                        <?php
                                    if (isset($_GET['email_transmis']) && $_GET['email_transmis'] === "oui") {?>
                            <div class="box-input columns is-mobile input-email-valide">
                            <span class="input-logo column is-1"><i class="far fa-check-circle" aria-hidden="true"></i></span>
                            <span class="valide column is-11">
                                           <?php echo 'E-mail envoyé';?>
                                           </span>
                            </div>
                             <?php   }  ?>
                            <?php if (isset($_GET['email_transmis']) && $_GET['email_transmis'] === "non") { ?>
                            <div class="box-input columns is-mobile input-email-non-valide">
                                <span class="input-logo column is-1"><i class="far fa-times-circle" aria-hidden="true"></i></span>
                                <span class="non-valide column is-11">
                                <?php
                                    echo 'Problème de serveur';?>
                                    </span>
                            </div>
                              <?php  } ?>
                        </div>

                        <div class="column is-12-mobile is-offset-1-desktop is-11-desktop ">
                            <div class="box-input columns is-mobile">
                                <span class="input-logo column is-1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" id="name" class="column is-10" name="name" placeholder="Nom / prénom">
                                <span class="input-obligatoire column is-1"><i class="fas fa-asterisk"></i></span>
                            </div>
                            <span id="erreurName" class="erreur"></span>
                        </div>

                        <div class="column is-12-mobile is-offset-1-desktop is-11-desktop">
                            <div class="box-input columns is-mobile">
                                <span class="input-logo column is-1"><i class="fas fa-at" aria-hidden="true"></i></span>
                                <input type="email" name="email" class="column is-10" id="email" placeholder="E-mail">
                                <span class="input-obligatoire column is-1"><i class="fas fa-asterisk"></i></span><br>
                            </div>
                            <span id="erreurEmail" class="erreur"></span>

                        </div>

                        <div class="column is-12-mobile is-offset-1-desktop is-11-desktop">
                            <div class="box-input columns is-mobile">
                                <span class="column is-1 input-logo-tel"><i class="fas fa-phone" aria-hidden="true" style="transform: rotate(100deg);"></i></span>
                                <input type="tel" id="tel" class="column is-11" name="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Téléphone">
                            </div>
                            <span id="erreurTel" class="erreur"></span>
                        </div>

                        <div class="column is-12-mobile is-offset-1-desktop is-11-desktop">
                            <div class="box-input columns is-mobile input-textarea">
                                <textarea id="message" name="message" class="column is-11" placeholder="Merci de détailler vos besoins."></textarea>
                                <span class="input-obligatoire-message column is-1"><i class="fas fa-asterisk"></i></span>
                            </div>
                            <span id="erreurMessage" class="erreur"></span>


                        </div>

                        <div class="send column is-12 form-button">
                            <button name="message-submit" type="submit" id="form-submit" class="btnSend ml-6"><span>Envoyer</span></button>
                            <input type="hidden" name="hidden" value="1">
                        </div>
                    </div>
                </form>
            </div>
            <div class="map column is-auto-tablet is-2-fullhd" id="map">
                <!-- Ici s'affichera la carte -->
            </div>
        </div>

    </section>


    <?php global $wpdb;
    // Interrogation de la base de données
    $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name = 'adress_client'");
    // Parcours des resultats obtenus
    foreach ($resultats as $post) {
    }
    ?>
    <script>
        var adress_client = "<?PHP echo $post->option_value; ?>";
    </script>
</main>


<?php do_action('display_footer', 'package_footer'); ?>