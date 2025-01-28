<!doctype html>
<html lang="en">

<main class="main">
    <body>

    <section class="contact section" id="Contact-us-discord">
      <br><br>
      <h2 class="section__title">Contact via Discord</h2>

      <div class="discord__container container grid">
        <div class="discord__information">
        <p class="discord__description">Questions, suggestions, feedback, needs, news, upcoming packs, everything you need</p>
        <iframe src="https://discord.com/widget?id=707136494476984351&theme=dark" center="center" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
      </div>


      <div class="contact__scroll-container">
        <h3 class="home__logo-large-title">You can contact us by mail</h3>
                <a href="#Contact-us" class="home__scroll-button button--flex">
                <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                <span class="home__scroll-name">Scroll down</span>
                <i class="uil uil-arrow-down home__scroll-arrow"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="contact section" id="Contact-us">
      <br><br>
      <h2 class="section__title">Contact via mail</h2>
      <span class="section__subtitle">Feel free to contact us for more information by mail</span>

      <div class="contact__container container grid">
        <div>
          <div class="contact__information">
            <i class="uil uil-envelope-minus contact__icon"></i>

            <div>
              <h3 class="contact__title">Mail</h3>
              <span class="contact__subtitle"
                >contact@gameassetfactory.com</span
              >
            </div>
          </div>

          <div class="contact__information">
            <i class="uil uil-map-marker contact__icon"></i>

            <div>
              <h3 class="contact__title">Location</h3>
              <span class="contact__subtitle"
                >Alsace, France</span
              >
            </div>
          </div>
        </div>
        <form action="" class="contact__form grid">
          <div class="contact__inputs grid">
            <div class="contact__content">
              <label for="name" class="content__label">Nom</label>
              <input type="text" class="contact__input" id="name" />
            </div>
        
            <div class="contact__content">
              <label for="subject" class="content__label">Sujet</label>
              <input type="text" class="contact__input" id="subject" />
            </div>
          </div>
        
          <div class="contact__content">
            <label for="message" class="content__label">Message</label>
            <textarea
              name="message"
              id="message"
              cols="0"
              rows="7"
              class="contact__input"
            ></textarea>
          </div>
        
          <div>
            <a
              href="#"
              class="button button--flex button--small portfolio__button"
              id="sendEmail"
            >
              Envoyer le mail
              <i class="uil uil-message button__icon"></i>
            </a>
          </div>
        </form>
        
        <script>
          document.getElementById('sendEmail').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
            const name = document.getElementById('name').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
        
            // Vérifie si le nom ou le message est vide
            if (!name || !message) {
              alert("Veuillez remplir tous les champs."); // Alerte l'utilisateur
              return; // Ne fait rien si l'un des champs est vide
            }

            const email = 'contact@gameassetfactory.com';
            const body = `Nom: ${name}\n${message}`;
            const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        
            window.location.href = mailtoLink; // Ouvre le client de messagerie
          });
        </script>
      </div>
    </section>
            <!--================== SCROLL TOP ==================-->
            <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
      </a>

</main>
    </body>
</html>