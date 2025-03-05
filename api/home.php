<!doctype html>
<html lang="en">
  <body>
    <main class="main">
      <!--========================= Accueil =====================-->
      <section class="home section" id="Home">
        <div class="home__video-container">
          <video class="home__background-video" autoplay muted loop playsinline>
            <source src="../img/Home/Video/GAF_Home_Video.mp4" type="video/mp4">
          </video>
          <div class="home__overlay"></div>
        </div>
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">

            </div>
            <div class="home__data">
              <div class="home__logo">
                <img src="../img/GameAssetFactoryLogo1024.webp" alt="Game Asset Factory" class="home__logo-img">
              </div>
              <h3 class="home__subtitle">
                Video Games, Architectural visualization and Renders
              </h3>
              <a href="/contact/" class="button button--flex button--small contact__button <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>">
                Contact us <i class="uil uil-message button__icon"></i>
              </a>
              <div class="home__info">
                <p class="home__info-credit">Made with <i class="uil uil-heart"></i> by NEVAR  <a href="https://github.com/NEVARLeVrai" target="_blank" class="home__social-icon">
                <i class="uil uil-github"></i>
              </a></a></p>
              </div>
            </div>
            
          </div>
          
        </div>
        <br><br><br><br>
        <div class="contact__scroll-container">
          <h3 class="home__logo-large-title">Scroll down and check our studio</h3>
          <a href="#Services" class="home__scroll-button button--flex">
            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
            <span class="home__scroll-name">Scroll down</span>
            <i class="uil uil-arrow-down home__scroll-arrow"></i>
            
          </a>
        </div>

      </section>


      <!--========================= Services =====================-->
      <section class="services section" id="Services">
        <br><br>
      <h2 class="section__title">OUR SERVICES</h2>
      <div class="services__container container grid">
          <div class="services__content">
            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-wrench services__icon"></i>
                <h3 class="services__title">Custom work</h3>
              </div>
              <p class="services__description">
                If you want extra models, materials, textures or whatever for an existing pack, you can contact us via the "contact" page. Game Asset Factory is also available for on-demand work; it can be full environments, scenes, unique 3D models, materials, textures or functionality for your project. Every asset produced will fit with your artistic and technical direction.
              </p>
              <div class="services__background" style="background-image: url('../img/Home/Custom_Work.webp');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-box services__icon"></i>
                <h3 class="services__title">Ready-to-use packs</h3>
              </div>
              <p class="services__description">
                Our packs provide ready-to-use assets which are grouped by theme or functionality. We focus on giving complete solutions in order to prevent from additional work for our customers.
              </p>
              <div class="services__background" style="background-image: url('../img/Home/Castle.webp');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-cube services__icon"></i>
                <h3 class="services__title">3D assets</h3>
              </div>
              <p class="services__description">
                Our ready-to-use 3D models are made to be integrated easily in any project. They are also meant to be customizable and resource-friendly. Every model come with its own materials, textures, LODs (Level of details) and collision. We offer a wide variety of models!
              </p>
              <div class="services__background" style="background-image: url('../img/Home/3D_Assets.webp');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-mountains services__icon"></i>
                <h3 class="services__title">Environments</h3>
              </div>
              <p class="services__description">
                From stylized to realistic environments, Game Asset Factory provides solutions for every situation, using Hard-surface, organic modeling or Photogrammetry technique. Environments are generally composed of different asset types, like landscapes, 3D models, materials (shaders), textures, etc. This way, you can use pre-made scenes or create your own with our quality assets.
              </p>
              <div class="services__background" style="background-image: url('../img/Home/Environment.webp');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-palette services__icon"></i>
                <h3 class="services__title">Materials</h3>
              </div>
              <p class="services__description">
                We like to keep things simple and powerful. Our process is to create one or several master materials that will be reused through different instances. Master materials are designed in a clear way with annotations and explicit descriptions.
              </p>
              <div class="services__background" style="background-image: url('../img/Home/Materials.webp');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-comments services__icon"></i>
                <h3 class="services__title">Support</h3>
              </div>
              <p class="services__description">
                Quality is assured by our support through corrections, upgrades and suggestions, feel free to contact us if you have any question or suggestion.
              </p>
              <div class="services__background" style="background-image: url('../img/Home/Happy_Hotline.webp');"></div>
            </div>
          </div>
        </div>


        <div class="contact__scroll-container">
          <h3 class="home__logo-large-title">Check our about us</h3>
          <a href="#About" class="home__scroll-button button--flex">
            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
            <span class="home__scroll-name">Scroll down</span>
            <i class="uil uil-arrow-down home__scroll-arrow"></i>
          </a>
        </div>
      </section>


      <!--========================= About Us =====================-->
      <section class="about section" id="About">
        <br><br>
        <h2 class="section__title">ABOUT US</h2>
        <br><br>
        <div class="about__container">
          <div class="about__content">
            <div class="about__card">
              <div class="about__card-header">
                <i class="uil uil-award about__card-icon"></i>
                <h3 class="about__card-title">Who We Are</h3>
              </div>
              <p class="about__card-description">
                A passionate team dedicated to creating<br>
                high-quality digital assets for the gaming<br>
                and visualization industry.
              </p>
            </div>

            <div class="about__card">
              <div class="about__card-header">
                <i class="uil uil-focus-target about__card-icon"></i>
                <h3 class="about__card-title">Our Mission</h3>
              </div>
              <p class="about__card-description">
                Delivering exceptional 3D content<br>
                across multiple domains:<br><br>
                <span class="about__tag">Games</span>
                <span class="about__tag">Architecture</span><br>
                <span class="about__tag">Cinematics</span>
                <span class="about__tag">Custom Projects</span>
              </p>
            </div>

            <div class="about__card">
              <div class="about__card-header">
                <i class="uil uil-star about__card-icon"></i>
                <h3 class="about__card-title">Our Approach</h3>
              </div>
              <p class="about__card-description">
                We combine technical expertise with<br>
                artistic vision to create assets that are<br>
                both beautiful and functional.
              </p>
            </div>
          </div>
        </div>
      </section>


            <!--================== SCROLL TOP ==================-->
            <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
      </a>

    </main>
  </body>
</html>