<?php 
    session_start();
    $this->sessionOnlyAdmin();
?>

<main class="admin-employees-list__container">
    <article>
        <h1 class="h1-model text-center">Emplo<span>yees</span> list</h1>

        <table class="admin-employees-list__table text-center margin-auto">
            <caption>Current employees list</caption>
            <thead>
                <tr>
                    <th>Full name</th>
                    <th>Phone number</th>
                    <th>Email address</th>
                    <th>Job</th>
                    <th>Admin_id</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->employeesList as $employeeList) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars(ucwords($employeeList['full_name'])) ?></td>
                            <td><?php echo htmlspecialchars($employeeList['phone_number']) ?></td>
                            <td><?php echo htmlspecialchars($employeeList['email_address']) ?></td>
                            <td><?php echo htmlspecialchars($employeeList['job']) ?></td>
                            <td><?php echo htmlspecialchars($employeeList['admin_id']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </article>

    <nav>
        <ul class="admin__bottom-navs flex-center">
            <li><a href="index.php?page=admin_caps_catalog" id="admin-employees-list__previous-page">&laquo;</a></li>
            <li><a href="index.php?page=admin_collections_list"><i class="fa-solid fa-list"></i></a></li>
            <li><a href="index.php?page=admin_caps_catalog"><i class="fa-solid fa-clipboard-list" id="admin-employees-list__previous-link"></i></a></li>
            <li><a href="#"><i id="admin-employees-list__current-page" class="fa-solid fa-users admin-nav-icon"></i></a></li>
            <li><a href="index.php?page=admin_winners_list"><i class="fa-solid fa-trophy" id="admin-employees-list__next-link"></i></a></li>
            <li><a href="index.php?page=admin_winners_list" id="admin-employees-list__next-page">&raquo;</a></li>
        </ul>
    </nav>
</main>