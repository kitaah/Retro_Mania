<main class="cap-description__container">
    <section>
        <h1 class="h1-model text-center">Cap <span> descrip</span>tion</h1>

        <article class="cap-description__content flex-center margin-auto">
            <p class="cap-description__content-details"><?= '<img class="cap-description__img" src="medias/img/caps_collections/caps_img/' . htmlspecialchars($this->cap["image"]) . '" alt="retro mania cap image">'; ?></p>

            <article class="cap-description__content-details">
                <h2><?= htmlspecialchars(strtoupper($this->cap['name'])) ?></h2>
                <h3 class="cap-description__content-details-price">$<?= htmlspecialchars($this->cap['price']) ?></h3>
                <h3 class="cap-description__content-details-features">Features<i class="fa-solid fa-heart"></i></h3>
                <p class="cap-description__content-details-description"><?= htmlspecialchars($this->cap['description']) ?></p>
                <p class="made-in-US">Made in the US</p>
                <p class="cap-description__content-details-product_id"><i class="fa-solid fa-barcode"></i>Product code: <?= htmlspecialchars($this->cap['product_id']) ?></p>

                <nav>
                    <ul class="cap-description__content-navs">
                        <li><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a></li>
                        <li><a href="https://www.pinterest.fr/"><i class="fa-brands fa-pinterest-square"></i></a></li>
                    </ul>
                </nav>
            </article>

            <p class="cap-description__content-details-devices"><?= '<img class="cap-description__img" src="medias/img/caps_collections/caps_img/' . htmlspecialchars($this->cap["image"]) . '" alt="retro mania cap image"/>'; ?></p>

            <article class="cap-description__content-details-devices">
                <h2><?= htmlspecialchars(strtoupper($this->cap['name'])) ?></h2>
                <h3 class="cap-description__content-details-price-devices">$<?= htmlspecialchars($this->cap['price']) ?></h3>
                <h3 class="cap-description__content-details-features-devices">Features<i class="fa-solid fa-heart"></i></h3>
                <p class="cap-description__content-details-description-devices"><?= htmlspecialchars($this->cap['description']) ?></p>
                <p class="made-in-US">Made in the US</p>
                <p class="cap-description__content-details-product_id-devices"><i class="fa-solid fa-barcode"></i>Product code: <?= htmlspecialchars($this->cap['product_id']) ?></p>

                <nav>
                    <ul class="cap-description__content-navs-devices">
                        <li><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a></li>
                        <li><a href="https://www.pinterest.fr/"><i class="fa-brands fa-pinterest-square"></i></a></li>
                    </ul>
                </nav>
            </article>

            <dialog id="popup-message" class="text-center">
                <i id="xmark-popup" class="fa-solid fa-circle-xmark"></i>
                <p>Thanks for putting a red heart !</p>
                <p>🥰🥰🥰</p>
            </dialog>
        </article>
    </section>

    <p><a href="index.php?p=caps_catalog" class="cap-description__previous-page text-center">&laquo;</a></p>
    </nav>
</main>