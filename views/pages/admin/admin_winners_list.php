<!-- ADMIN WINNERS LIST PAGE : display all the search game winners -->
<?php 
    session_start();
    $this->sessionOnlyAdmin();
?>

<main class="admin-winners-list__container">
    <article>
        <h1 class="h1-model text-center">Win<span>ners l</span>ist</h1>

        <!-- Winners list into a table : winner_id / full_name / date / product_id for each winner -->
        <table class="admin-winners-list__table text-center margin-auto">
            <caption>Search Game Winners of the year 2022</caption>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Full name</th>
                    <th>Date</th>
                    <th>Cap name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->winnersList as $winnerList) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($winnerList['winner_id']) ?></td>
                        <td><?php echo htmlspecialchars(ucwords($winnerList['full_name'])) ?></td>
                        <td><?php echo htmlspecialchars($winnerList['date']) ?></td>
                        <td><?php echo htmlspecialchars($winnerList['product_name']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </article>

    <!-- Navigation bar : Collections list / Caps catalog / Employees list / Search Game Winners -->
    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="index.php?page=admin_employees_list" id="admin-winners-list__previous-page">&laquo;</a></li>
            <li><a href="index.php?page=admin_collections_list"><i class="fa-solid fa-list"></i></a></li>
            <li><a href="index.php?page=admin_caps_catalog"><i class="fa-solid fa-clipboard-list"></i></a></li>
            <li><a href="index.php?page=admin_employees_list"><i class="fa-solid fa-users" id="admin-winners-list__previous-link"></i></a></li>
            <li><a href="#"><i id="admin-winners-list__current-page" class="fa-solid fa-trophy"></i></a></li>
            <li><a href="#" class="no-changing-page">&raquo;</a></li>
        </ul>
    </nav>
</main>