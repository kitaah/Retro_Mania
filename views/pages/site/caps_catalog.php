<main class="caps-catalog__container flex-center text-center">
    <section class="caps-catalog__content margin-auto">
        <h1 class="h1-model">Cap<span>s cata</span>log</h1>

        <article class="caps-catalog__content-details">
            <?php foreach ($this->capsCatalog as $capCatalog) : ?>
                <p><?= '<img class="caps-catalog__img" src="medias/img/caps_collections/caps_img/'. htmlspecialchars($capCatalog["image"]) . '" alt="retro mania cap image">' ?></p>
                <header>
                    <h2><?= htmlspecialchars($capCatalog['name']) ?></h2>
                    <h3>$<?= htmlspecialchars($capCatalog['price']) ?></h3>
                </header>
                <a class="flex-center margin-auto" href="index.php?p=cap_description&product_id=<?php echo htmlspecialchars($capCatalog['product_id']) ?>"><i class="fa-solid fa-hand-pointer"></i></a>
            <?php endforeach; ?>
        </article>

        <p><img src="medias/img/caps_collections/akira_motorbike.png" id="akira-motorbike__img" alt="akira motorbike image"></p>
    </section>
</main>