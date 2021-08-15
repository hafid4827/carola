<?php
include('php/extract.php');
include('php/extractHome.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CAROLA</title>
  <link rel="stylesheet" href="static/css/index.css" />
  <link rel="stylesheet" href="static/INDIVIDUALES NECESARIOS/icons/css/fontello.css" />
  <link rel="stylesheet" href="static/INDIVIDUALES NECESARIOS/icons/icon linkedin/css/fontello.css" />
  <link rel="stylesheet" href="static/css/AOS.css" />
  <link rel="shortcut icon" href="logo_carola_kah_icon.ico" type="image/x-icon">
</head>

<body>
  <div class="load-main" id="load-main">
    <div class="load-con">
      <img src="static/INDIVIDUALES NECESARIOS/LOGOS/LOGO CAROLA.png" alt="icono de carga" class="load-main__icon" />
      <div class="load-circle"></div>
    </div>
  </div>
  <div class="btn-up" id="btn-up">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
      <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
    </svg>
  </div>
  <header class="header-section-home">
    <img class="header-img__bg zIndex--10" src="static/INDIVIDUALES NECESARIOS/LOGOS/WEB CAROLA SMARPHON.png" alt="logo transparente de fondo en el header" />
    <nav class="nav-home__menu">
      <form action="" class="nav-form__menu zIndex-30">
        <div class="search-nav" id="search-nav">
          <label for="search-nav" class="" id="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search icon-search" viewBox="0 0 16 16" id="icon-search">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </label>
          <div class="search-content" id="search-content">
            <input type="text" class="search-nav__input" id="search-nav__input" />
            <button type="submit" class="search-submit">buscar</button>
          </div>
        </div>
      </form>
      <div class="nav-cont__menu zIndex-20">
        <div class="nav-icon__menu" id="nav-icon__menu">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-list" id="bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
          <ul class="nav-list__menu zIndex-30" id="nav-list__menu">
            <li><a href="/">inicio</a></li>
            <li><a href="#te-lo-recomiendo">te lo recomiendo</a></li>
            <li><a href="#quien-soy">¿quien soy?</a></li>
            <li><a href="#mis-servicios">mis servicios</a></li>
            <li><a href="#contactame">contactame</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="header-home__hero">
      <div class="header-home__info container120">
        <div class="cont-img">
          <img data-aos="fade-up" src="static/INDIVIDUALES NECESARIOS/LOGOS/LOGO CAROLA.png" alt="" />
        </div>
        <div class="hero-description" data-aos="fade-up" data-aos-duration="2000">
          <div class="hero-description__shadow">
            <div class="hero-description__paraph">
              <p>
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->header; ?>
                <?php endforeach ?>
              </p>
              <!-- <p>
                te ofrezco un servicio de calidad, pensando en los desafios
                que nos impone el ritmo de vida de estos dias
              </p>
              <p>
                te ayudo a aplicar herramientas que te permiten un aprendizaje
                practico y gradual para alcanzar tus metas profesionales din
                dejar de lado el bienestar en compañia con tu familia.
              </p> -->
              <div class="cont-btn">
                <a href="#quien-soy" class="btn btn-color-1">ver mas ... </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section-TLR zIndex-10">
    <div class="section-paht-TLR" id="te-lo-recomiendo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" width="100%" class="te-lo-recomiendo__svg">
        <path id="curve" fill="#FAEDEA" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        <text>
          <textPath class="textpath" xlink:href="#curve" startOffset="23%" text-anchor="middle">
            <?php foreach ($edit_text as $editResult) : ?>
              <?php echo $editResult->title_section_recommend_you; ?>
            <?php endforeach ?>
          </textPath>
        </text>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" width="100%" class="te-lo-recomiendo__svg-bg">
        <path id="curve" fill="#FAEDEA" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
      </svg>
      <!-- abajo -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" width="100%" class="donw__curve-one">
        <path id="curve" fill="#FAEDEA" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" width="100%" class="donw__curve-two zIndex--10">
        <path id="curve" fill="#D26E70" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
      </svg>
    </div>
    <div class="TLR-cont__cards zIndex--30">
      <div class="container120 delete-container" data-delete id="modi-reposnive-container">
        <div class="TLR-cont__cards-config">
          <div class="TLR-item__card" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="TLR-item__title">
              <?php foreach ($edit_text as $editResult) : ?>
                <?php echo $editResult->title_recommended_one; ?>
              <?php endforeach ?>
            </h3>
            <a href="#" class="TLR-item__cont">
              <img class="TLR-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/3.png" alt="" />
            </a>
          </div>
          <div class="TLR-item__card" data-aos="fade-up" data-aos-duration="2000">
            <h3 class="TLR-item__title">
              <?php foreach ($edit_text as $editResult) : ?>
                <?php echo $editResult->title_recommended_two; ?>
              <?php endforeach ?>
            </h3>
            <a href="#" class="TLR-item__cont">
              <img class="TLR-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/2.png" alt="" />
            </a>
          </div>
          <div class="TLR-item__card" data-aos="fade-up" data-aos-duration="3000">
            <h3 class="TLR-item__title">
              <?php foreach ($edit_text as $editResult) : ?>
                <?php echo $editResult->title_recomended_three; ?>
              <?php endforeach ?>
            </h3>
            <a href="#" class="TLR-item__cont">
              <img class="TLR-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/1.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="main-cont container120" data-delete id="quien-soy">
    <main class="main-home">
      <div class="main-home__cont">
        <!-- quien soy ? -->
        <div class="main-home__quien-soy">
          <svg viewBox="0 0 500 500">
            <path fill="#FAEDEA" id="curvequiensoy" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
            <text>
              <textPath class="text-quien-soy" xlink:href="#curvequiensoy">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->who_I_am_title; ?>
                <?php endforeach ?>
              </textPath>
            </text>
          </svg>
          <img class="calora-img" src="static/INDIVIDUALES NECESARIOS/LOGOS/foto senalando.png" alt="foto de carola señalando quien es" />
        </div>
      </div>
      <div class="main-home__info-cont">
        <div class="main-home__cite">
          <img class="main-home__img-soy" src="static/INDIVIDUALES NECESARIOS/LETRA/LETRA SOY_opt.png" alt="" />
          <h1 class="main-home__img-description" data-aos="fade-left">
            <?php foreach ($edit_text as $editResult) : ?>
              <?php echo $editResult->title_section_I_am; ?>
            <?php endforeach ?>
          </h1>
        </div>
        <hr />
        <p class="main-home__paraph" data-aos="fade-left">
          <?php foreach ($edit_text as $editResult) : ?>
            <?php echo $editResult->who_I_am_paraph_one; ?>
          <?php endforeach ?>
        </p>
        <hr />
        <p class="main-home__paraph" data-aos="fade-left">
          <?php foreach ($edit_text as $editResult) : ?>
            <?php echo $editResult->who_I_am_paraph_two; ?>
          <?php endforeach ?>
        </p>
        <hr />
      </div>
    </main>
    <footer class="carola-cite__cont">
      <strong>"<?php foreach ($edit_text as $editResult) : ?>
        <?php echo $editResult->who_I_am_paraph_cite; ?>
        <?php endforeach ?>"
        <br />
      </strong>
      <div class="carola-cite__cont-carola">
        <b><?php foreach ($edit_text as $editResult) : ?>
            <?php echo $editResult->who_I_am_paraph_cite_small; ?>
          <?php endforeach ?></b>
        <cite><?php foreach ($edit_text as $editResult) : ?>
            <?php echo $editResult->who_I_am_paraph_cite_name; ?>
          <?php endforeach ?></b></cite>
      </div>
    </footer>
  </div>
  <!-- seccion main productos -->
  <section class="section-service" id="mis-servicios">
    <div class="section-service__cont">
      <!-- imagen absoluta -->
      <div class="section-service__img"></div>
      <!-- aqui ira el titulo -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" width="100%" class="section-service__curve">
        <path id="curve" fill="#FAEDEA" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
      </svg>

      <!-- title -->
      <svg viewBox="0 0 450 170" class="title-svg-my-services">
        <path fill="#FAEDEA" class="path-my-services" fill-opacity="0.0" id="title-path-my-services" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
        <text>
          <textPath class="title-text-my-services" xlink:href="#title-path-my-services" startOffset="50%" text-anchor="middle">
            <?php foreach ($edit_text as $editResult) : ?>
              <?php echo $editResult->title_section_my_services; ?>
            <?php endforeach ?>
          </textPath>
        </text>
      </svg>
    </div>
    <div class="section-service__cont-info">
      <div class="container120">
        <div class="section-service__cont-card zIndex-20">
          <div class="section-services-cont-shw" data-aos="fade-down">
            <div class="section-services-before"></div>
            <div class="section-service__card-item zIndex-10">
              <img class="service-card-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/LOGO 1.png" alt="" />
              <h5 class="service-card-item__subtitle">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_title_one; ?>
                <?php endforeach ?>
              </h5>
              <h3 class="service-card-item__title">vip</h3>
              <p class="service-card-item__paraph">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_description_one; ?>
                <?php endforeach ?>
              </p>
              <div class="service-card-item__cont">
                <!-- Pendiente 224 ir a link modificable por el administrador -->
                <a class="service-card-item__btn btn btn-color-2" href="#">ir >>></a>
              </div>
            </div>
          </div>

          <div class="section-services-cont-shw" data-aos="fade-down">
            <div class="section-services-before"></div>
            <div class="section-service__card-item zIndex-10">
              <img class="service-card-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/LOGO 2.png" alt="" />
              <h3 class="service-card-item__title">mastermind</h3>
              <h5 class="service-card-item__subtitle">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_title_two; ?>
                <?php endforeach ?>
              </h5>
              <p class="service-card-item__paraph">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_description_two; ?>
                <?php endforeach ?>
              </p>
              <div class="service-card-item__cont">
                <a class="service-card-item__btn btn btn-color-2" href="#">ir >>></a>
              </div>
            </div>
          </div>

          <div class="section-services-cont-shw" data-aos="fade-down">
            <div class="section-services-before"></div>
            <div class="section-service__card-item zIndex-10">
              <img class="service-card-item__img" src="static/INDIVIDUALES NECESARIOS/LOGOS/LOGO 3.png" alt="" />
              <h5 class="service-card-item__subtitle">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_title_three; ?>
                <?php endforeach ?>
              </h5>
              <h3 class="service-card-item__title">cursos online</h3>
              <p class="service-card-item__paraph">
                <?php foreach ($edit_text as $editResult) : ?>
                  <?php echo $editResult->my_services_description_three; ?>
                <?php endforeach ?>
              </p>
              <div class="service-card-item__cont">
                <a class="service-card-item__btn btn btn-color-2" href="#">ir >>></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container120 recommendation" data-delete id="recommendation">
    <div class="recommendation-section">
      <p class="recommendation-section__paraph">
        En esta seccion te comparto libros, cursos o series en donde visualizo
        oportunidades de aprendizaje para ti.
      </p>
      <p class="recommendation-section__paraph">
        Sé que cada recomendación será de utilidad para ti y tu familia.
      </p>
      <div class="recommendation-section__cont-title">
        <h4 class="recommendation-section__title">familia</h4>
        <h4 class="recommendation-section__title">habilidades personal</h4>
        <h4 class="recommendation-section__title">
          organización y planificación
        </h4>
      </div>
      <div class="recommendation-section__cont-cards">

        <div class="recommendation-section__item">
          <h3 class="recommendation-section__item-title">libros</h3>
          <div class="recommendation-section__cont-img">
            <div class="recommendation-section__cont-slider">
              <ul class="recommendation-section__list-arrows">
                <li id="prev1" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                  </svg>
                </li>
                <li id="next1" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="right">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                  </svg>
                </li>
              </ul>
              <div class="recommendation-section__sep-cont-img">
                <?php foreach ($contain as $containResult) : ?>
                  <?php if ($containResult->category == "book") : ?>
                    <img data-img_id="1" class="fade recommendation-section__img" src="static/INDIVIDUALES NECESARIOS/<?php echo $containResult->img_url; ?>" alt="" srcset="" />
                  <?php endif ?>
                <?php endforeach ?>
              </div>
            </div>
            <?php foreach ($contain as $containResult) : ?>
              <?php if ($containResult->category == "book") : ?>
                <div data-info="1" class="">
                  <h3 class="recommendation-section__title-product">
                    <?php echo $containResult->title; ?>
                  </h3>
                  <p class="recommendation-section__paraph-description">
                    <?php echo $containResult->description; ?>
                  </p>
                  <!-- <div class="recommendation-section__cont-btn-plus">
                  <a class="recommendation-section__url-whrite" href="#">Leer Más</a>
                </div> -->
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>

        <div class="recommendation-section__item">
          <h3 class="recommendation-section__item-title">series</h3>
          <div class="recommendation-section__cont-img">
            <div class="recommendation-section__cont-slider">
              <ul class="recommendation-section__list-arrows">
                <li id="prev2" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                  </svg>
                </li>
                <li id="next2" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="right">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                  </svg>
                </li>
              </ul>
              <div class="recommendation-section__sep-cont-img">
                <?php foreach ($contain as $containResult) : ?>
                  <?php if ($containResult->category == "serie") : ?>
                    <img data-img_id="2" class="fade recommendation-section__img" src="static/INDIVIDUALES NECESARIOS/<?php echo $containResult->img_url; ?>" alt="" srcset="" />
                  <?php endif ?>
                <?php endforeach ?>
              </div>
            </div>
            <?php foreach ($contain as $containResult) : ?>
              <?php if ($containResult->category == "serie") : ?>
                <div data-info="2" class="cursos">
                  <h3 class="recommendation-section__title-product">
                    <?php echo $containResult->title; ?>
                  </h3>
                  <p class="recommendation-section__paraph-description">
                    <?php echo $containResult->description; ?>
                  </p>
                  <!-- <div class="recommendation-section__cont-btn-plus">
                  <a class="recommendation-section__url-whrite" href="#">Leer Más</a>
                </div> -->
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>

        <div class="recommendation-section__item">
          <h3 class="recommendation-section__item-title">cursos</h3>
          <div class="recommendation-section__cont-img">
            <div class="recommendation-section__cont-slider">
              <ul class="recommendation-section__list-arrows">
                <li id="prev3" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                  </svg>
                </li>
                <li id="next3" class="recommendation-section__arrow" data-imgInfo="id1" data-arrow="right">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                  </svg>
                </li>
              </ul>
              <div class="recommendation-section__sep-cont-img">
                <?php foreach ($contain as $containResult) : ?>
                  <?php if ($containResult->category == "course") : ?>
                    <img data-img_id="3" class="fade recommendation-section__img" src="static/INDIVIDUALES NECESARIOS/<?php echo $containResult->img_url; ?>" alt="" srcset="" />
                  <?php endif ?>
                <?php endforeach ?>
              </div>
            </div>
            <?php foreach ($contain as $containResult) : ?>
              <?php if ($containResult->category == "course") : ?>
                <div data-info="3" class="">
                  <h3 class="recommendation-section__title-product">
                    <?php echo $containResult->title; ?>
                  </h3>
                  <p class="recommendation-section__paraph-description">
                    <?php echo $containResult->description; ?>
                  </p>
                  <!-- <div class="recommendation-section__cont-btn-plus">
                  <a class="recommendation-section__url-whrite" href="#">Leer Más</a>
                </div> -->
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>


      </div>
    </div>
  </section>
  <section class="contactus-section" id="contactame">
    <div class="contactus">
      <div class="container120 delete-container" data-delete>
        <h2 class="contactus-title">contactame</h2>
        <div class="contactus-cont__form">
          <form class="contactus-form">
            <input class="contactus-form__input" type="text" name="" id="" placeholder="Nombre:" />
            <input class="contactus-form__input" type="text" name="" id="" placeholder="Telefono:" />
            <input class="contactus-form__input" type="text" name="" id="" placeholder="Correo" />
            <textarea class="contactus-form__input" name="" id=""></textarea>
          </form>
          <div class="contactus-cont__social-media">
            <h4 class="contactus-title__social-media">redes sociales</h4>
            <div class="contactus-grid__social-media">
              <a class="contactus-cont__icon-url" href="https://cl.linkedin.com/in/carolamendezcoach" target="_blank">
                <i class="icon-linkedin-squared"></i></a>
              <a class="contactus-cont__icon-url" href="https://www.facebook.com/CoachCarolamendez/">
                <i class="icon-facebook"></i>
              </a>
              <a class="contactus-cont__icon-url" href="https://instagram.com/coachcarolamendez?utm_medium=copy_link" target="_blank">
                <i class="icon-instagram-1"></i></a>
              <a class="contactus-cont__icon-url" href="https://wa.me/56982579278" target="_blank">
                <i class="icon-whatsapp"></i></a>
            </div>
            <a href="" class="contactus-social-media__mail">
              <b>contacto@carolamendezcoach.com</b>
            </a>
          </div>
        </div>
        <small class="contactus-description">Si tienes alguna consulta, por favor envianos un mensaje. Te
          contestaré en un maximo de 24 horas</small>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" width="100%" class="contactus-curve zIndex-10">
      <path id="curve" fill="#FAEDEA" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" width="100%" class="contactus-curve__line">
      <path id="curve" fill="#D26E70" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
  </section>
  <footer class="footer-main-page zIndex-30">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" width="100%" class="footer-main__curve">
      <path id="curve" fill="#5153a1" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,176C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
    <div class="container120">
      <div class="footer-main-page__grid">
        <div class="footer-main-page__grid-item">
          <h5 class="footer-main__title">contenido</h5>
          <p class="footer-main__paraph">
            recomendaciónes <br />
            libros, series, cursos
          </p>
        </div>
        <div class="footer-main-page__grid-item">
          <h5 class="footer-main__title">información</h5>
          <p class="footer-main__paraph">
            ¿quien soy? <br />contacto <br />redes sociales <br />mis
            servicios
          </p>
        </div>
        <div class="footer-main-page__grid-item">
          <h5 class="footer-main__title">ayuda</h5>
          <p class="footer-main__paraph">soporte <br />contáctanos</p>
        </div>

        <div class="footer-main-page__grid-item">
          <h5 class="footer-main__title">Antofagasta, Chile</h5>
          <small class="footer-main__small">copyright &copy; all rights reserved</small>
          <br />
          <a class="PRASO" href="#">Desarrollado por PRASO PRACTICAL SOLUTION</a>
        </div>
        <div class="footer-main-page__grid-item">
          <h5 class="footer-main__title">Legal <br /></h5>
          <p class="footer-main__paraph">
            Términos de uso <br />
            acuerdo de licencia <br />
            politica de privacidad <br />
            información de copyright <br />
            politica de cookies <br />
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div id="" class="" style="display: none;">
    <div class="">
      <div class="">

      </div>
    </div>
  </div>

  <script src="static/js/AOS.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="static/js/home.js"></script>
</body>

<!-- +  

-->

</html>