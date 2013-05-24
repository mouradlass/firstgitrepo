<!DOCTYPE html>
<html  lang=en> 
    <head>

        <title>Acceuil Annonce</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="./js/global.js"></script>
        <script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="./js/script.js"></script>
        <link rel=stylesheet href="./css/style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div id=page>
            <!-- Golbal Header -->
            <header>
                <!-- Logo -->
                <div id=logo>
                    <h1><a href="Acceuil.php">Tuni-annonces</a></h1>
                </div>

                <div class="menu-top">
                    <ul>
                        <li><a href="Professionnel.php">Professionnel</a></li>
                        <li class="space" ></li>
                        <li><a href="Newsletter.php">Newsletter</a></li>
                        <li class="space" ></li>

                        <li><a  class="last" href="Particulier.php">Particulier</a></li>
                        <li class="space" ></li>

                        <li><a  class="last" href="Contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- /Logo -->
            <!-- /slide -->
                <div id="slideImages">
                    <img title="Tuni-annonce" alt="Tuni-annonce" src="img/bann.png" style="display: block; width: 100%;height: 100%; opacity: 0.99;">
                    <img title="Tuni-annonce" alt="Tuni-annonce" src="img/bann2.png" style="display: none; width: 100%;height: 100%; opacity: -0.01;">
                </div>
                <!-- /slide -->
                <!-- Golbal Nav -->
                <nav id=nav>
                    <div class="home"><a href="index.php"></a></div>
                    <ul>
                        <li class=Menu><a href="#"><b></b><span>Immobilier</span></a></li>
                        <li class=Menu><a href="#"><b></b><span>Electronique</span></a></li>
                        <li class=Menu><a href="#"><b></b><span>Auto moto</span></a></li>
                        <li class=Menu><a href="#"><b></b><span>GSM-images et son</span></a></li>
                        <li class=Menu><a href="#"><b></b><span>Services</span></a></li>
                        <li class=last><a href="#"><b></b><span>Contact</span></a></li>
                    </ul>
                </nav>
                 <section class="bar-top">

                    <div class="left"><a href="deposer-annonce.php"><h1>Déposez vos annonces </h1></a></div>
                    <div class="partage">
                        <ul>
                            <li><a href="#" title="twiter"><img src="img/reseau-social-tweet.png" ></a></li>
                            <li><a href="#" title="google plus"><img src="img/reseau-social-google.png" ></a></li>
                            <li><a href="#" title="facebook"><img src="img/reseau-social-fb.png" ></a></li>
                            <li><a href="#" title="Flux rss"><img src="img/reseau-social-rss.png" ></a></a></li>
                        </ul>
                    </div>

                </section>
                <!-- /Golbal Nav -->
            </header>
            <!-- /Golbal Header -->
            <!-- Page-->
            <article id=content class=page-content>
                <section class="content-right">
                    <aside class="connexion">
                        <h1>Connexion</h1>
                        <form action=""  name="AuthForm" method="post" >
                            <input type="text" value="" placeholder="Email" name="login" required="true" >
                            <input type="password" placeholder="Mot de passe" name="password" required="true" >
                            <input type ="submit" value ="Se connecter" name="Connecter">
                            <pre><a href="#">Mot de passe oublié ?</a></pre>
                            <div class="Inscription"><a href="Inscription.php">Créez un compte</a></div>
                        </form>

                    </aside>
                    <aside class="newsletter">
                        <h1>Newsletter</h1>
                        <p>Rien  rater des bonnes affaires</p>
                        <p>avec Tuni Annonce</p>
                        <form action=" " class="newsletterForm" name="newsletterForm" method="post" >
                            <input type="email" name="email" id="email"  required="true" />
                            <input type ="submit" value="S'inscrire" >
                        </form>
                    </aside> 
                </section>
                <section class="content-center">
                     <article id="derniers-annonces">

                        <ul class="annonces">
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/phone.png"></li>
                                    <li class="annonces-details">
                                    <p>GSM 7200</p>
                                    <p>GSM-Image et son</p>
                                    <p class="dolar">90$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/camion.png"></li>
                                    <li class="annonces-details">
                                    <p>Camion à vendre</p>
                                    <p>Auto-moto</p>
                                    <p class="dolar">30000$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/Villa.png"></li>
                                    <li class="annonces-details">
                                    <p>Villa à louer</p>
                                    <p>Immoblier</p>
                                    <p class="dolar">2000$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/departement.png"></li>
                                    <li class="annonces-details">
                                    <p>Département à louer</p>
                                    <p>Immoblier</p>
                                    <p class="dolar">300$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/cuisine.png"></li>
                                    <li class="annonces-details">
                                    <p>Cuisine moderne</p>
                                    <p>Immoblier</p>
                                    <p class="dolar">1500$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/camera.png"></li>
                                    <li class="annonces-details">
                                    <p>Camera à vendre</p>
                                    <p>Elécronique</p>
                                    <p class="dolar">600$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/scoteur.png"></li>
                                    <li class="annonces-details">
                                    <p>Scoteur à vendre</p>
                                    <p>Auto-moto</p>
                                    <p class="dolar">700$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/teliviseur.png"></li>
                                    <li class="annonces-details">
                                    <p>Télivisur Plazma</p>
                                    <p>Eléctronique</p>
                                    <p class="dolar">900$</p>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <ul>
                                    <li class="annonces-thumbnail"><img src="img/meuble.png"></li>
                                    <li class="annonces-details">
                                    <p>Meuble en rotin</p>
                                    <p>Immoblier</p>
                                    <p class="dolar">200$</p>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </article>
                    
                </section>
            </article>
            <!-- / Page-->
            <!-- Global Footer -->
            <footer id="footer">

                    <div><h1>Annonces Immobiler</h1>
                        <ul>
                            <li><a href="#">Offres de vente</a></li>
                            <li><a href="#">Offres de location</a></li>
                            <li><a href="#">Demandes de vente</a></li>
                            <li><a href="#">Demandes de location</a></li>
                        </ul>
                    </div>

                    <div>
                        <h1>Annonce Electronique</h1>
                        <ul>
                            <li><a href="#">Offres de vente</a></li>
                            <li><a href="#">Offres de location</a></li>
                            <li><a href="#">Demandes de vente</a></li>
                            <li><a href="#">Demandes de location</a></li>
                        </ul>
                    </div>
                    <div><h1>Annonce Auto-moto</h1>
                        <ul>
                            <li><a href="#">Voitures d'occasion</a></li>
                            <li><a href="#">Moto d'occasion</a></li>
                            <li><a href="#">Camion d'occasion</a></li>
                            <li><a href="#">Pieces autos-accessoires</a></li>
                        </ul>
                    </div>
                <div class="last"><h1>Annonce Télé-média</h1>
                        <ul>
                            <li><a href="#">GSM</a></li>
                            <li><a href="#">DVD</a></li>
                            <li><a href="#">Télévisions et paraboles</a></li>
                            <li><a href="#">Appareil photos</a></li>
                        </ul>
                    </div>



            </footer>
            <!-- /Global Footer -->
        </div>
        
    </body>
</html>
