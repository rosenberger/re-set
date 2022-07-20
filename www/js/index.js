const jsOverlayArray = document.querySelectorAll('[js-overlay]');
const jsCloseArray = document.querySelectorAll('.js-close');
const jsTotopArray = document.querySelectorAll('.js-totop');

jsOverlayArray.forEach((el) => {
    if (el.classList.contains('is-active')) {
        el.setAttribute('aria-expanded', 'true')
    }
    else {
        el.setAttribute('aria-expanded', 'false')
    }
    el.addEventListener('click', function(){ jsOverlay(el)}, false);
});

jsCloseArray.forEach((el) => {
    el.addEventListener('click', function(){ jsClose(el)}, false);
});

jsTotopArray.forEach((el) => {
    el.addEventListener('click', function(){ jsTotop(el)}, false);
});

function jsClose(e) {
    e.closest('[data-event-att]').classList.remove('is-active');
    let eventAtt = e.parentElement.getAttribute('data-event-att');
    if (eventAtt) {
        document.querySelector('[' + eventAtt + ']').setAttribute('aria-expanded', 'false')
    }
}

function jsOverlay(e) {
    let overlayName = e.getAttribute('js-overlay');
    let overlayNames = document.getElementsByClassName(overlayName);
    if (overlayNames.length > 0) {
        overlayNames[0].classList.add('is-active');
        overlayNames[0].setAttribute('data-event-att', 'js-overlay=' + overlayName)
        e.setAttribute('aria-expanded', 'true');
    }
    else {
        console.log('error: no overlay');
    }
}

function jsTotop(e) {
    window.scroll({top: 0, left: 0, behavior: 'smooth'});
}
