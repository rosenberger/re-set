<?php
function blockArticleHeader($head, $perex, $img) {
    echo '
        <section class="t-section t-section--header">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-3">
                    </div>
                    <div class="uk-width-2-3@s">
                        <h1>' . $head . '</h1>
                    </div>
                </div>
            </div>
        </section>
        ';
        if ($perex) {
            echo '<section class="t-section t-section--content">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="t-section-content-img uk-width-1-3@s">';
                        if ($img != "") {
                            echo '
                                <div>
                                    <img src="' .$img. '" width="315" height="315" loading="eager" alt="' . $head . '">
                                </div>
                            ';
                        }
                echo '</div>
                        <div class="t-perex uk-width-2-3@s">
                            ' .$perex. '
                        </div>
                    </div>
                </div>
            </section>
        ';
        }
}

function blockArticleDetailHeader($head, $perex, $img, $label, $info) {
    echo '
        <section class="t-section t-section--header-detail">
            <div>
                <img src="' .$img. '" width="1600" height="500" loading="eager" alt="' . $head . '">
            </div>
            <div class="uk-container">
                <div class="uk-grid uk-grid-collapse uk-margin-bottom">';
                if ($label) {
                    echo '<span class="article-label">' .$label. '</span>';
                }
                if ($info) {
                    echo '<span class="article-label-info">' .$info. '</span>';
                }
                echo '</div>
                <h1>' . $head . '</h1>
                <div class="t-perex">' . $perex . '</div>
            </div>
        </section>
    ';
}


function blockHomepageHeader($head, $img) {
    echo '
        <section class="t-section t-section--header t-section--header-homepage">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="t-section-content-img uk-width-1-3@s">';
                    if ($img != "") {
                        echo '
                            <div>
                                <img src="' .$img. '" width="315" height="315" loading="eager" alt="' . $head . '">
                            </div>
                        ';
                    }
            echo '</div>
                    <div class="uk-width-2-3@s">
                        <h1>' . $head . '</h1>
                    </div>
                </div>
            </div>
        </section>
    ';
}

function blockSectionText($section) {
    echo '
        <section class="t-section t-section--text">
            <div class="uk-container '.($section["heading"] == "" ? 'uk-container-small' : '').'">
    ';
    if ($section["heading"] !== "") {
        echo  '<div class="uk-grid">';
        echo '<div class="uk-width-1-3@s"><h2 class="t-h1">' .$section["heading"]. '</h2></div>';
    }
    echo '<div class="t-text uk-width-expand">' .$section["text"]. '</div>';
    echo ($section["heading"] !== "" ? '</div>' : '');
    echo '
            </div>
        </section>
    ';
};


