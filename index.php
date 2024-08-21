<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <!-- Survey library -->
  <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/survey-jquery@1.11.11/survey.jquery.min.js"></script>
  <script src="https://unpkg.com/survey-jquery@1.11.11/themes/index.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/survey-jquery@1.11.11/defaultV2.min.css" />
  <!-- Slider library -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <style scoped>
    @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@400;700&display=swap");

    /* Root CSS */
    :root {
      --light-background: #f6f7f9;
      --border-radius: 48px;
      --border-radius-mobile: 24px;
      --cs-color: #ff6433;
      --primary-text: #383838;
      --secondary-text: #606060;
      --dominant-color: #f6f7f9;
      --transition: all 0.3s ease;
    }

    #custom-body {
      background-color: #f3f3f3;

      #mode {
        position: fixed;
        left: 50%;
        top: 20px;
        transform: translateX(-50%);
        z-index: 50;
        background-color: white;
        padding: 8px 20px;
        border-radius: 5px;
        border: solid 2px #ff6433;
        outline: none;
        font-size: 18px;
        font-weight: bold;
      }

      #surveyElement {
        padding-top: 50px;
      }

      /* Plantilla detalle compañía */

      .d-none-company {
        display: none !important;
      }

      #company-mode-container {
        z-index: 20;
        display: block;
        position: absolute;
        background-color: var(--light-background);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        font-family: "Atkinson Hyperlegible", Sans-serif;
        background-color: var(--light-background);
        color: var(--secondary-text);
        font-size: 18px;
        line-height: 1.5;
        scroll-behavior: smooth;

        /* Reset CSS */
        * {
          min-width: 0;
          font: 'Atkinson Hyperlegible', sans-serif;
          margin: 0;
          padding: 0;
        }

        *,
        *::before,
        *::after {
          box-sizing: border-box;
        }

        img,
        video,
        svg {
          display: block;
          height: auto;
          max-width: 100%;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          text-wrap: balance;
          color: var(--primary-text);
          font-size: 48px;
          font-weight: bold;
        }

        @media screen and (max-width: 768px) {

          h1,
          h2,
          h3,
          h4,
          h5,
          h6 {
            font-size: 32px;
          }
        }

        p {
          text-wrap: pretty;
        }

        /* Custom CSS */
        a {
          transition: all 0.3s ease;
        }

        h2 {
          margin-bottom: 20px;
        }

        .banner {
          -o-object-fit: cover;
          object-fit: cover;
          width: 100%;
          height: 50vh;
          filter: drop-shadow(0 0 3em var(--dominant-color));
        }

        @media screen and (max-width: 1240px) {
          .banner {
            border-radius: 0 0 24px 24px;
          }
        }

        .container {
          background-color: white;
          min-height: 150px;
          border-radius: var(--border-radius);
          padding: 32px;
        }

        .back-button {
          position: absolute;
          left: 20px;
          top: 20px;
          display: flex;
          align-items: center;
          gap: 10px;
          text-decoration: none;
          color: white;
          background-color: rgba(0, 0, 0, 0.3137254902);
          padding: 10px;
          border-radius: var(--border-radius-mobile);
          transition: var(--transition);
        }

        .back-button:hover {
          background-color: rgba(0, 0, 0, 0.5019607843);
        }

        .back-button .bi {
          font-size: 32px;
        }

        .slick-slide {
          margin-left: 27px;
        }

        /* the parent */
        .slider {
          margin-left: -27px;
        }

        .clase-card {
          display: grid;
          gap: 10px;
          border-radius: 24px;
          overflow: hidden;
          background-color: var(--light-background);
          cursor: grabbing;
        }

        .clase-card div {
          padding: 15px;
        }

        .clase-card div h3 {
          font-size: 36px;
        }

        .clase-card div a {
          width: 100%;
          margin-top: 3%;
          height: 60px;
          background: var(--cs-color);
          border-radius: 10px;
          font-style: normal;
          font-weight: 700;
          font-size: 20px;
          line-height: 25px;
          text-align: center;
          color: #fff;
          display: flex;
          align-items: center;
          place-content: space-evenly;
          text-decoration: none;
        }

        .clase-card div a:hover {
          color: var(--cs-color);
          background-color: white;
          border: solid 1px var(--cs-color);
        }

        .company-intro {
          display: flex;
          gap: 20px;
          padding: 20px 40px;
          max-width: 1200px;
          margin: 0 auto;
          transform: translateY(-50%);
          align-items: center;
          justify-content: space-between;
        }

        .company-intro .company-info {
          display: flex;
          gap: 20px;
        }

        @media screen and (max-width: 600px) {
          .company-intro .company-info {
            display: grid;
            text-align: center;
            justify-content: center;
          }
        }

        .company-intro .logo {
          max-width: 150px;
          border-radius: var(--border-radius);
          -o-object-fit: cover;
          object-fit: cover;
        }

        @media screen and (max-width: 600px) {
          .company-intro .logo {
            display: grid;
            text-align: center;
            justify-content: center;
            margin: auto;
          }
        }

        .company-intro #contact-mobile {
          display: none;
        }

        .company-intro ul {
          display: grid;
          list-style: none;
          gap: 10px;
        }

        .company-intro ul a {
          text-decoration: none;
          color: var(--primary-text);
        }

        .company-intro ul a:hover {
          text-decoration: underline;
        }

        @media screen and (max-width: 600px) {
          .company-intro ul {
            justify-content: center;
          }
        }

        @media screen and (max-width: 1100px) {
          .company-intro {
            display: grid;
            align-items: center;
            justify-content: center;
            gap: 10px;
          }

          .company-intro #contact-desktop {
            display: none;
          }

          .company-intro #contact-mobile {
            display: flex;
            gap: 20px;
            margin: 20px auto 0 auto;
            flex-wrap: wrap;
          }
        }

        @media screen and (max-width: 1240px) {
          .company-intro {
            margin: 0 20px;
          }
        }

        @media screen and (max-width: 768px) {
          .company-intro .logo {
            max-width: 100px;
            border-radius: var(--border-radius-mobile);
          }
        }

        .company-intro span {
          font-size: 24px;
          font-weight: 400;
        }

        @media screen and (max-width: 768px) {
          .company-intro span {
            font-size: 20px;
          }
        }

        .company-wrapper {
          display: grid;
          grid-template-columns: 1fr 3fr;
          max-width: 1200px;
          padding: 20px;
          margin: 0 auto;
          gap: 20px;
        }

        @media screen and (max-width: 1100px) {
          .company-wrapper {
            grid-template-columns: 1fr;
          }
        }

        .company-wrapper .info-wrapper {
          display: grid;
          gap: 20px;
        }

        .company-wrapper .info-wrapper .about-container {
          display: grid;
        }

        .company-wrapper .info-wrapper .gallery-container .gallery-item {
          overflow: hidden;
          border-radius: var(--border-radius-mobile);
        }

        .company-wrapper .info-wrapper .gallery-container .gallery-item .gallery-image {
          -o-object-fit: cover;
          object-fit: cover;
          width: 100%;
          height: 100%;
          transition: var(--transition);
        }

        .company-wrapper .info-wrapper .gallery-container .gallery-item .gallery-image:hover {
          opacity: 0.7;
          cursor: pointer;
          transform: scale(1.1);
        }

        .company-wrapper .navigation-container {
          height: 100%;
        }

        .company-wrapper .navigation-container .navigation-sticky {
          position: sticky;
          top: 32px;
        }

        .company-wrapper .navigation-container .navigation-sticky ul {
          display: grid;
          list-style: disc;
          margin-left: 16px;
          gap: 20px;
          margin-top: 16px;
        }

        .company-wrapper .navigation-container .navigation-sticky ul a:hover {
          text-decoration: underline;
        }

        @media screen and (max-width: 1100px) {
          .company-wrapper .navigation-container .navigation-sticky ul {
            grid-template-columns: 1fr 1fr 1fr;
          }
        }

        @media screen and (max-width: 768px) {
          .company-wrapper .navigation-container .navigation-sticky ul {
            grid-template-columns: 1fr 1fr;
          }
        }

        @media screen and (max-width: 600px) {
          .company-wrapper .navigation-container .navigation-sticky ul {
            grid-template-columns: 1fr;
          }
        }

        .company-wrapper .navigation-container .navigation-sticky ul a {
          text-decoration: none;
          color: var(--secondary-text);
          transition: var(--transition);
        }

        .company-wrapper .navigation-container .navigation-sticky ul a:hover {
          color: var(--primary-text);
        }

        @media screen and (max-width: 1100px) {
          .company-wrapper .navigation-container .navigation-sticky {
            position: inherit;
          }
        }

        #mentoria a {
          width: 100%;
          margin-top: 3%;
          height: 60px;
          background: var(--cs-color);
          border-radius: 10px;
          font-style: normal;
          font-weight: 700;
          font-size: 20px;
          line-height: 25px;
          text-align: center;
          color: #fff;
          display: flex;
          align-items: center;
          place-content: space-evenly;
          text-decoration: none;
        }

        #mentoria a:hover {
          color: var(--cs-color);
          background-color: white;
          border: solid 1px var(--cs-color);
        }

        .exito-item {
          border-radius: var(--border-radius-mobile);
          overflow: hidden;
        }
      }
    }
  </style>
