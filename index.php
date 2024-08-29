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
  <script src="https://unpkg.com/survey-core@1.11.12/survey.core.min.js"></script>
  <script src="https://unpkg.com/survey-core@1.11.12/survey.i18n.min.js"></script>
  <script src="https://unpkg.com/survey-core@1.11.12/themes/index.min.js"></script>
  <script src="https://unpkg.com/survey-js-ui@1.11.12/survey-js-ui.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/survey-core@1.11.12/defaultV2.min.css" />
  <!-- Bootstrap tour -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap-tour@0.12.0/build/js/bootstrap-tour.min.js "></script>
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap-tour@0.12.0/build/css/bootstrap-tour.min.css " rel="stylesheet">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        transform: translateX(-500%);
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
          display: flex;
          flex-direction: column;
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
    <option value="1" default>Formulario</option>
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
        <img id="banner" class="banner" style="background-color: #ff6433;" src="https://academia.commercesociety.com/wp-content/uploads/2024/02/Commerce-Society_Mesa-de-trabajo-1-Copia.webp" alt="">
        <!-- Logo and Company intro -->
        <div class="company-intro container">
          <div class="company-info">
            <img id="logo" class="logo" src="https://academia.commercesociety.com/wp-content/uploads/2024/03/Commerce-Society-Simbolo.png" alt="">
            <div>
              <h1 id="nombre">Empresa</h1>
              <span id="rubro">Rubro de la empresa</span>
              <!-- Contact Links -->
              <ul class="contact-list" id="contact-mobile">

              </ul>
            </div>
          </div>
          <!-- Contact Links -->
          <ul class="contact-list" id="contact-desktop">
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
              <li><a href="#sobre" id="sobreIndice">Sobre</a></li>
              <li><a href="#workshop">Workshop</a></li>
              <li><a href="#articulos">Artículos</a></li>
              <li><a href="#casos">Casos de éxito</a></li>
              <li><a href="#mentoria">Mentorías</a></li>
            </ul>
          </div>
        </div>
        <div class="info-wrapper" id="info-wrapper">
        </div>
      </div>
    </main>
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
          "description": "\n",
          "elements": [{
              "type": "text",
              "name": "nombre",
              "title": "Nombre de la empresa",
              "isRequired": true
            },
            {
              "type": "text",
              "name": "rubro",
              "title": "Rubro",
              "isRequired": true,
              "placeholder": "Ej. Plataforma de educación"
            },
            {
              "type": "comment",
              "name": "descripcion",
              "title": "Descripción",
              "isRequired": true,
              "maxLength": 1000
            },
            {
              "type": "file",
              "name": "logo",
              "title": "Logo",
              "isRequired": true
            },
            {
              "type": "file",
              "name": "banner",
              "title": "Banner",
              "isRequired": true
            }
          ]
        },
        {
          "name": "contact-container",
          "title": "Ingrese su información de contacto",
          "elements": [{
            "type": "multipletext",
            "name": "contact",
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
          "name": "articles-container",
          "title": "Agregue publicaciones y articulos",
          "elements": [{
            "type": "paneldynamic",
            "name": "articles",
            "title": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
            "templateElements": [{
                "type": "file",
                "name": "thumbnail",
                "title": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                "isRequired": true,
                "maxSize": 255997,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "urlArticle",
                "title": {
                  "es": "Enlace del articulo"
                },
                "isRequired": true,
                "inputType": "url"
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
                "dataList": {
                  "pos": {
                    "start": 4099,
                    "end": 4247
                  },
                  "es": [
                    "Marketing",
                    "Tecnología",
                    "Ventas"
                  ]
                }
              }
            ],
            "maxPanelCount": 5
          }]
        },
        {
          "name": "exitos-container",
          "title": {
            "default": "Agregue publicaciones y articulos",
            "es": "Casos de éxito\n"
          },
          "elements": [{
            "type": "paneldynamic",
            "name": "exitos",
            "title": {
              "default": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
              "es": "Agregue sus casos de éxito, con su respectiva imagen y enlace."
            },
            "templateElements": [{
                "type": "file",
                "name": "thumbnailExitos",
                "title": {
                  "default": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                  "es": "Miniatura del caso de éxito (peso máximo de la imagen: 250kb)"
                },
                "isRequired": true,
                "maxSize": 255997,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "urlExitos",
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
          "name": "mentorias",
          "title": "Mentorías",
          "description": "Si te gustaría ofrecer mentorías/reuniones ingrese su enlace de invitación de calendly",
          "elements": [{
            "type": "text",
            "name": "calendly",
            "title": "Calendly",
            "inputType": "url"
          }]
        },
        {
          "name": "workshop",
          "title": {
            "es": "Workshop/Webinar"
          },
          "description": {
            "es": "\n"
          },
          "elements": [{
            "type": "text",
            "name": "webinar",
            "title": {
              "es": "Workshop/Webinar"
            },
            "inputType": "url",
            "placeholder": {
              "es": "https://www.youtube.com/watch?v=exampleID"
            }
          }]
        },
        {
          "name": "contenido-container",
          "title": "Agregue publicaciones y articulos",
          "elements": [{
            "type": "paneldynamic",
            "name": "contenido",
            "title": "Agregue sus articulos/posts/blog con las respectivas miniaturas, titulos y categorias",
            "templateElements": [{
                "type": "file",
                "name": "contenidoThumbnail",
                "title": "Miniatura del artículo (peso máximo de la imagen: 250kb)",
                "isRequired": true,
                "maxSize": 255997,
                "filePlaceholder": "Arrastre y suelte un archivo aquí o haga clic en el botón de abajo para seleccionar un archivo para cargar."
              },
              {
                "type": "text",
                "name": "contenidoUrl",
                "title": {
                  "es": "Enlace del articulo"
                },
                "isRequired": true,
                "inputType": "url"
              }
            ],
            "maxPanelCount": 5
          }]
        }
      ],
      "showPageNumbers": true
    }
    /* Form exec */
    const survey = new Survey.Model(json);
    survey.applyTheme(themeJson);
    survey.onComplete.add((sender, options) => {
      console.log(sender.data);
    });
    let contenidoHTML = '';
    let descripcionHTML = '';
    let webinarHTML = '';
    let articlesHTML = '';
    let exitosHTML = '';
    let calendlyHTML = '';
    survey.onValueChanged.add(function(sender, options) {
      console.log("Pregunta cambiada:", options.name);
      console.log("Nuevo valor:", options.value);

      const infoWrapper = document.getElementById('info-wrapper');
      infoWrapper.innerHTML = '';
      if (options.name == "banner") {
        $('#banner').attr("src", options.value[0].content);
      } else if (options.name == "logo") {
        $('#logo').attr("src", options.value[0].content);
      } else if (options.name == "nombre") {
        $('#nombre').text(options.value);
        document.getElementById('sobreIndice').innerHTML = 'Sobre ' + options.value;
      } else if (options.name == "rubro") {
        $('#rubro').text(options.value);
      } else if (options.name == "contact") {
        let contactHtml = '';

        if (options.value.web) {
          contactHtml += `
            <li>
                <a href="${options.value.web}" target="_blank">
                    <i class="bi bi-globe"></i>
                    Web
                </a>
            </li>`;
        }
        if (options.value.mail) {
          contactHtml += `
            <li>
                <a href="mailto:${options.value.mail}">
                    <i class="bi bi-envelope"></i>
                    Mail
                </a>
            </li>`;
        }
        if (options.value.phone) {
          contactHtml += `
            <li>
                <a href="tel:${options.value.phone}">
                    <i class="bi bi-telephone"></i>
                    Teléfono
                </a>
            </li>`;
        }
        if (options.value.linkedin) {
          contactHtml += `
            <li>
                <a href="${options.value.linkedin}" target="_blank">
                    <i class="bi bi-linkedin"></i>
                    Linkedin
                </a>
            </li>`;
        }
        if (options.value.podcast) {
          contactHtml += `
            <li>
                <a href="${options.value.podcast}" target="_blank">
                    <i class="bi bi-mic-fill"></i>
                    Podcast
                </a>
            </li>`;
        }
        if (options.value.fb) {
          contactHtml += `
            <li>
                <a href="${options.value.fb}" target="_blank">
                    <i class="bi bi-facebook"></i>
                    Facebook
                </a>
            </li>`;
        }
        if (options.value.tw) {
          contactHtml += `
            <li>
                <a href="${options.value.tw}" target="_blank">
                    <i class="bi bi-twitter-x"></i>
                    Twitter
                </a>
            </li>`;
        }
        if (options.value.ig) {
          contactHtml += `
            <li>
                <a href="${options.value.ig}" target="_blank">
                    <i class="bi bi-instagram"></i>
                    Instagram
                </a>
            </li>`;
        }
        // Asignar el HTML generado a ambos elementos
        document.getElementById('contact-desktop').innerHTML = contactHtml;
        document.getElementById('contact-mobile').innerHTML = contactHtml;
      } else if (options.name == "contenido") {
        contenidoHTML = `
            <div class="container" id="destacado">
                <h2>Contenido destacado</h2>`;
        for (let i = 0; i < options.value.length; i++) {
          contenidoHTML += `
                <div class="gallery-container slider">
                    <a href="${options.value[i].url}" target="_blank" class="gallery-item">
                        <img src="${options.value[i].contenidoThumbnail[0].content}" class="gallery-image">
                    </a>
                </div>`;
        }
        contenidoHTML += `</div>`;
      } else if (options.name == "descripcion") {
        descripcionHTML = `
            <div class="about-container container" id="sobre">
                <h2 id="about-title">Sobre ${sender?.valuesHash?.nombre || 'Empresa'}</h2>
                <p id="about">${options.value}</p>
            </div>`;
      } else if (options.name == "webinar") {
        webinarHTML = `
            <div class="container" id="workshop">
                <h2>Visita nuestro último Workshop</h2>
                <iframe width="100%" height="440" src="${options.value}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>`;
      } else if (options.name == "articles") {
        articlesHTML = `
            <div class="container" id="articulos">
                <h2>Últimos articulos</h2>
                <div class="slider">`;
        for (let i = 0; i < options.value.length; i++) {
          if (Object.keys(options.value[i]).length > 0) {
            articlesHTML += `
                <div class="clase-card">
                    <img src="${options.value[i]?.thumbnail[0]?.content}" alt="" srcset="">
                    <div>
                        <h3>${options.value[i]?.title}</h3>
                        <p>${options.value[i]?.category}</p>
                        <a href="${options.value[i]?.urlArticle}" target="_blank">Visitar</a>
                    </div>
                </div>`;
          }
        }
        articlesHTML += `</div></div>`;
      } else if (options.name == "exitos") {
        exitosHTML = `
            <div class="container" id="casos">
                <h2>Casos de éxito</h2>
                <div class="slider">`;
        for (let i = 0; i < options.value.length; i++) {
          exitosHTML += `
                <a href="${options.value[i].urlExitos}" target="_blank" class="exito-item">
                    <img src="${options.value[i].thumbnailExitos[0].content}" class="exito-image">
                </a>`;
        }
        exitosHTML += `</div></div>`;
      } else if (options.name == "calendly") {
        calendlyHTML = `
            <div class="container" id="mentoria">
                <h2>Solicita una mentoría gratuita</h2>
                <p>Aprovecha esta llamada sin costo para recibir asesoría personalizada y descubrir cómo podemos ayudarte a alcanzar tus metas. ¡No te lo pierdas y agenda tu sesión hoy mismo!</p>
                <a href="${options.value}" target="_blank">Agendar mentoría</a>
            </div>`;
      }

      // Finalmente, asignar todo el HTML generado a la vista previa
      infoWrapper.innerHTML = contenidoHTML + descripcionHTML + webinarHTML + articlesHTML + exitosHTML + calendlyHTML;

      // Agregar slider a los nuevos componentes.
      function initializeSlick() {
        var sliders = document.querySelectorAll('.slider');
        sliders.forEach(function(slider) {
          if (typeof $(slider).slick === 'function') {
            $(slider).on('reInit', function(event, slick) {
              // Aquí puedes realizar cualquier acción adicional después de que slick se haya re-inicializado
              console.log('Slider re-initialized');
            });

            $(slider).slick({
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

            // Recalcula el tamaño después de inicializar slick
            $(slider).slick('setPosition');
          } else {
            console.error('Slick is not available.');
          }
        });
      }

      initializeSlick();

    });


    $("#surveyElement").Survey({
      model: survey
    });

    /* Mode handler */
    $("#mode").on("change", function() {
      const mode = $(this).val();
      if (mode == 1) {
        $("#surveyElement").removeClass("d-none-company");
        $("#company-mode-container").addClass("d-none-company");
      } else if (mode == 2) {
        $("#company-mode-container").removeClass("d-none-company");
        $("#surveyElement").addClass("d-none-company");
      }
    });

    /* Bootstrap tour */
    var tour = new Tour({
      backdrop: true,
      storage: true,
      steps: [{
        element: "#sp_100",
        placement: "top",
        title: "Bienvenido al formulario de la red de aliados.",
        content: "Aquí podrás completar la información de tu compañía para que nuestros clientes te conozcan."
      }, {
        element: "#mode",
        title: "Dropdown",
        content: "Puedes cambiar entre la vista del formulario y la previsualización de tu página para ver el resultado final."
      }]
    });
    tour.init();
    tour.start();
  </script>
  <!-- Slider -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>