<?php
function blockArticleHeader($head, $perex, $img) {
    echo '
        <section class="t-section t-section--header">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-3">
                    </div>
                    <div class="uk-width-1-2@s">
                        <h1>' . $head . '</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="t-section t-section-content">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="t-section-content-img uk-width-1-3@s">
                        <div>
                            <img src="' .$img. '" width="315" height="315" loading="eager" alt="' . $head . '">
                        </div>
                    </div>
                    <div class="t-perex uk-width-1-2@s">
                        ' .$perex. '
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockSectionContacts($section) {
    echo '
        <section class="t-section t-section--contacts">
            <div class="uk-container">
    ';
    echo '<h2>' .$section["heading"]. '</h2>';
    echo '<div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">';
    foreach ($section["contacts"] as $key => $contact) {
        echo '
            <div>
                <div class="contact-short '.($key % 2 == 0 ? 'contact-short--secondary' : '').'">
                    <div class="contact-short-img">';
                        if ($contact["cover"]) {
                            echo '<img src="' .$contact["cover"]. '"  width="140" height="180px" alt="' .$contact["name"]. '">';
                        }
                        else {
                            echo '<div class="contact-short-img-empty"></div>';
                        }
                    echo '
                    </div>
                    <div class="contact-short-content">
                        <h3 class="contact-short-head">' .$contact["name"]. '</h3>
                        <div class="contact-short-desc">' .$contact["text"]. '</div>
                        <div class="contact-short-link">
                            <a href="mailto:' .$contact["email"]. '">
                                <svg width="16" height="16" viewBox="0 0 16 16" class="t-icon">
                                    <use xlink:href="./svg/sprite.svg#i-envelope"></use>
                                </svg>' .$contact["email"]. '
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
    echo '</div>';
    // end contacts
    echo '
            </div>
        </section>
    ';
}

?>
