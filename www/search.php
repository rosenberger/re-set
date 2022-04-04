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
                    <div class="uk-width-1-3@s">
                    </div>
                    <div class="uk-width-1-2@s">
                        <h1>
                            Hledání
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockArticles() {
    echo '
        <section class="t-section">
            <div class="uk-container">
                <p>Nalezeno 145 výsledků.</p>
                <div class="t-grid">
                    <div>
                        <a href="./clanek.php" class="article-short article-short-h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">Kampaň Zastavme špinavé prachy má další úspěch</h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span> — Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="./clanek.php" class="article-short article-short-h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">Kampaň Zastavme špinavé prachy má další úspěch</h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span> — Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.

                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="./clanek.php" class="article-short article-short-h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">Kampaň Zastavme špinavé prachy má další úspěch</h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span> — Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.

                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="./clanek.php" class="article-short article-short-h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">Kampaň Zastavme špinavé prachy má další úspěch</h3>
                                <div class="article-short-desc">
                                    <i class="article-short-date">10/8/2021</i> — Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou klimatickou politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
              <div class="t-section-f uk-text-center">
                  <a href="#" class="t-button">Zobrazit další výsledky</a>
              </div>
          </div>
      </section>
    ';
}
?>