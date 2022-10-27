
<!doctype html>
<html lang="en">
  <head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesaccueil.css">

  </head>
  <body>
<!--NavBar-->
    <header id="header">
      <nav class="navbar navbar-expand-lg shadow-lg mb-4 bg-light fixed-top">
        <div class="container-fluid">
          <a class="nav-link text-dark fw-bold fs-4" style="margin-right: 10px; margin-left: 10px" href="index.html">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">A propos</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="portfolio.php">Portfolio</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="contact.php">Contact</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">CV</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
<!--Introduction-->
    <section class="introduction">
<!--Titre-->
      <h3 class="section__title section__title--intro">
          Bonjour, Je suis <strong>Lucie Quintana</strong>
      </h3>
      <p class="section__subitle section__subtitle--intro">Developpeuse Jeux Vidéo</p>
<!--Image intro-->
      <img src="Image/grrr.jpg" alt="image error" class="imgintro">
    </section>
    <section class="my-services" id="services">
      <h2 class="section__title section__title--services">Ce que je fais</h2>
      <div class="services">
<!-- Service 1 -->
          <div class="service">
              <h3>Developpeuse Jeux Vidéo </h3>
              <p>En maîtrisant les techniques de codage, un développeur de jeux vidéo est un personnage essentiel dans la création d’un jeu. Engagé à tous les niveaux auprès de l’équipe de production, il donne vie au jeu.</p>
      </div>
<!-- Service 2 -->
      <div class="service">
          <h3>Tools Programmeuse</h3>
          <p>Essentiel lors de la création d’un jeu vidéo, le tools programmer est celui qui va améliorer l’efficacité de la production en fournissant et en améliorant les outils de création, l’éditeur de jeu, mais aussi en ajoutant de nouvelles fonctionnalités.</p>
      </div>
<!-- Service 3 -->      
      <div class="service">
          <h3>Programmeuse Jeux Mobiles</h3>
          <p>Un programmeur mobile jeu vidéo est la personne qui va donner vie à un jeu vidéo sur smartphone ou tablette grâce à ses talents de codeur.</p>
      </div>
<!-- Bouton travail redirige vers Mon Travail -->
  </div>
  <a href="#mon travail" class="btn">Mon travail</a>
  </section>

<!-- A Propos into-->
  <section class="about-me" id="about">
      <h2 class="section__title section__title--about">Qui je suis</h2>
      <p class="section__subtitle section__subtitle--about">Developpeuse basé à Paris</p>
<!--A propos Texte-->
      <div class="about-me__body">
          <p>Jeune étudiante  passioné de jeux vidéo. Je suis actuellement en premier année au Gaming Campus en technologie spécialisé en jeux vidéo pour un Bachelor puis un Master en alternance au Canada. </p>
          <p>A ajouter plus tard</p>
      </div>
<!--Image A propos-->
      <img src="Image/gamingcampus.png" alt="mike learning against a bus" class="about-me__img">
  </section>
  <a href="A Propos.html" class="btn">Cliquez ici pour en savoir d'avantage</a>

<!-- Portfolio Intro-->
  <section class="my-work" id="mon travail">
      <h2 class="section__title section__title--work" >Portfolio</h2>
      <p class="section__subtitle section__subtitle--work">Une sélection de ma gamme de travail</p>

<!-- Portfolio-->
      <div class="portfolio">

<!-- Portfolio page 1-->
          <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 1.jpg" class="portfolio-img" alt="Image error">
          </a>
<!-- Portfolio page 2-->
           <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 2.jpg" class="portfolio-img" alt="Image error">
          </a>
<!-- Portfolio page 3-->
           <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 3.jpg" class="portfolio-img" alt="Image error">
          </a>
<!-- Portfolio page 4-->
           <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 4.jpg" class="portfolio-img" alt="Image error">
          </a>
<!-- Portfolio page 5-->
           <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 5.jpg" class="portfolio-img" alt="Image error">
          </a>
<!-- Portfolio page 6-->
           <a href="portfolio.html" class="portfolio__item">
              <img src="Image/image item 6.jpg" class="portfolio-img" alt="Image error">
          </a>
          <a href="portfolio.html" class="btn">Cliquez ici pour en voir d'avantage</a>
      </div>
  </section>

<!-- Contact--> 
  <footer class="footer" id="Contact">
    <h2> Contact</h2>
      <a href="lucie.quintana04@gmail.com" class="footer__link">lucie.quintana04@gmail.com</a>
      <ul class="social-list">
          <li class="social-list__item"><a href="#" class="social-list__link">Linkedin</a></li>
          <li class="social-list__item"><a href="#" class="social-list__link">Instagram</a></li>
          <li class="social-list__item"><a href="https://www.facebook.com/lucie.quintana.56" class="social-list__link">Facebook</a></li>
      </ul>
 

  </footer>

    
  </body>
