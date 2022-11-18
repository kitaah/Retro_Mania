<?php 
session_start();
$this->sessionOnlyAdmin();
?>

<main class="admin-product-update__container">
    <article>
        <h1 class="h1-model text-center">Prod<span>uct up</span>date</h1>

        <article class="admin-product-update__form">
            <form action="index.php?page=admin_update_cap" method="POST" id="admin-product-update__form-content">
                <h2 class="text-center">Update the product</h2>
                <input type="hidden" id="admin-product-update-product_id" name="product_id" value="<?php echo htmlspecialchars($this->cap['product_id']) ?>">

                <label for="admin-product-update-name" class="line-break-after">Name</label>
                <input type="text" id="admin-product-update-name" name="name" value="<?php echo htmlspecialchars($this->cap['name']) ?>">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-product-update-price" class="line-break-after">Price</label>
                <input type="number" id="admin-product-update-price" name="price" step="any" value="<?php echo htmlspecialchars($this->cap['price']) ?>">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-product-update-quantity" class="line-break-after">Quantity</label>
                <input type="number" id="admin-product-update-quantity" name="quantity" value="<?php echo htmlspecialchars($this->cap['quantity']) ?>">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-product-update-collection_id" class="line-break-after">Collection code</label>
                <input id="admin-product-update-collection_id" type="number" name="collection_id" value="<?php echo htmlspecialchars($this->cap['collection_id']) ?>">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-product-update-admin_contributor_id" class="line-break-after">Admin contributor ID</label>
                <input id="admin-product-update-admin_contributor_id" type="number" name="admin_contributor_id" value="<?php echo htmlspecialchars($this->cap['admin_contributor_id']) ?>">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-product-update-description">Description</label>
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />
                <textarea id="admin-product-update-description" name="description"><?php echo htmlspecialchars($this->cap['description']) ?></textarea>

                <p id="product-update-message" class="text-center">Complete correctly all the fields</p>

                <input type="submit" id="admin-product-update__submit" class="margin-auto" value="UPDATE PRODUCT">
            </form>
        </article>

        <aside class="admin-product-update__instructions margin-auto">
            <i class="fa-solid fa-triangle-exclamation flex-center"></i>
            <h3 class="text-center">Read the instructions below</h3>
            <ul>
                <li><span>Product name:</span> make sure to uppercase the first letter of each word.</li>
                <li><span>Collection code:</span> make sure to indicate a valid code, check the collections list <a href="index.php?page=admin_collections_list" class="blue-link">here</a> if needed.</li>
                <li><span>Admin creator ID:</span> make sure to indicate your admin ID, check this <a href="index.php?page=admin_employees_list" class="blue-link">link</a> if you don't remember it.</li>
                <li><span>Description:</span> make sure to write the description indicated in the pdf file that the marketing department sent you by email regarding the product.</li>
            </ul>
        </aside>
    </article>

    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="index.php?page=admin_caps_catalog" id="admin-product-update__previous-page">&laquo;</a></li>
            <li><a href="index.php?page=admin_collections_list"><i class="fa-solid fa-list"></i></a></li>
            <li><a href="index.php?page=admin_caps_catalog"><i class="fa-solid fa-clipboard-list" id="product-update__previous-link"></i></a></li>
            <li><a href="index.php?page=admin_employees_list"><i class="fa-solid fa-users" id="product-update__next-link"></i></a></li>
            <li><a href="index.php?page=admin_employees_list"><i class="fa-solid fa-trophy"></i></a></li>
            <li><a href="index.php?page=admin_winners_list" id="admin-product-update__next-page">&raquo;</a></li>
        </ul>
    </nav>
</main>