<?php
    //zobrazovanie php chyb
    ini_set("display_errors", 1);
    error_reporting (E_ALL);
    //data
    $detail = json_decode(file_get_contents('../.data/search.json'), true);
    //definicia blockov
    include 'tpl/global/@ui.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php include 'tpl/global/head.php';?>
    <body>
        <?php include 'tpl/global/header.php';?>

<!-- main -->
<main class="main-content" role="main">
    <article class="main-page-content">
      <?php
        blockArticleHeader($detail["heading"], $detail["perex"], $detail["cover"]);
        blockArticles();
      ?>
    </article>
</main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
</html>

<?php

function blockArticles() {
    echo '
        <section class="t-section">
            <div class="uk-container uk-container-small uk-margin-medium-bottom">
                <div class="uk-margin-bottom">
                    <form class="t-f-suggest t-f-suggest--dark">
                        <input class="t-f-suggest-input" type="text" name="search" value="klimatickou" maxlength="100" placeholder="Hledaný výraz...">
                        <button class="t-f-suggest-toggle">
                            <svg width="22" height="22" viewBox="0 0 22 22">
                                <use xlink:href="./svg/sprite.svg#i-search"></use>
                            </svg>
                            <span class="sr-only">Vyhledat</span>
                        </button>
                    </form>
                </div>
                <p>Nalezeno 145 výsledků.</p>
            </div>
            <div class="uk-container">
                <div class="t-grid">
                    <div>
                        <div class="article-short article-short--h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230?4" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">
                                    <a href="./clanek.php" class="article-short-link-ext">
                                        Kampaň Zastavme špinavé prachy má další úspěch
                                    </a>
                                </h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou <strong class="u-text-highlight">klimatickou</strong> politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short article-short--h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230?1" alt="Lorem Ipsum">
                            </div>
                            <div>
                            <h3 class="article-short-head">
                                <a href="./clanek.php" class="article-short-link-ext">
                                    Lorem Ipsum
                                </a>
                            </h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou <strong class="u-text-highlight">klimatickou</strong> politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short article-short--h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230?2" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">
                                    <a href="./clanek.php" class="article-short-link-ext">
                                        Kampaň Zastavme špinavé prachy má další úspěch
                                    </a>
                                </h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou <strong class="u-text-highlight">klimatickou</strong> politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short article-short--h">
                            <div class="article-short-img">
                                <img src="https://picsum.photos/400/230?3" alt="Kampaň Zastavme špinavé prachy má další úspěch">
                            </div>
                            <div>
                                <h3 class="article-short-head">
                                    <a href="./clanek.php" class="article-short-link-ext">
                                        Kampaň Zastavme špinavé prachy má další úspěch
                                    </a>
                                </h3>
                                <div class="article-short-desc">
                                    <span class="article-short-info">10/8/2021</span>Pojišťovna Kooperativa, respektive její mateřská firma Vienna Insurance Group, zveřejnila novou <strong class="u-text-highlight">klimatickou</strong> politiku. V ní slibuje, že co nejdříve ukončí pojištění firmám bez důvěryhodného plánu konce uhlí.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="t-section-f u-text-center">
                <ul class="pagination uk-pagination">
                    <li><a href="#" class="uk-pagination-prev"><span class="sr-only">Předchozí stránka</span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>…</span></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li class="uk-disabled"><span>…</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#" class="uk-pagination-next"><span class="sr-only">Další stránka</span></a></li>
                </ul>
              </div>
          </div>
      </section>
    ';
}
