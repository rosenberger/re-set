<?php
    //zobrazovanie php chyb
    ini_set("display_errors", 1);
    error_reporting (E_ALL);
    //data
    $detail = json_decode(file_get_contents('../.data/contacts.json'), true);
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
            blockSectionText($detail["section_chapter_01"]);
            blockSectionText($detail["section_chapter_02"]);
            blockSectionContacts($detail["section_contacts"]);
            blockSectionLinks($detail["section_links"]);
            blockSectionLogos($detail["section_logos"]);
            ?>
        </article>
    </main>
<!-- end main -->
        <?php include 'tpl/global/footer.php';?>
    </body>
    <?php include 'tpl/global/stats.php';?>
</html>
