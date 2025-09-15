 
<main class="main">
 
    <section class="contact section" id="Contact-us-discord">
      <br><br>
      <h1 class="section__title">Contact via Discord</h1>
 
      <div class="discord__container container grid">
        <div class="discord__information">
        <p class="discord__description">Questions, suggestions, feedback, needs, news, upcoming packs, everything you need</p>
        <div class="discord-widget">
          <iframe 
            id="discord-iframe"
            src="https://discord.com/widget?id=707136494476984351&theme=dark" 
            width="350" 
            height="500" 
            allowtransparency="true" 
            frameborder="0" 
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
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
      <h2 class="section__title">Contact via mail</h2>
      <span class="section__subtitle">Feel free to contact us for more information by mail</span>
 
      <div class="container grid">
        <div class="contact__info">
          <div class="contact__information">
            <i class="uil uil-envelope-minus contact__icon"></i>
            <div>
              <h3 class="contact__title">Mail</h3>
              <span class="contact__subtitle">contact@gameassetfactory.com</span>
            </div>
          </div>
 
          <div class="contact__information">
            <i class="uil uil-map-marker contact__icon"></i>
            <div>
              <h3 class="contact__title">Location</h3>
              <span class="contact__subtitle">Alsace, France</span>
            </div>
          </div>
        </div>
 
        <form action="" class="contact__form grid">
          <div class="contact__inputs grid">
            <div class="contact__content">
              <label for="firstname" class="contact__label">First Name</label>
              <div class="contact__input-wrapper">
                <i class="uil uil-user contact__input-icon"></i>
                <input type="text" class="contact__input" id="firstname" required />
              </div>
            </div>
 
            <div class="contact__content">
              <label for="lastname" class="contact__label">Last Name</label>
              <div class="contact__input-wrapper">
                <i class="uil uil-user contact__input-icon"></i>
                <input type="text" class="contact__input" id="lastname" required />
              </div>
            </div>
 
            <div class="contact__content">
              <label for="subject" class="contact__label">Subject</label>
              <div class="contact__input-wrapper">
                <i class="uil uil-file-alt contact__input-icon"></i>
                <input type="text" class="contact__input" id="subject" required />
              </div>
            </div>
          </div>
 
          <div class="contact__content">
            <label for="message" class="contact__label">Message</label>
            <div class="contact__input-wrapper">
              <i class="uil uil-message contact__input-icon"></i>
              <textarea name="message" id="message" cols="0" rows="7" class="contact__input" required></textarea>
            </div>
          </div>
 
            <a href="#" class="button button--flex button--small contact__button" id="sendEmail">
              Send mail
              <i class="uil uil-message button__icon"></i>
            </a>
          </button>
        </form>
 
        <script>
          document.getElementById('sendEmail').addEventListener('click', function(event) {
            event.preventDefault();
            const firstname = document.getElementById('firstname').value;
            const lastname = document.getElementById('lastname').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
        
            if (!firstname || !lastname || !subject || !message) {
              alert("Please fill in all fields.");
              return;
            }
 
            const name = `${firstname} ${lastname}`;
            const email = 'contact@gameassetfactory.com';
            const formattedSubject = `${subject} - From: ${name}`;
            const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(formattedSubject)}&body=${encodeURIComponent(message)}`;
        
            window.location.href = mailtoLink;
          });
        </script>
      </div>
    </section>
            <!--================== SCROLL TOP ==================-->
            <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
      </a>
 
 </main>
 