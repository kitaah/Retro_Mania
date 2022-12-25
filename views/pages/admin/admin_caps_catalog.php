<?php
session_start();
$this->sessionOnlyAdmin();
?>
<main class="admin-caps-catalog__container">
    <section>
        <h1 class="h1-model text-center">Cap<span>s cata</span>log</h1>

        <table class="admin-caps-catalog__table text-center margin-auto">
            <caption>Current caps catalog</caption>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->capsCatalog as $capCatalog) : ?>
                    <tr>
                        <td><?= '<img src="medias/img/caps_collections/caps_img/' . htmlspecialchars($capCatalog["image"]) . '"class="admin-caps-catalog__img""' . '"alt="retro mania cap image"">'; ?></td>
                        <td><?= htmlspecialchars(ucwords($capCatalog['name'])) ?></td>
                        <td>$<?= htmlspecialchars($capCatalog['price']) ?></td>
                        <td><?= htmlspecialchars($capCatalog['quantity']) ?></td>
                        <td class="admin-caps-catalog__table-actions">
                            <a href="index.php?p=admin_cap_description&product_id=<?php echo htmlspecialchars($capCatalog['product_id']) ?>"><i class="fa-solid fa-circle-info cap-info"></i></a>
                            <a href="index.php?p=admin_edit_cap&product_id=<?php echo htmlspecialchars($capCatalog['product_id']) ?>"><i class="fa-solid fa-pencil"></i></i></a>
                            <a href="index.php?p=admin_delete_cap&product_id=<?php echo htmlspecialchars($capCatalog['product_id']) ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <article id="admin-add-product__sega-genesis-controller" class="flex-center text-center margin-auto">
        <img src="medias/img/caps_collections/sega_genesis_controller.png" alt="sega genesis controller image">
        <h2>Add a product</h2>
        <p>Click on the Sega Genesis controller image to add a product to the catalog 😎</p>
    </article>

    <article class="admin-add-product">
        <article class="admin-add-product__form">
            <form action="index.php?p=admin_add_cap" method="POST" id="admin-add-product__form-content">
                <h2 class="text-center">Add a<span> new pr</span>oduct</h2>
                <label for="admin-add-product-name" class="line-break-after">Cap name</label>
                <input type="text" id="admin-add-product-name" name="name" placeholder="Name...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-add-product-price" class="line-break-after">Price</label>
                <input type="number" id="admin-add-product-price" name="price" step="any" placeholder="Price...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-add-product-quantity" class="line-break-after">Quantity</label>
                <input type="number" id="admin-add-product-quantity" name="quantity" placeholder="Quantity...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-add-product-collection_id" class="line-break-after">Collection code</label>
                <input id="admin-add-product-collection_id" type="number" name="collection_id" placeholder="Collection code...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-add-product-admin_contributor_id" class="line-break-after">Admin contributor ID</label>
                <input id="admin-add-product-admin_contributor_id" type="number" name="admin_contributor_id" placeholder="Admin contributor ID...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-add-product-image" class="upload__label"><i class="fa-solid fa-image"></i>UPLOAD</label>
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />
                <input type="file" id="admin-add-product-image" name="image"><br />

                <label for="admin-add-product-description">Description</label>
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />
                <textarea id="admin-add-product-description" name="description" placeholder="Write the right description here !"></textarea><br />

                <p id="add-product-message" class="text-center">Complete correctly all the fields</p>

                <input type="submit" id="admin-add-product__submit" class="margin-auto" value="ADD PRODUCT">
            </form>
        </article>

        <aside class="admin-add-product__instructions margin-auto">
            <i class="fa-solid fa-triangle-exclamation flex-center"></i>
            <h3 class="text-center">Read the instructions below</h3>
            <ul>
                <li><span>Product name:</span> only letters and white spaces allowed.</li>
                <li><span>Collection code:</span> make sure to indicate a valid code, check the collections list <a href="index.php?p=admin_collections_list" class="blue-link">here</a> if needed.</li>
                <li><span>Admin creator ID:</span> make sure to indicate your admin ID, check this <a href="index.php?p=admin_employees_list" class="blue-link">link</a> if you don't remember it.</li>
                <li><span>Description:</span> make sure to write the description indicated in the pdf file that the marketing department sent you by email for each product.</li>
            </ul>
        </aside>
    </article>

    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="index.php?p=admin_collections_list" id="admin-caps-catalog__previous-page">&laquo;</a></li>
            <li><a href="index.php?p=admin_collections_list"><i class="fa-solid fa-list" id="admin-caps-catalog__previous-link"></i></a></li>
            <li><a href="#"><i id="admin-products-list__current-page" class="fa-solid fa-clipboard-list"></i></a></li>
            <li><a href="index.php?p=admin_employees_list"><i class="fa-solid fa-users" id="admin-caps-catalog__next-link"></i></a></li>
            <li><a href="index.php?p=admin_winners_list"><i class="fa-solid fa-trophy"></i></a></li>
            <li><a href="index.php?p=admin_employees_list" id="admin-caps-catalog__next-page">&raquo;</a></li>
        </ul>
    </nav>
</main>