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
            blockSectionContacts($detail["section_contacts"]);
            // echo $detail["heading"];


            // echo $sectionContacts["heading"];
            // echo '
            //     <section class="t-section t-section-contacts">
            //         <div class="uk-container">
            //             <div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">
            // ';
            // foreach ($contacts as $key => $contact) {
            //     echo '
            //         <div>
            //             <div class="contact-short">
            //                 <div class="contact-short-img">';
            //                     if ($contact["cover"]) {
            //                         echo '<img src="' .$contact["cover"]. '"  width="140" height="180px" alt="' .$contact["name"]. '">';
            //                     }
            //                     else {
            //                         echo '<div class="contact-short-img-empty"></div>';
            //                     }
            //                 echo '
            //                 </div>
            //                 <div class="contact-short-content">
            //                     <h3 class="contact-short-head">' .$contact["name"]. '</h3>
            //                     <div class="contact-short-desc">' .$contact["text"]. '</div>
            //                     <div class="contact-short-link">
            //                         <svg width="16" height="16" viewBox="0 0 16 16" class="t-icon">
            //                             <use xlink:href="./svg/sprite.svg#i-envelope"></use>
            //                         </svg>' .$contact["email"]. '</div>
            //                 </div>
            //             </div>
            //         </div>
            //     ';
            // }
            // echo '
            //             </div>
            //         </div>
            //     </section>
            // ';
            ?>
        </article>
    </main>
<!-- end main -->
        <?php include 'tpl/global/footer.php';?>
    </body>
    <?php include 'tpl/global/stats.php';?>
</html>
