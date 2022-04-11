<?php
    //zobrazovanie php chyb
    ini_set("display_errors", 1);
    error_reporting (E_ALL);
    //data
    $detail = json_decode(file_get_contents('../.data/clanek.json'), true);
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
            blockArticleDetailHeader($detail["heading"], $detail["perex"], $detail["cover"], $detail["label"], $detail["info"]);
            blockSectionText($detail["section_chapter_01"]);
            if ($detail["section_articles"]) {
                $section_articles = $detail["section_articles"];
                blockSectionArticles($section_articles["articles"], $section_articles["button"], true, 3);
            }
            ?>
        </article>
    </main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
</html>
