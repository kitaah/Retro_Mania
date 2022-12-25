<?php
session_start();
$this->sessionOnlyAdmin();
?>
<main class="admin-collections-list__container">
    <section>
        <h1 class="h1-model text-center">Colle<span>ctions</span> list</h1>

        <table class="admin-collections-list__table text-center margin-auto">
            <caption>Current collections list</caption>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Creator</th>
                    <th>Year of creation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->collectionsList as $collectionList) : ?>
                    <tr>
                        <td><?= htmlspecialchars($collectionList['collection_id']) ?></td>
                        <td><?= htmlspecialchars(ucwords($collectionList['name'])) ?></td>
                        <td><?= htmlspecialchars(ucwords($collectionList['creator'])) ?></td>
                        <td><?= htmlspecialchars($collectionList['creation_year']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="#" class="no-changing-page">&laquo;</a></li>
            <li><a href="#"><i id="admin-collections-list__current-page" class="fa-solid fa-list"></i></a></li>
            <li><a href="index.php?p=admin_caps_catalog"><i class="fa-solid fa-clipboard-list" id="admin-collections-list__next-link"></i></a></li>
            <li><a href="index.php?p=admin_employees_list"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="index.php?p=admin_winners_list"><i class="fa-solid fa-trophy"></i></a></li>
            <li><a href="index.php?p=admin_caps_catalog" id="admin-collections-list__next-page">&raquo;</a></li>
        </ul>
    </nav>
</main>