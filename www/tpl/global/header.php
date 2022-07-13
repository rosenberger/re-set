<header class="t-header">
    <div class="uk-container">
      <div class="t-header-grid">
        <div class="t-header-logo">
            <a href="./" title="Re-set">
                <svg width="234" height="103" viewBox="0 0 234 103">
                    <use xlink:href="./svg/sprite.svg#logo-re-set"></use>
                </svg>
            </a>
        </div>
        <div class="t-header-nav">
          <nav class="t-header-nav-main uk-navbar u-visible@m">
              <ul class="t-navbar t-navbar-h">
                  <li><a class="is-active" href="./">Úvodní strana</a></li>
                  <li><a href="./aktuality.php">Aktuality</a></li>
                  <li><a href="./o-nas.php">O nás</a></li>
                  <li><a href="./materialy.php">Materiály</a></li>
                  <li><a href="./pro-novinare.php">Pro novináře</a></li>
                  <li><a href="#">Podpořte nás</a></li>
              </ul>
          </nav>
          <div class="t-header-nav-right">
              <nav class="u-visible@m">
                  <ul class="t-navbar t-navbar-h t-navbar-small">
                      <li><a class="is-active" href="#">CZ</a></li>
                      <li><a href="#">EN</a></li>
                  </ul>
              </nav>
              <nav>
                  <ul class="t-navbar t-navbar-h t-navbar-small">
                      <li>
                          <button title="Search" js-overlay="js-overlay-search">
                              <svg width="22" height="22" viewBox="0 0 22 22">
                                  <use xlink:href="./svg/sprite.svg#i-search"></use>
                              </svg>
                              <span class="sr-only">Hledání</span>
                          </button>
                      </li>
                      <li class="u-hidden@m">
                          <button title="Re-set" js-overlay="js-overlay-menu">
                              <svg width="22" height="22" viewBox="0 0 22 22">
                                  <use xlink:href="./svg/sprite.svg#i-bars"></use>
                              </svg>
                              <span class="sr-only">Hlavní menu</span>
                          </button>
                      </li>
                  </ul>
              </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="t-overlay js-overlay-menu">
        <div class="t-overlay-container">
            <button class="t-close-btn js-close">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <use xlink:href="./svg/sprite.svg#i-close"></use>
                    <span class="sr-only">Zavřít</span>
                </svg>
            </button>
            <div class="t-overlay-content">
                <div class="t-overlay-content-center">
                    <nav class="t-header-nav-main uk-navbar">
                        <ul class="t-navbar t-navbar-v">
                            <li><a class="is-active" href="./">Úvodní strana</a></li>
                            <li><a href="./aktuality.php">Aktuality</a></li>
                            <li><a href="./o-nas.php">O nás</a></li>
                            <li><a href="./materialy.php">Materiály</a></li>
                            <li><a href="./pro-novinare.php">Pro novináře</a></li>
                            <li><a href="#">Podpořte nás</a></li>
                        </ul>
                    </nav>
                    <nav class="t-navbar-lang">
                        <ul class="t-navbar t-navbar-h">
                            <li><a class="is-active" href="#">CZ</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="t-overlay js-overlay-search">
        <div class="t-overlay-container">
            <button class="t-close-btn js-close">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <use xlink:href="./svg/sprite.svg#i-close"></use>
                    <span class="sr-only">Zavřít</span>
                </svg>
            </button>
            <div class="t-overlay-content">
                <form class="t-f-suggest">
                    <input class="t-f-suggest-input" type="text" name="search" value="" maxlength="100" placeholder="Hledaný výraz...">
                    <button class="t-f-suggest-toggle">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <use xlink:href="./svg/sprite.svg#i-search"></use>
                        </svg>
                        <span class="sr-only">Vyhledat</span>
                    </button>
                </form>
                <div class="t-f-suggest-results">
                    <ul class="t-f-suggest-results-list">
                        <li class="t-f-suggest-results-item">
                            <a href="#">Po celém světě stále banky investují do fosilních paliv</a>
                        </li>
                        <li class="t-f-suggest-results-item">
                            <a href="#">Zelená transformace ekonomiky musí být v jádru sociálně spravedlivá</a>
                        </li>
                        <li class="t-f-suggest-results-item">
                            <a  href="#">Kampaň Zastavme špinavé prachy má další úspěch</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
