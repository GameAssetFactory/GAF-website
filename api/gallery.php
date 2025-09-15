 
<main class="main">
    <!--========================= Gallery =====================-->
    <section class="gallery section" id="gallery">
        <h1 class="visually-hidden">Gallery - Game Asset Factory</h1>
     <br><br> 
        <div class="gallery__container container">
            <h2 class="section__title">Our Gallery</h2>
            <span class="section__subtitle">Discover our latest creations</span>

            <div class="gallery__content container">
                <?php
                // Au début du fichier
                define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);

                // On définit simplement le nombre d'images que vous avez
                $numberOfImages = 82; // Ajusté pour vos 82 images
                
                // On crée directement le tableau d'images
                $validImages = array();
                for ($i = $numberOfImages; $i >= 1; $i--) {
                    $number = str_pad($i, 2, '0', STR_PAD_LEFT);
                    // Utiliser le chemin relatif comme dans home.php
                    $thumbnailPath = "../img/Gallery/Thumbnails/gameassetfactory_screen_{$number}.webp";
                    $fullImagePath = "../img/Gallery/gameassetfactory_screen_{$number}.webp";
                    
                    $validImages[] = array(
                        'number' => $number,
                        'thumbnail' => $thumbnailPath,
                        'fullsize' => $fullImagePath
                    );
                }

                // Afficher les thumbnails
                foreach ($validImages as $image) {
                    echo "<div class='gallery__item'>";
                    echo "<img src='{$image['thumbnail']}' alt='Gallery image {$image['number']}' class='gallery__thumbnail' loading='lazy' width='512' height='288'>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <div class="modal" id="imageModal">
            <span class="modal__close">
                <i class="uil uil-times"></i>
            </span>
            <div class="modal__content">
                <div class="new-swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        // Utiliser les images full size pour le swiper
                        foreach ($validImages as $image) {
                            echo "<div class='swiper-slide new-swiper-slide'>";
                            // Ne mettre que data-fullsize, pas de src
                            echo "<img class='modal__image' data-fullsize='{$image['fullsize']}' alt='Gallery image {$image['number']}' width='1920' height='1080'>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <!-- Navigation -->
                    <div class="new-swiper-button-prev"></div>
                    <div class="new-swiper-button-next"></div>
                    
                    <!-- Pagination -->
                    <div class="new-swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>

    <!--================== SCROLL TOP ==================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
</main>
 