/*
$section - obsah
$button - btn na spodku sekcie
$menu -  zobrazenie menu clankov
$count - pocet vypisanych clankov
*/
function blockSectionArticles($section, $button, $menu, $count) {
    echo '
        <section class="t-section t-section--articles">
            <div class="uk-container">';
            if ($menu) {
                echo '
                    <div class="t-section-h">
                        <nav class="uk-flex uk-flex-center">
                            <ul class="t-tab">
                                <li class="t-tab-header"><span>Témata:</span></li>
                                <li class="is-active"><a href="#">Bydlení</a></li>
                                <li><a href="#">Nerůst</a></li>
                                <li><a href="#">Klima</a></li>
                                <li><a href="#">Budování hnutí</a></li>
                                <li><a href="#">Nová ekonomika</a></li>
                                <li><a href="#">Vzdělávání</a></li>
                            </ul>
                        </nav>
                    </div>
                ';
            }

                echo '<div class="t-grid t-child-width-1-2@s t-child-width-1-3@m">';
    foreach ($section as $key => $article_short) {
        if ($count && $key == $count) {
            break;
        }
        echo '
            <div>
                <div class="article-short '.($article_short["type"] == "document" ? 'article-short--document' : '').'">';
                        if ($article_short["cover"]) {
                            echo '<div class="article-short-img">';
                            if ($article_short["label"]) {
                                echo '<span class="article-short-label">' .$article_short["label"]. '</span>';
                            }
                            echo '<img src="' .$article_short["cover"]. '"  width="400" height="230px" alt="' .$article_short["heading"]. '">';
                            echo '</div>';
                        }
                    echo '
                    <div class="article-short-content">
                        <h3 class="article-short-head">';
                            if($article_short["url"]) {
                                echo '<a class="article-short-link-ext" href="' .$article_short["url"]. '">' .$article_short["heading"]. '</a>';
                            }
                            else {
                                echo $article_short["heading"];
                            }
                        echo '</h3>
                        <div class="article-short-desc">';
                            if ($article_short["info"]) {
                                echo '<span class="article-short-info">' .$article_short["info"]. '</span>';
                            }
                            echo $article_short["text"];
                        echo '</div>';
                        if ($article_short["url"] && $article_short["action_text"]) {
                            echo '
                            <div class="article-short-link">
                                <a href="' .$article_short["url"]. '" class="t-button">' .$article_short["action_text"]. '</a>
                            </div>
                            ';
                        }
                    echo '</div>
                </div>
            </div>
        ';
    }
    echo '</div>';
    // end articles
    if ($button) {
        echo '
        <div class="t-section-f uk-text-center">
            <a href="' .$button["url"]. '" class="t-button">' .$button["text"]. '</a>
        </div>
        ';
    }
    echo '
            </div>
        </section>
    ';
}

function blockSectionContacts($section) {
    echo '
        <section class="t-section t-section--contacts">
            <div class="uk-container">
    ';
    echo '<h2 class="t-h1">' .$section["heading"]. '</h2>';
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
                echo '<div class="links-list">';
                $last = count($chapter["links"]);
                foreach ($chapter["links"] as $key => $link) {
                    echo '<a href="' .$link["url"]. '" target="_blank">' .$link["name"]. '</a>';
                    if ($key < $last - 1) {
                        echo '<br>';
                    }
                }
                echo '</div>';
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

function blockSectionTwitter() {
    echo '
        <section class="t-section t-section-twitter">
            <div class="uk-container">
                <h3>Sledujte nás na Twitteru</h3>
            </div>
        </section>
    ';
}

function blockSectionParticipation() {
    echo '
    <section class="t-section t-section-participation">
        <div class="uk-container">
            <div class="uk-grid">
                <h2 class="t-h1 uk-width-1-3@s">Jak se zapojit?</h2>
                <h3 class="t-h3-second uk-width-2-3@s">Existuje několik způsobů, jak naší platformu můžeš podpořit nebo se aktivně zapojit do budování lepšího sociálně-ekologického prostředí.</h3>
            </div>
            <div class="t-section-f">
                <div class="t-part-list t-grid t-child-width-1-2@s t-child-width-1-3@m">
                    <div>
                        <div class="t-part-item">
                            <div class="t-part-img">
                                <img alt="Podpoř nás" src="./img/Images4.png" width="230" height="230" />
                            </div>
                            <h3 class="t-h2 t-part-head"><a href="https://www.darujme.cz/projekt/1203521" class="t-part-link-ext" target="blank">Podpoř nás</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div>
                        <div class="t-part-item">
                            <div class="t-part-img">
                                <img alt="Informuj se" src="./img/Images5.png" width="230" height="230">
                            </div>
                            <h3 class="t-h2 t-part-head"><a href="#" class="t-part-link-ext">Informuj se</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div>
                        <div class="t-part-item">
                            <div class="t-part-img">
                                <img alt="Zapoj se" src="./img/Images6.png" width="230" height="230">
                            </div>
                            <h3 class="t-h2 t-part-head"><a href="./o-nas.php" class="t-part-link-ext">Zapoj se</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
}
