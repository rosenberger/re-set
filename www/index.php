<?php
    //zobrazovanie php chyb
    ini_set("display_errors", 1);
    error_reporting (E_ALL);
    //data
    $detail = json_decode(file_get_contents('../.data/index.json'), true);
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
            blockHomepageHeader($detail["heading"], $detail["cover"]);
            if ($detail["section_articles"]) {
                $section_articles = $detail["section_articles"];
                blockSectionArticles($section_articles["articles"], $section_articles["button"], true, 3);
            }
            blockSectionParticipation();
            blockSectionTwitter();
            ?>
        </article>
    </main>
<!-- end main -->

        <?php include 'tpl/global/footer.php';?>
    </body>
</html>
