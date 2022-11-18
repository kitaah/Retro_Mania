<?php ?>
<main class="search-game__container text-center margin-auto">
    <section>
        <h1 class="h1-model">Sea<span>rch g</span>ame</h1>

        <article class="search-game__explanations">
            <h2>Search Game explanations</h2>
            <p>Here is a little search bar, try to open it by clicking on one of the yellow stars !</p>
            <p>Once you have managed to do it, you have to find the right movie title in order to win the cap of your choice.</p>
            <p>You can find a hint somewhere on your website.</p>
            <p>If you win, you will just have to go to our store to show us your winner certificate !</p>
            <p>Enjoy ! 😉</p>

            <article class="search-game__search-bar flex-center">
                <i class="fa-solid fa-star fa-star-aside"></i>
                <form id="search-game-bar">
                    <input type="search" id="search-game-text" placeholder="Search here..." size="20" maxlength="200">
                    <button type="submit" class="search-game__submit"><i class="fa-solid fa-star fa-star-button"></i></button>
                </form>
                <i class="fa-solid fa-star fa-star-aside"></i>
            </article>
        </article>

        <article id="typing-text">
            <h3>Typing...</h3>
            <i class="fa-solid fa-keyboard"></i>
        </article>

        <article id="forgot-searching-text">
            <h3>You forgot to type something ! 😵</h3>
            <p><img class="sonic__img" src="medias/img/site/search_game/sonic.gif" alt="grumpy cat image" /></p>
        </article>

        <article id="win-game-text">
            <h3>You win ! Click here 👉<a id="win-game-file" href="#" download><i class="fa-solid fa-trophy win-game-trophy"></i></a></h3>
            <p><img class="win__img margin-auto" src="medias/img/site/search_game/win_game.jpg" alt="street fighter image" /></p>
        </article>

        <article id="loose-game-text">
            <h3>You loose ! Try again ! 😘</h3>
            <p><img class="loose__img margin-auto" src="medias/img/site/search_game/loose_game.jpg" alt="street fighter image" /></p>
        </article>
    </section>
</main>