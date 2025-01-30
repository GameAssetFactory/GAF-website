<!doctype html>
<html lang="en">

<main class="main">
    <!--========================= Gallery =====================-->
    <section class="gallery section" id="gallery">
     <br><br> 
        <div class="gallery__container container">
            <h2 class="section__title">Our Gallery</h2>
            <span class="section__subtitle">Discover our latest creations</span>

            <div class="gallery__content container">
                <?php
                // Créer un tableau pour stocker les chemins d'images valides
                $validImages = array();
                
                // Trouver le dernier numéro d'image existant
                $lastImage = 0;
                $i = 1;
                while (true) {
                    $number = str_pad($i, 2, '0', STR_PAD_LEFT);
                    $thumbnailPath = "../img/Gallery/thumbnails/gameassetfactory_screen_{$number}_Thumbnail.jpg";
                    $fullImagePath = "../img/Gallery/gameassetfactory_screen_{$number}.jpg";
                    
                    if (file_exists($thumbnailPath) && file_exists($fullImagePath)) {
                        $lastImage = $i;
                    } elseif ($i > $lastImage + 10) { // Si on ne trouve pas d'image pendant 10 numéros consécutifs, on arrête
                        break;
                    }
                    $i++;
                }
                
                // Collecter toutes les images valides en partant du dernier numéro
                for ($i = $lastImage; $i >= 1; $i--) {
                    $number = str_pad($i, 2, '0', STR_PAD_LEFT);
                    $thumbnailPath = "../img/Gallery/thumbnails/gameassetfactory_screen_{$number}_Thumbnail.jpg";
                    $fullImagePath = "../img/Gallery/gameassetfactory_screen_{$number}.jpg";
                    
                    if (file_exists($thumbnailPath) && file_exists($fullImagePath)) {
                        $validImages[] = array(
                            'number' => $number,
                            'thumbnail' => $thumbnailPath,
                            'fullsize' => $fullImagePath
                        );
                    }
                }

                // Afficher les thumbnails
                foreach ($validImages as $image) {
                    echo "<div class='gallery__item'>";
                    echo "<img src='{$image['thumbnail']}' alt='Gallery image {$image['number']}' class='gallery__thumbnail' loading='lazy'>";
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
                            echo "<img data-fullsize='{$image['fullsize']}' alt='Gallery image {$image['number']}' class='modal__image'>";
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
  </body>
</html>