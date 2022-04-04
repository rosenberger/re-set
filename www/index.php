<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'tpl/global/head.php';?>
  <body>
    <?php include 'tpl/global/header.php';?>

<!-- main -->
    <main class="main-content" role="main">
        <article class="main-page-content">
            <?php
            blockHeader();
            blockArticles();
            blockParticipation();
            blockTwitter();
            ?>
        </article>
    </main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
    <?php include 'tpl/global/stats.php';?>
</html>

<?php
function blockArticles (){
    echo '
        <section class="t-section t-section-articles">
            <div class="uk-container">
                <div class="t-section-h">
                    <nav class="uk-flex uk-flex-center">
                        <ul class="t-tab">
                            <li class="t-tab-header"><span>Témata:</span></li>
                            <li class="t-active"><a href="#">Bydlení</a></li>
                            <li><a href="#">Nerůst</a></li>
                            <li><a href="#">Klima</a></li>
                            <li><a href="#">Budování hnutí</a></li>
                            <li><a href="#">Nová ekonomika</a></li>
                            <li><a href="#">Vzdělávání</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m">
                    <div>
                        <a class="article-short uk-link-reset" href="./clanek.php">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <h3 class="article-short-head">Kampaň Zastavme špinavé prachy má další úspěch</h3>
                            <div class="article-short-desc">
                                <p><i>10/8/2021</i><span>—</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="article-short uk-link-reset" href="./clanek.php">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <h3 class="article-short-head">Zelená transformace ekonomiky musí být v jádru sociálně spravedlivá</h3>
                            <div class="article-short-desc">
                                <p><i>10/8/2021</i><span>—</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="article-short uk-link-reset" href="./clanek.php">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <h3 class="article-short-head">Po celém světě stále banky investují do fosilních paliv</h3>
                            <div class="article-short-desc">
                                <p><i>10/8/2021</i><span>—</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="t-section-f uk-text-center">
                    <a href="#" class="t-button">Zobrazit další aktuality</a>
                </div>
            </div>
        </section>
    ';
}

function blockParticipation() {
    echo '
    <section class="t-section t-section-participation">
        <div class="uk-container">
            <div class="uk-grid">
                <h2 class="t-h1 uk-width-1-3@s">Jak se zapojit?</h2>
                <h3 class="t-h3-second uk-width-2-3@s">Existuje několik způsobů, jak naší platformu můžeš podpořit nebo se aktivně zapojit do budování lepšího sociálně-ekologického prostředí.</h3>
            </div>
            <div class="uk-grid uk-child-width-1-3">
                <div>
                    <h3>Podpoř nás</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div>
                    <h3>Informuj se</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div>
                    <h3>Zapoj se</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>
    ';
}

function blockHeader() {
    echo '
        <section class="t-section t-section-header">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-3">
                        <img src="img/Images2.png" alt="Chceme novou ekonomiku: ekologickou, sociální a demokratickou">
                    </div>
                    <div class="uk-width-1-2">
                        <h1>
                            Chceme novou ekonomiku: ekologickou, sociální a demokratickou
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockTwitter() {
    echo '
        <section class="t-section t-section-twitter">
            <div class="uk-container">
                <h3>Sledujte nás na Twitteru<h3>
            </div>
        </section>
    ';
}
?>
