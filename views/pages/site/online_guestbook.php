<main class="online-guestbook__container margin-auto">
    <section>
        <h1 class="h1-model text-center">Onli<span>ne guest</span>book</h1>

        <article id="online-guestbook__sega-genesis-controller" class="flex-center text-center margin-auto">
            <img src="medias/img/caps_collections/sega_genesis_controller.png" alt="sega genesis controller image">
            <h2>Add a comment</h2>
            <p>Click on the Sega Genesis controller to leave a comment 😎</p>
        </article>

        <article class="online-guestbook__form">
            <h2>Guestbook form</h2>
            <form action="index.php?p=add_comment" method="POST" id="online-guestbook__form-content" autocomplete="off">
                <label for="guestbook-username" class="line-break-after">Username</label>
                <input type="text" id="guestbook-username" name="username" placeholder="Username...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i>

                <label for="guestbook-avatar" class="line-break-before line-break-after">Avatar</label>
                <select id="guestbook-avatar" name="avatar">
                    <option value="🤖">🤖</option>
                    <option value="😈">😈</option>
                    <option value="👻">👻</option>
                    <option value="👾">👾</option>
                    <option value="👽">👽</option>
                    <option value="👹">👹</option>
                    <option value="🐯">🐯</option>
                    <option value="🐹">🐹</option>
                    <option value="🐰">🐰</option>
                    <option value="🦁">🦁</option>
                    <option value="🐻">🐻</option>
                    <option value="🐱">🐱</option>
                </select><br />

                <label for="guestbook-title" class="line-break-after">Title</label>
                <input type="text" id="guestbook-title" name="title" placeholder="Title...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form line-break-after"></i>

                <label for="guestbook-rating" class="line-break-before line-break-after">Rating</label>
                <select id="guestbook-rating" name="rating">
                    <option value="⭐">⭐</option>
                    <option value="⭐⭐">⭐⭐</option>
                    <option value="⭐⭐⭐">⭐⭐⭐</option>
                    <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
                    <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
                </select><br />

                <input type="text" id="guestbook-website" name="website" value="">

                <label for="guestbook-comment">Comment</label>
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />
                <textarea id="guestbook-comment" name="comment" placeholder="Leave a comment just right here !"></textarea>

                <p id="guestbook-message" class="text-center margin-auto">Complete correctly all the fields</p>

                <input type="submit" id="online-guestbook__submit" class="margin-auto" value="LEAVE A COMMENT">
            </form>
        </article>

        <aside class="online-guestbook__add-comment-instructions margin-auto">
            <i class="fa-solid fa-triangle-exclamation flex-center"></i>
            <h3 class="text-center">Read the instructions below</h3>
            <ul>
                <li><span>Username:</span> only letters, numbers, hyphens and underscores allowed.</li>
                <li><span>Title:</span> only letters and white spaces allowed.</li>
            </ul>
        </aside>

        <article class="online-guestbook__comments-section">
            <h2 class="text-center">Comments section<i class="fa-solid fa-comment-dots"></i></h2>
            <?php foreach ($this->allComments as $allComment) : ?>
                <p><?= '<span class="avatar">' . htmlspecialchars($allComment['avatar']) . '</span>' . '<span class="username">' . htmlspecialchars($allComment['username']) . '</span>' ?></p>
                <p class="rating"><?= htmlspecialchars($allComment['rating']) ?></p>
                <p class="title"><?= htmlspecialchars($allComment['title']) ?></p>
                <p class="comment"><?= htmlspecialchars(str_replace($this->badWords, $this->censorBadWords, $allComment['comment'])) ?></p>
                <p class="created_at">🕑 <?= htmlspecialchars($allComment['created_at']) ?></p>
            <?php endforeach; ?>
        </article>
    </section>
</main>