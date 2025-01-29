<!doctype html>
<html lang="en">
  <body>
    <main class="main">
      <!--========================= Accueil =====================-->
      <section class="home section" id="Home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <!-- Vous pouvez ajouter des liens sociaux ici si nécessaire -->
            </div>
            <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                      130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                      97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                      0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                      165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                      129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                     -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                  <image
                    class="home__blob-img"
                    x="-79"
                    y="-46"
                    xlink:href="../img/homefond.png"
                  />
                </g>
              </svg>
            </div>
            <div class="home__data">
              <h1 class="home__title">GAME ART STUDIO</h1>
              <h3 class="home__subtitle">
                Video Games, Architectural visualization and Renders
              </h3>
              <a href="/contact/" class="button button--flex button--small contact__button <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>">
                Contact us <i class="uil uil-message button__icon"></i>
              </a>
            </div>
            
          </div>
          
        </div>
      </section>

      <!--========================= About Us =====================-->
      <section class="about section" id="About">
      <br><br>

        <h2 class="section__title">ABOUT US</h2>
        <div class="about__container container grid">
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


      <!--========================= Services =====================-->
      <section class="services section" id="Services">
        <h2 class="section__title">OUR SERVICES</h2>
        <div class="services__container container">
          <div class="services__content">
            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-wrench services__icon"></i>
                <h3 class="services__title">Custom work</h3>
              </div>
              <p class="services__description">
                If you want extra models, materials, textures or whatever for an existing pack, you can contact us via the "contact" page. Game Asset Factory is also available for on-demand work; it can be full environments, scenes, unique 3D models, materials, textures or functionality for your project. Every asset produced will fit with your artistic and technical direction.
              </p>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-box services__icon"></i>
                <h3 class="services__title">Ready-to-use packs</h3>
              </div>
              <p class="services__description">
                Our packs provide ready-to-use assets which are grouped by theme or functionality. We focus on giving complete solutions in order to prevent from additional work for our customers.
              </p>
              <div class="services__background" style="background-image: url('../img/Gallery/1.png');"></div>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-cube services__icon"></i>
                <h3 class="services__title">3D assets</h3>
              </div>
              <p class="services__description">
                Our ready-to-use 3D models are made to be integrated easily in any project. They are also meant to be customizable and resource-friendly. Every model come with its own materials, textures, LODs (Level of details) and collision. We offer a wide variety of models!
              </p>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-mountains services__icon"></i>
                <h3 class="services__title">Environments</h3>
              </div>
              <p class="services__description">
                From stylized to realistic environments, Game Asset Factory provides solutions for every situation, using Hard-surface, organic modeling or Photogrammetry technique. Environments are generally composed of different asset types, like landscapes, 3D models, materials (shaders), textures, etc. This way, you can use pre-made scenes or create your own with our quality assets.
              </p>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-palette services__icon"></i>
                <h3 class="services__title">Materials</h3>
              </div>
              <p class="services__description">
                We like to keep things simple and powerful. Our process is to create one or several master materials that will be reused through different instances. Master materials are designed in a clear way with annotations and explicit descriptions.
              </p>
            </div>

            <div class="services__card">
              <div class="services__header">
                <i class="uil uil-comments services__icon"></i>
                <h3 class="services__title">Support</h3>
              </div>
              <p class="services__description">
                Quality is assured by our support through corrections, upgrades and suggestions. Feel free to contact us if you have any question or suggestion.
              </p>
              <div class="services__background" style="background-image: url('../img/Gallery/Happy_Hotline.png');"></div>
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