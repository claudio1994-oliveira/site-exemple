<!DOCTYPE html>
<html lang="pt_BR">
<?php include '__partials/head.php' ?>

<body>

    <input id="close-menu" class="close-menu" type="checkbox" aria-label="Close menu" role="button">
    <label class="close-menu-label" for="close-menu" title="close menu"></label>
    <aside class="menu white-bg">
        <div class="main-content menu-content">
            <h1 onclick="getElementById('close-menu').checked = false;">
                <a href="#home">LOGO</a>
            </h1>

            <nav>
                <ul onclick="getElementById('close-menu').checked = false;">
                    <li><a href="#intro">intro</a></li>
                    <li><a href="#grid-one">grid-one</a></li>
                    <li><a href="#gallery">gallery</a></li>
                    <li><a href="#grid-two">grid-two</a></li>
                    <li><a href="#pricing">pricing</a></li>
                    <li><a href="/contact">contact</a></li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="menu-spacing"></div>

    <section id="home" class="intro main-bg section">
        <div class="main-content intro-content">
            <div class="intro-text-content">
                <h2>January brings us Firefox 85</h2>
                <p>To wrap up January, we are proud to bring you the release of Firefox 85. In this version we are bringing you
                    support for the :focus-visible pseudo-class in CSS and associated devtools, and the complete removal of Flash
                    support from Firefox.</p>
            </div>
            <div class="intro-img">
                <img src="img/javascript.svg" alt="Logo de HTML, CSS e JS.">
            </div>
        </div>
    </section>

    <section id="intro" class="white-bg section">
        <div class="main-content top3-content">
            <h2>news coverage and some
                surprises</h2>
            <p>The release of Apple Silicon-based Macs at the end of last year generated a flurry of news coverage and some
                surprises at the machine’s performance. This post details some background information on the experience of
                porting Firefox to run natively on these CPUs.</p>
            <p>We’ll start with some background on the Mac transition and give an overview of Firefox internals that needed to
                know about the new architecture, before moving on to the concept of Universal Binaries.</p>
            <p>We’ll then explain how DRM/EME works on the new platform, talk about our experience with macOS Big Sur, and
                discuss various updater problems we had to deal with. We’ll conclude with the release and an overview of various
                other improvements that are in the pipeline.</p>
        </div>
    </section>


    <section id="grid-one" class="grid-one main-bg section">
        <div class="main-content grid-one-content">
            <h2 class="grid-main-heading">My Grid</h2>
            <p class="grid-description">Uma breve descrição.</p>

            <div class="grid">
                <article>
                    <h3>Teste 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
                <article>
                    <h3>Teste 2</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
                <article>
                    <h3>Teste 2</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="gallery" class="grid-one white-bg section">
        <div class="main-content grid-one-content">
            <h2 class="grid-main-heading">Gallery</h2>
            <p class="grid-description">Uma breve descrição.</p>

            <div class="grid">
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=1" alt="random image from unsplash" />
                </div>
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=2" alt="random image from unsplash" />
                </div>
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=3" alt="random image from unsplash" />
                </div>
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=4" alt="random image from unsplash" />
                </div>
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=5" alt="random image from unsplash" />
                </div>
                <div class="gallery-img">
                    <img src="http://source.unsplash.com/random/360x360?r=6" alt="random image from unsplash" />
                </div>
            </div>
        </div>
    </section>

    <section id="grid-two" class="grid-one main-bg section">
        <div class="main-content grid-one-content">
            <h2 class="grid-main-heading">My Grid</h2>
            <p class="grid-description">Uma breve descrição.</p>

            <div class="grid">
                <article>
                    <h3>Teste 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
                <article>
                    <h3>Teste 2</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
                <article>
                    <h3>Teste 2</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis cum delectus molestias. Atque doloribus
                        nobis laudantium esse ut, non commodi maxime distinctio veritatis unde, reprehenderit minus ad dolores
                        provident maiores.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="pricing" class="white-bg section">
        <div class="main-content top3-content">
            <h2>Pricing</h2>
            <p>The release of Apple Silicon-based Macs at the end of last year generated a flurry of news coverage and some
                surprises at the machine’s performance. This post details some background information on the experience of
                porting Firefox to run natively on these CPUs.</p>
            <p>We’ll start with some background on the Mac transition and give an overview of Firefox internals that needed to
                know about the new architecture, before moving on to the concept of Universal Binaries.</p>

            <div class="responsive-table">
                <table>
                    <caption>Pricing table</caption>

                    <thead>
                        <tr>
                            <th>Title 1</th>
                            <th>Title 2</th>
                            <th>Title 3</th>
                            <th>Title 4</th>
                            <th>Title 5</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Content 1</td>
                            <td>Content 2</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                        </tr>
                        <tr>
                            <td>Content 1</td>
                            <td>Content 2</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                        </tr>
                        <tr>
                            <td>Content 1</td>
                            <td>Content 2</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                            <td>Content 3</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Testando</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <section id="contact" class="intro main-bg section">
        <div class="main-content intro-content">
            <div class="intro-text-content">
                <h2>January brings us Firefox 85</h2>
                <p>To wrap up January, we are proud to bring you the release of Firefox 85. In this version we are bringing you
                    support for the :focus-visible pseudo-class in CSS and associated devtools, and the complete removal of Flash
                    support from Firefox.</p>
            </div>
            <div class="intro-img">
                <img src="img/javascript.svg" alt="Logo de HTML, CSS e JS.">
            </div>
            <div class="contact-form">
                <fieldset class="form-grid">
                    <legend>Contact me</legend>

                    <div class="form-group">
                        <label for="first-name">First name</label>
                        <input type="text" name="first-name" id="first-name" placeholder="Your name">
                    </div>

                    <div class="form-group">
                        <label for="last-name">last name</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Your last name">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Your e-mail">
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                    </div>

                    <div class="form-group full-width">
                        <button type="submit">Send message</button>
                    </div>
                </fieldset>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer white-bg">
        <p><a rel="nofollow" target="_blank" href="https://beacons.page/otaviomiranda">Feito com <span class="heart">❤</span> por Otávio Miranda</a></p>
    </footer>

    <a class="back-to-top" href="#">➤</a>

    <script src="js/script.js"></script>
</body>

</html>