</head>

<body id="custom-body">
  <!-- select -->
  <select name="mode" id="mode">
    <option value="1">Formulario</option>
    <option value="2">Vista Previa</option>
  </select>
  <!-- form -->
  <div id="surveyElement" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; min-height: 100%; height:100%"></div>
  <!-- plantilla detalle compañía -->
  <div id="company-mode-container" class="d-none-company">

    <main>
      <!-- Hero -->
      <div>
        <!-- Banner -->
        <img class="banner" src="" alt="">
        <!-- Logo and Company intro -->
        <div class="company-intro container">
          <div class="company-info">
            <img class="logo" src="" alt="">
            <div>
              <h1></h1>
              <span></span>
              <!-- Contact Links -->
              <ul class="contact-list" id="contact-mobile">
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-globe"></i>
                    Web
                  </a>
                </li>
                <li>
                  <a href="mailto:">
                    <i class="bi bi-envelope"></i>

                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="bi bi-telephone"></i>
                    echo htmlspecialchars($companyPhone);
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-linkedin"></i>
                    Linkedin
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-mic-fill"></i>
                    Podcast
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-facebook"></i>
                    Facebook
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-twitter-x"></i>
                    Twitter
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <i class="bi bi-instagram"></i>
                    Instagram
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Contact Links -->
          <ul class="contact-list" id="contact-desktop">
            <li>
              <a href="" target="_blank">
                <i class="bi bi-globe"></i>
                Web
              </a>
            </li>
            <li>
              <a href="mailto:">
                <i class="bi bi-envelope"></i>

              </a>
            </li>
            <li>
              <a href="">
                <i class="bi bi-telephone"></i>
                echo htmlspecialchars($companyPhone);
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <i class="bi bi-linkedin"></i>
                Linkedin
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <i class="bi bi-mic-fill"></i>
                Podcast
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <i class="bi bi-facebook"></i>
                Facebook
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <i class="bi bi-twitter-x"></i>
                Twitter
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <i class="bi bi-instagram"></i>
                Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="company-wrapper">
        <!-- Contact-->
        <div class="navigation-container container">
          <div class="navigation-sticky">
            <h2>Índice</h2>
            <ul>
              <li><a href="#destacado">Contenido destacado</a></li>
              <li><a href="#sobre">Sobre</a></li>
              <li><a href="#clases">Clases</a></li>
              <li><a href="#workshop">Workshop</a></li>
              <li><a href="#articulos">Artículos</a></li>
              <li><a href="#casos">Casos de éxito</a></li>
              <li><a href="#mentoria">Mentorías</a></li>
            </ul>
          </div>
        </div>
        <div class="info-wrapper">
          <!-- Gallery / Featured content -->
          <div class="container" id="destacado">
            <h2>Contenido destacado</h2>
            <div class="gallery-container slider">
              <a href="" target="_blank" class="gallery-item">
                <img src="" class="gallery-image">
              </a>
            </div>
          </div>
          <!-- About -->
          <div class="about-container container" id="sobre">
            <h2></h2>
            <p></p>
          </div>
          <!-- Clases -->
          <div class="container" id="clases">
            <h2>Clases y capacitaciones</h2>
            <div class="slider">
              <div class="clase-card">
                <img src="./assets/clase.webp" alt="" srcset="">
                <div>
                  <h3>Nombre Curso</h3>
                  <p>Categoria</p>
                  <a href="">Acceder</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/clase.webp" alt="" srcset="">
                <div>
                  <h3>Nombre Curso</h3>
                  <p>Categoria</p>
                  <a href="">Acceder</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/clase.webp" alt="" srcset="">
                <div>
                  <h3>Nombre Curso</h3>
                  <p>Categoria</p>
                  <a href="">Acceder</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/clase.webp" alt="" srcset="">
                <div>
                  <h3>Nombre Curso</h3>
                  <p>Categoria</p>
                  <a href="">Acceder</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/clase.webp" alt="" srcset="">
                <div>
                  <h3>Nombre Curso</h3>
                  <p>Categoria</p>
                  <a href="">Acceder</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Workshop -->
          <div class="container" id="workshop">
            <h2>Visita nuestro último Workshop</h2>
            <iframe width="100%" height="440" src="https://www.youtube-nocookie.com/embed/raFFOPu9uHA?si=ys2Q7qDS048PYkVl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <!-- Articulos -->
          <div class="container" id="articulos">
            <h2>Últimos articulos</h2>
            <div class="slider">
              <div class="clase-card">
                <img src="./assets/art1.png" alt="" srcset="">
                <div>
                  <h3>Nombre Articulo</h3>
                  <p>Marketing</p>
                  <a href="">Visitar</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/art2.png" alt="" srcset="">
                <div>
                  <h3>Nombre Articulo</h3>
                  <p>Negocios</p>
                  <a href="">Visitar</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/art1.png" alt="" srcset="">
                <div>
                  <h3>Nombre Articulo</h3>
                  <p>Categoria</p>
                  <a href="">Visitar</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/art2.png" alt="" srcset="">
                <div>
                  <h3>Nombre Articulo</h3>
                  <p>Categoria</p>
                  <a href="">Visitar</a>
                </div>
              </div>
              <div class="clase-card">
                <img src="./assets/art1.png" alt="" srcset="">
                <div>
                  <h3>Nombre Articulo</h3>
                  <p>Categoria</p>
                  <a href="">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Casos de éxito -->
          <div class="container" id="casos">
            <h2>Casos de éxito</h2>
            <div class="slider">
              <a href="" target="_blank" class="exito-item">
                <img src="" class="exito-image">
              </a>
            </div>
          </div>
          <!-- Mentoria -->
          <div class="container" id="mentoria">
            <h2>Solicita una mentoría gratuita</h2>
            <p>Aprovecha esta llamada sin costo para recibir asesoría personalizada y descubrir cómo podemos ayudarte a alcanzar tus metas. ¡No te lo pierdas y agenda tu sesión hoy mismo!</p>
            <a href="">Agendar mentoría</a>
            <!-- Final del widget de enlace de Calendly -->
          </div>
        </div>
      </div>
    </main>
    <!-- Slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
      $('.slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </div>
  <script>
    /* Form theme */
    const themeJson = {
      "themeName": "default",
      "colorPalette": "light",
      "isPanelless": false,
      "backgroundImage": "",
      "backgroundOpacity": 1,
      "backgroundImageAttachment": "scroll",
      "backgroundImageFit": "cover",
      "cssVariables": {
        "--sjs-corner-radius": "4px",
        "--sjs-base-unit": "8px",
        "--sjs-shadow-small": "0px 0px 0px 0px rgba(228, 228, 228, 1)",
        "--sjs-shadow-inner": "0px 0px 0px 0px rgba(0, 0, 0, 1)",
        "--sjs-border-default": "rgba(0, 0, 0, 0.16)",
        "--sjs-border-light": "rgba(0, 0, 0, 0.09)",
        "--sjs-general-backcolor": "rgba(255, 255, 255, 1)",
        "--sjs-general-backcolor-dark": "rgba(248, 248, 248, 1)",
        "--sjs-general-backcolor-dim-light": "rgba(249, 249, 249, 1)",
        "--sjs-general-backcolor-dim-dark": "rgba(243, 243, 243, 1)",
        "--sjs-general-forecolor": "rgba(0, 0, 0, 0.91)",
        "--sjs-general-forecolor-light": "rgba(0, 0, 0, 0.45)",
        "--sjs-general-dim-forecolor": "rgba(0, 0, 0, 0.91)",
        "--sjs-general-dim-forecolor-light": "rgba(0, 0, 0, 0.45)",
        "--sjs-secondary-backcolor": "rgba(255, 152, 20, 1)",
        "--sjs-secondary-backcolor-light": "rgba(255, 152, 20, 0.1)",
        "--sjs-secondary-backcolor-semi-light": "rgba(255, 152, 20, 0.25)",
        "--sjs-secondary-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-secondary-forecolor-light": "rgba(255, 255, 255, 0.25)",
        "--sjs-shadow-small-reset": "0px 0px 0px 0px rgba(228, 228, 228, 1)",
        "--sjs-shadow-medium": "0px 2px 6px 0px rgba(0, 0, 0, 0.1)",
        "--sjs-shadow-large": "0px 8px 16px 0px rgba(0, 0, 0, 0.1)",
        "--sjs-shadow-inner-reset": "0px 0px 0px 0px rgba(0, 0, 0, 1)",
        "--sjs-border-inside": "rgba(0, 0, 0, 0.16)",
        "--sjs-special-red-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-green": "rgba(25, 179, 148, 1)",
        "--sjs-special-green-light": "rgba(25, 179, 148, 0.1)",
        "--sjs-special-green-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-blue": "rgba(67, 127, 217, 1)",
        "--sjs-special-blue-light": "rgba(67, 127, 217, 0.1)",
        "--sjs-special-blue-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-yellow": "rgba(255, 152, 20, 1)",
        "--sjs-special-yellow-light": "rgba(255, 152, 20, 0.1)",
        "--sjs-special-yellow-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-article-font-xx-large-textDecoration": "none",
        "--sjs-article-font-xx-large-fontWeight": "700",
        "--sjs-article-font-xx-large-fontStyle": "normal",
        "--sjs-article-font-xx-large-fontStretch": "normal",
        "--sjs-article-font-xx-large-letterSpacing": "0",
        "--sjs-article-font-xx-large-lineHeight": "64px",
        "--sjs-article-font-xx-large-paragraphIndent": "0px",
        "--sjs-article-font-xx-large-textCase": "none",
        "--sjs-article-font-x-large-textDecoration": "none",
        "--sjs-article-font-x-large-fontWeight": "700",
        "--sjs-article-font-x-large-fontStyle": "normal",
        "--sjs-article-font-x-large-fontStretch": "normal",
        "--sjs-article-font-x-large-letterSpacing": "0",
        "--sjs-article-font-x-large-lineHeight": "56px",
        "--sjs-article-font-x-large-paragraphIndent": "0px",
        "--sjs-article-font-x-large-textCase": "none",
        "--sjs-article-font-large-textDecoration": "none",
        "--sjs-article-font-large-fontWeight": "700",
        "--sjs-article-font-large-fontStyle": "normal",
        "--sjs-article-font-large-fontStretch": "normal",
        "--sjs-article-font-large-letterSpacing": "0",
        "--sjs-article-font-large-lineHeight": "40px",
        "--sjs-article-font-large-paragraphIndent": "0px",
        "--sjs-article-font-large-textCase": "none",
        "--sjs-article-font-medium-textDecoration": "none",
        "--sjs-article-font-medium-fontWeight": "700",
        "--sjs-article-font-medium-fontStyle": "normal",
        "--sjs-article-font-medium-fontStretch": "normal",
        "--sjs-article-font-medium-letterSpacing": "0",
        "--sjs-article-font-medium-lineHeight": "32px",
        "--sjs-article-font-medium-paragraphIndent": "0px",
        "--sjs-article-font-medium-textCase": "none",
        "--sjs-article-font-default-textDecoration": "none",
        "--sjs-article-font-default-fontWeight": "400",
        "--sjs-article-font-default-fontStyle": "normal",
        "--sjs-article-font-default-fontStretch": "normal",
        "--sjs-article-font-default-letterSpacing": "0",
        "--sjs-article-font-default-lineHeight": "28px",
        "--sjs-article-font-default-paragraphIndent": "0px",
        "--sjs-article-font-default-textCase": "none",
        "--sjs-general-backcolor-dim": "rgba(243, 243, 243, 1)",
        "--sjs-primary-backcolor": "rgba(255, 100, 51, 1)",
        "--sjs-primary-backcolor-dark": "rgba(240, 94, 48, 1)",
        "--sjs-primary-backcolor-light": "rgba(255, 100, 51, 0.1)",
        "--sjs-primary-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-primary-forecolor-light": "rgba(255, 255, 255, 0.25)",
        "--sjs-special-red": "rgba(229, 10, 62, 1)",
        "--sjs-special-red-light": "rgba(229, 10, 62, 0.1)"
      },
      "header": {
        "inheritWidthFrom": "survey"
      },
      "headerView": "basic"
    }
    /* Form json */
    const json = {
      "locale": "es",
      "logoPosition": "right",
      "pages": [{
          "name": "business-info",
          "title": "Ingrese la información de su empresa\n",
          "description": {
            "default": "\n",
            "es": ".\n"
          },
          "elements": [{
              "type": "text",
              "name": "question1",
              "title": "Nombre de la empresa",
              "isRequired": true
            },
            {
              "type": "text",
              "name": "question4",
              "title": "Rubro",
              "isRequired": true,
              "placeholder": "Ej. Plataforma de educación"
            },
            {
              "type": "comment",
              "name": "question7",
              "title": "Descripción",
              "isRequired": true,
              "maxLength": 1000
            },
            {
              "type": "file",
              "name": "question5",
              "title": "Logo",
              "isRequired": true,
              "maxSize": 153600
            },
            {
              "type": "file",
              "name": "question6",
              "title": "Banner",
              "isRequired": true,
              "maxSize": 256000
            }
          ]
        },
        {
          "name": "contact",
          "title": "Ingrese su información de contacto",
          "description": {
            "es": "."
          },
          "elements": [{
            "type": "multipletext",
            "name": "question3",
            "title": "Ingrese sus enlaces de contacto\n",
            "items": [{
                "name": "phone",
                "placeholder": "+1 234 567 8900",
                "inputType": "tel",
                "title": "Teléfono"
              },
              {
                "name": "mail",
                "placeholder": "example@mail.com",
                "inputType": "email",
                "title": "Correo"
              },
              {
                "name": "web",
                "placeholder": "www.example.com",
                "inputType": "url",
                "title": "Web\n"
              },
              {
                "name": "fb",
                "placeholder": "www.facebook.com/example",
                "inputType": "url",
                "title": "Facebook"
              },
              {
                "name": "tw",
                "placeholder": "www.twitter.com/example",
                "inputType": "url",
                "title": "Twitter"
              },
              {
                "name": "ig",
                "placeholder": "www.instagram.com/example",
                "inputType": "url",
                "title": "Instagram"
              },
              {
                "name": "linkedin",
                "placeholder": "www.linkedin.com/in/example",
                "inputType": "url",
                "title": "Linkedin"
              },
              {
                "name": "podcast",
                "placeholder": "www.example.com/podcast",
                "inputType": "url",
                "title": "Podcast\n"
              }
            ]
          }]
        },
        {
          "name": "articles",
          "title": "Agregue publicaciones y articulos",
          "elements": [{
            "type": "paneldynamic",
            "name": "question2",
            "title": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
            "templateElements": [{
                "type": "file",
                "name": "thumbnail",
                "title": {
                  "default": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                  "es": "Miniatura del artículo (peso máximo de la imagen: 150kb)"
                },
                "isRequired": true,
                "maxSize": 153600,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "title",
                "title": "Título del artículo",
                "isRequired": true
              },
              {
                "type": "text",
                "name": "category",
                "title": "Categoría del artículo",
                "isRequired": true,
                "placeholder": "Ej. Marketing",
                "dataList": [
                  "Marketing",
                  "Tecnología",
                  "Ventas"
                ]
              }
            ],
            "maxPanelCount": 5
          }]
        },
        {
          "name": "success",
          "title": {
            "default": "Agregue publicaciones y articulos",
            "es": "Casos de éxito"
          },
          "elements": [{
            "type": "paneldynamic",
            "name": "question10",
            "title": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
            "templateElements": [{
                "type": "file",
                "name": "question11",
                "title": {
                  "default": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                  "es": "Miniatura del caso de éxito (peso máximo de la imagen: 150kb)"
                },
                "isRequired": true,
                "maxSize": 153600,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "question12",
                "title": {
                  "default": "Título del artículo",
                  "es": "Enlace al caso de éxito"
                },
                "isRequired": true,
                "inputType": "url",
                "placeholder": {
                  "es": "https://www.youtube.com/watch?v=exampleID"
                }
              }
            ],
            "maxPanelCount": 5
          }]
        },
        {
          "name": "content",
          "title": {
            "default": "Agregue publicaciones y articulos",
            "es": "Contenido destacado"
          },
          "elements": [{
            "type": "paneldynamic",
            "name": "question13",
            "title": {
              "default": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
              "es": "En esta sección podrás agregar contenido personalizado como servicios, productos, descuentos, anuncios, etc."
            },
            "templateElements": [{
                "type": "file",
                "name": "question14",
                "title": {
                  "default": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                  "es": "Miniatura del contenido (peso máximo de la imagen: 150kb)"
                },
                "isRequired": true,
                "maxSize": 153600,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "question15",
                "title": {
                  "default": "Título del artículo",
                  "es": "Enlace al contenido"
                },
                "isRequired": true,
                "inputType": "url",
                "placeholder": {
                  "es": "https://www.example.com"
                }
              }
            ],
            "maxPanelCount": 5
          }]
        },
        {
          "name": "mentoring",
          "title": "Mentorías",
          "description": "Si te gustaría ofrecer mentorías/reuniones ingrese su enlace de invitación de calendly",
          "elements": [{
            "type": "text",
            "name": "question8",
            "title": "Calendly",
            "inputType": "url",
            "placeholder": {
              "es": "https://calendly.com/username/event-name"
            }
          }]
        },
        {
          "name": "workshop",
          "title": {
            "es": "Workshop/Webinar"
          },
          "elements": [{
            "type": "text",
            "name": "question9",
            "title": {
              "es": "Workshop/Webinar"
            },
            "inputType": "url",
            "placeholder": {
              "es": "https://www.youtube.com/watch?v=exampleID"
            }
          }]
        }
      ],
      "showPageNumbers": true
    }
    /* Form exec */
    const survey = new Survey.Model(json);
    survey.applyTheme(themeJson);
    survey.onValueChanged.add(function(sender, options) {
      // Consologuear todos los datos de la encuesta
      console.log(sender.data);
    });

    survey.onComplete.add((sender, options) => {
      console.log(sender.data);
      //console.log(JSON.stringify(sender.data, null, 3));
    });

    /* Mode handler */
    $("#mode").on("change", function() {
      const mode = $(this).val();
      if (mode == 1) {
        $("#company-mode-container").addClass("d-none-company");
      } else if (mode == 2) {
        $("#company-mode-container").removeClass("d-none-company");
      }
    });
  </script>
</body>

</html>