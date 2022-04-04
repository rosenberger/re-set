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
                blockElements();
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
                            Elements
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockElements() {
    echo '
        <section class="t-section">
            <div class="uk-container uk-container-small">
                <code> &lt;h1&gt;Nadpis h1&lt;/h1&gt;</code>
                <h1>Nadpis h1</h1>
                <hr>
                <code> &lt;h2&gt;Nadpis h2&lt;/h2&gt;</code>
                <h2>Nadpis h2</h2>
                <hr>
                <code> &lt;h3&gt;Nadpis h3&lt;/h3&gt;</code>
                <h3>Nadpis h3</h3>
                <hr>
                <code> &lt;h4&gt;Nadpis h4&lt;/h4&gt;</code>
                <h4>Nadpis h4</h4>
                <hr>
                <code> &lt;p&gt;Text&lt;/p&gt;</code>
                <p>Lorem ipsum dolor sit amet porepersperum nulpa
                porenim inissitem quatemperiam con et aditatur
                ati audae. Invelit, sunt deliquis dolecta sum rero es
                voleniam volorae.</p>
                <hr>
                <code> &lt;h2&gt;Nadpis h2 ako h1&lt;/h2&gt;</code>
                <h2 class="t-h1">Nadpis h2</h2>
                <hr>
                <code> &lt;p class="t-perex"&gt;Perex článku&lt;/p&gt;</code>
                <p class="t-perex">Lorem ipsum dolor sit amet porepersperum nulpa
                porenim inissitem quatemperiam con et aditatur
                ati audae. Invelit, sunt deliquis dolecta sum rero es
                voleniam volorae.</p>
                <hr>
                <code> &lt;p class="t-h3-second"&gt;Nadpis h3 s iným fontom&lt;/p&gt;</code>
                <h3 class="t-h3-second">Existuje několik způsobů, jak naší platformu můžeš
                podpořit nebo se aktivně zapojit do budování
                lepšího sociálně-ekologického prostředí.</h3>
                <hr>
                <code> &lt;a href="" class="t-button"&gt;Button&lt;/a&gt;</code>
                <p>
                <a href="#" class="t-button">Stáhnout</a>
                </p>
                <hr>
            </div>
        </section>
    ';
}
?>
