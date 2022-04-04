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
                        <h1>Pro novináře</h1>
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
                    <div class="uk-width-1-3">
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
                <div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Re-Set logo</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Fotografie</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Lorem ipsum</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Re-Set logo</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Fotografie</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="article-short " href="./clanek.php">
                            <h3 class="article-short-head">Lorem ipsum</h3>
                            <div class="article-short-desc">
                                <p>
                                    <span class="article-short-info">21/3/2021 – PDF – 15 Mb</span><br>
                                    Lorem ipsum dolor sit amet doloris amet
                                </p>
                            </div>
                            <div>
                                <a href="#" class="t-button">Stáhnout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
?>
