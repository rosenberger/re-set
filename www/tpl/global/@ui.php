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
        <section class="t-section t-section--content">
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
};

function blockSectionText($section) {
    echo '
        <section class="t-section t-section--text">
            <div class="uk-container '.($section["heading"] == "" ? 'uk-container-small' : '').'">
    ';
    if ($section["heading"] !== "") {
        echo  '<div class="uk-grid">';
        echo '<div class="uk-width-1-3@s"><h2>' .$section["heading"]. '</h2></div>';
    }
    echo '<div class="t-text uk-width-expand">' .$section["text"]. '</div>';
    echo ($section["heading"] !== "" ? '</div>' : '');
    echo '
            </div>
        </section>
    ';
};

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
};

function blockSectionLinks($section) {
    echo '
        <section class="t-section t-section--links">
            <div class="uk-container">
    ';
    echo '<div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">';
    foreach ($section["chapters"] as $key => $chapter) {
        echo '
            <div>
                <h3>'.$chapter["heading"].'</h3>';

                $last = count($chapter["links"]);
                foreach ($chapter["links"] as $key => $link) {
                    echo '<a href="' .$link["url"]. '" target="_blank">' .$link["name"]. '</a>';
                    if ($key < $last - 1) {
                        echo '<br>';
                    }
                }
        echo '
            </div>
        ';
    }
    echo '</div>';
    // end contacts
    echo '
            </div>
        </section>
    ';
};

function blockSectionLogos($section) {
    echo '
        <section class="t-section t-section--logos">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-3@s">
                        <h3>'.$section["heading"].'</h3>
                    </div>
                    <div class="uk-width-1-2@s">';
                        echo '<div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">';
                        foreach ($section["logos"] as $key => $logo) {
                            echo '
                                <div>
                                    <a href="' .$logo["link"]. '" title="' .$logo["name"]. '" target="_blank">
                                        <img src="' .$logo["img_url"]. '" width="300" alt="' .$logo["name"]. '">
                                    </a>
                                </div>
                            ';
                        }
                        echo '</div>';
    echo '
                    </div>
                </div>
            </div>
        </section>
    ';
};
