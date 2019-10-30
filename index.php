<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Derbeca</title>
</head>
<body>
    <div id="app">
    <header>
    <!-- PREMIER PAGE PRÉSENTATION -->
        <section  v-show="menuActif == 'menu1'">
            <div id="couverture">
                <a @click="menuActif = 'menu3'" href="#"><img src="assets/images/rebecaGris.jpg"></a>
            </div>
            <div id="logo">
                <a href="#"><img src="assets/images/logo_derbeca.png"></a>
            </div>
            <div id="dibujo">
                <img src="assets/images/ilustrationcover.jpg">
            </div>
            <div id="dibujoGrand" class="montrer">
                <img src="assets/images/ilustrationcoverGrand.jpg">
            </div>
        </section>
        <!-- EN-TETE -->
        <nav v-show="menuActif != 'menu1'">
            <div id="logo2">
                <a @click="menuActif = 'menu1'" href="#"><img src="assets/images/logo_derbeca.png"></a>
                <a href="https://www.linkedin.com/in/rebeca-gruber-p%C3%A9rez-48a65583/"><img src="assets/images/logo_linkedin.png" alt="linkedin" id="linkedin"></a>
            </div>
            <ul id="menu">
                <li><a @click="menuActif = 'menu3'" href="#">• ABOUT ME •</a></li>
                <li><a href="#">• PROJETS •</a>
                    <ul id="submenu">
                        <li><a @click="menuActif = 'menu4'" href="#">Illustration</a></li>
                        <li><a @click="menuActif = 'menu5'" href="#">Graphisme</a></li>
                        <li><a @click="menuActif = 'menu6'" href="#">Web</a></li>
                        <li><a @click="menuActif = 'menu7'" href="#">Travail Collaboratif</a></li>
                    </ul>
                </li>
                <li><a @click="menuActif = 'menu8'" href="#">• CONTACT •</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- À PROPOS DE MOI -->
        <section id="moi" class="texte" v-show="menuActif == 'menu3'">
            <div id="aboutMe">
                <img src="assets/images/rebecaGrisMitad2.jpg" id="mitad2">
                <img src="assets/images/rebecaGrisMitad.jpg" id="mitad1">
                <p>
                    Salut! Je m'appelle Rebeca Gruber.<br>
                    Je viens de Torrelavega, une petite ville dans le nord de l'Espagne, 
                    mais actuellement j'habite à Marseille.<br>
                    Je suis développeuse fullstack, graphiste et illustratrice.<br>
                    Pour en savoir plus sur moi vous pouvez me contacter par mail ou télecharger mon CV.<br>
                    Je vous conseille de visiter les autres pages de mon site pour voir des examples de mon travail.
                </p>
            </div> 
            <img src="assets/images/logosDev.png" alt="logosDev" id="logosDev">
        </section>
        <!-- GALERIE ILLUSTRATIONS -->
        <section id="illustrations" class="texte" v-show="menuActif == 'menu4'">
            <h3>Projets d'illustration</h3>
            <div class="galerie">
                <img src="assets/images/ilustracion1.jpg" alt="illustration1">
                <img src="assets/images/ilustracion2.jpg" alt="illustration2">
                <img src="assets/images/ilustracion3.jpg" alt="illustration3">
                <img src="assets/images/ilustracion4.jpg" alt="illustration4">
                <img src="assets/images/ilustracion5.jpg" alt="illustration5">
                <img src="assets/images/ilustracion6.jpg" alt="illustration6">
                <img src="assets/images/ilustracion7.jpg" alt="illustration7">
                <img src="assets/images/ilustracion8.jpg" alt="illustration8">
                <img src="assets/images/ilustracion9.jpg" alt="illustration9">
                <img src="assets/images/ilustracion10.jpg" alt="illustration10">
            </div>
        </section>
        <!-- GALERIE GRAPHISME -->
        <section id="graphisme" class="texte" v-show="menuActif == 'menu5'">
            <h3>Projets de graphisme</h3>
            <div class="galerie">
                <img src="assets/images/graphisme1.jpg" alt="graphisme1">
                <img src="assets/images/graphisme2.jpg" alt="graphisme2">
                <img src="assets/images/graphisme3.jpg" alt="graphisme3">
                <img src="assets/images/graphisme4.jpg" alt="graphisme4">
                <img src="assets/images/graphisme5.jpg" alt="graphisme5">
                <img src="assets/images/graphisme6.jpg" alt="graphisme6">
                <img src="assets/images/graphisme7.jpg" alt="graphisme7">
                <img src="assets/images/graphisme8.jpg" alt="graphisme8">
                <img src="assets/images/graphisme9.jpg" alt="graphisme9">
                <img src="assets/images/graphisme10.jpg" alt="graphisme10">
            </div>
        </section>
        <!-- GALERIE WEB -->
        <section id="web" class="texte" v-show="menuActif == 'menu6'">
            <h3>Projets web</h3>
            <div class="galerie">
                <a href="https://github.com/Derbeca/agenda-scolaire"><img src="assets/images/web1.jpg" alt="web1" title="project agenda scolaire"></a>

                <a href="https://github.com/baghdad23/laravel/tree/master/mpequipe"><img src="assets/images/web3.jpg" alt="web3" title="projet en groupe avec laravel"></a>

            </div>
        </section>
        <!-- GALERIE TRAVAILS COLLABORATIFS -->
        <section id="collaboratif" class="texte" v-show="menuActif == 'menu7'">
            <h3>Travails collaboratifs</h3>
            <div class="galerie">
                <img src="assets/images/collaboratif1.jpg" alt="collaboratif1" title="calendrier solidaire">
                <img src="assets/images/collaboratif2.jpg" alt="collaboratif2" title="projet parrinage de chameux">
                <img src="assets/images/collaboratif3.jpg" alt="collaboratif3" title="peinture mural Artifariti 2007">
                <img src="assets/images/collaboratif4.jpg" alt="collaboratif4" title="peinture mural Asociation Culturelle">
            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact" class="texte" v-show="menuActif == 'menu8'">
            <h3>Formulaire de contact</h3>
            <form method="POST" action="api-json.php" class="ajax">
                <label>
                    <span>Nom</span>
                    <input type="text" name="nom" required placeholder="entrez votre nom">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required placeholder="entrez votre email">
                </label>
                <label>
                    <span>Message</span>
                    <textarea name="message" required placeholder="entrez votre message"></textarea>
                </label>
                <input type="hidden" name="idForm" value="contact">
                <button type="submit">ENVOYER</button>
            </form>
            <div class="confirmation">
             {{ message }}
            </div>
        </section>
        <div class="galerieGrand">
            <img src="assets/images/collaboratif1.jpg" alt="collaboratif1">
        </div>
    </main>

    <!-- FOOTER -->
    <footer v-show="menuActif != 'menu1'">
        <p>Tous droits réservés<br>©derbeca-2019</p>
        <a href="assets/images/RebecaGruber.pdf">CV PDF<br>>></a>
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
