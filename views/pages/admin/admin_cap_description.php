<?php
session_start();
$this->sessionOnlyAdmin();
?>

<main class="admin-cap-description__container">
    <section>
        <h1 class="h1-model text-center">Cap <span> descrip</span>tion</h1>

        <article class="admin-cap-description__content flex-center margin-auto">
            <p class="admin-cap-description__content-details"><?= '<img class="cap-description__img" src="medias/img/caps_collections/caps_img/' . htmlspecialchars($this->cap["image"]) . '" alt="retro mania cap image">'; ?></p>

            <article class="admin-cap-description__content-details">
                <h2><?= htmlspecialchars(strtoupper($this->cap['name'])) ?></h2>
                <h3 class="admin-cap-description__content-price">$<?= htmlspecialchars($this->cap['price']) ?></h3>
                <h3 class="admin-cap-description__content-details-features">Features</h3>
                <p class="admin-cap-description__content-details-description"><?= htmlspecialchars($this->cap['description']) ?></p>
                <p class="admin-cap-description__content-details-quantity"><i class="fa-solid fa-cubes"></i>Quantity: <?= htmlspecialchars($this->cap['quantity']) ?></p>
                <p class="admin-cap-description__content-details-product_id"><i class="fa-solid fa-barcode"></i>Product code: <?= htmlspecialchars($this->cap['product_id']) ?></p>
                <p class="admin-cap-description__content-details-collection_id"><i class="fa-solid fa-barcode"></i>Collection code: <?= htmlspecialchars($this->cap['collection_id']) ?></p>
            </article>

            <p class="admin-cap-description__content-details-devices"><?= '<img class="cap-description__img" src="medias/img/caps_collections/caps_img/' . htmlspecialchars($this->cap["image"]) . '" alt="retro mania cap image">'; ?></p>

            <article class="admin-cap-description__content-details-devices">
                <h2><?php echo htmlspecialchars(strtoupper($this->cap['name'])) ?></h2>
                <h3 class="admin-cap-description__content-price-devices">$<?= htmlspecialchars($this->cap['price']) ?></h3>
                <h3 class="admin-cap-description__content-details-features-devices">Features</h3>
                <p class="admin-cap-description__content-details-description-devices"><?= htmlspecialchars($this->cap['description']) ?></p>
                <p class="admin-cap-description__content-details-quantity-devices"><i class="fa-solid fa-cubes"></i>Quantity: <?= htmlspecialchars($this->cap['quantity']) ?></p>
                <p class="admin-cap-description__content-details-product_id-devices"><i class="fa-solid fa-barcode"></i>Product code: <?= htmlspecialchars($this->cap['product_id']) ?></p>
                <p class="admin-cap-description__content-details-collection_id-devices"><i class="fa-solid fa-barcode"></i>Collection code: <?= htmlspecialchars($this->cap['collection_id']) ?></p>
            </article>
        </article>
    </section>

    <section class="admin-product-update-img__content">
        <h2 class="text-center">Update the image</h2>
        <article class="admin-product-update-img__form">
            <form action="index.php?p=admin_update_cap_image" method="POST" id="admin-product-update-img__form-content">
                <input type="hidden" id="admin-product-update-image-product_id" name="product_id" value="<?= htmlspecialchars($this->cap['product_id']) ?>">
                <label for="admin-product-update-image" class="upload__label-img flex-center margin-auto"><i class="fa-solid fa-image"></i>UPLOAD</label>
                <i class="fa-solid fa-circle-check check-image-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-image-form"></i><br />
                <input type="file" id="admin-product-update-image" name="image" value="<?= htmlspecialchars($this->cap['image']) ?>">
                <input type="submit" id="admin-product-update-img__submit" class="margin-auto" value="UPDATE IMAGE">
        </article>
    </section>

    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="index.php?p=admin_caps_catalog" class="admin-product__previous-page">&laquo;</a></li>
            <li><a href="index.php?p=admin_collections_list"><i class="fa-solid fa-list"></i></a></li>
            <li><a href="index.php?p=admin_caps_catalog"><i class="fa-solid fa-clipboard-list" id="admin-product__previous-page"></i></a></li>
            <li><a href="index.php?p=admin_employees_list"><i class="fa-solid fa-users" id="admin-product__next-page"></i></a></li>
            <li><a href="index.php?p=admin_winners_list"><i class="fa-solid fa-trophy"></i></a></li>
            <li><a href="index.php?p=admin_employees_list" class="admin-product__next-page">&raquo;</a></li>
        </ul>
    </nav>
</main>