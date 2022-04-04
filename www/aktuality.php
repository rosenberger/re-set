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
            blockContent();
            blockArticles();
            ?>
        </article>
    </main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
    <?php include 'tpl/global/stats.php';?>
</html>

<?php
function blockHeader() {
    echo '
        <section class="t-section t-section-header">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-3">
                    </div>
                    <div class="uk-width-1-2@s">
                        <h1>Aktuality</h1>
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockContent() {
    echo '
        <section class="t-section t-section-content">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="t-section-content-img uk-width-1-3@s">
                        <div>
                            <img src="img/Images7.png" width="315" height="315" loading="eager" alt="Chceme novou ekonomiku: ekologickou, sociální a demokratickou">
                        </div>
                    </div>
                    <div class="t-perex uk-width-1-2@s">
                        Lorem ipsum dolor sit amet porepersperum nulpa
                        porenim inissitem quatemperiam con et aditatur
                        ati audae. Invelit, sunt deliquis dolecta sum rero es
                        voleniam volorae.
                    </div>
                </div>
            </div>
        </section>
    ';
}

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
                <div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">
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
?>
