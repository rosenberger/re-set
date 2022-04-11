<?php
    //zobrazovanie php chyb
    ini_set("display_errors", 1);
    error_reporting (E_ALL);
    //data
    $detail = json_decode(file_get_contents('../.data/aktuality.json'), true);
    //definicia blockov
    include 'tpl/global/@ui.php';
?>

<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <?php include 'tpl/global/head.php';?>
  <body>
    <?php include 'tpl/global/header.php';?>

<!-- main -->
    <main class="main-content" role="main">
        <article class="main-page-content">
            <?php
            blockArticleHeader($detail["heading"], $detail["perex"], $detail["cover"]);
            blockSectionArticles($detail["articles"], $detail["button"], true, false);
            ?>
        </article>
    </main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
</html>
