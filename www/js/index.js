/* Open */
// function openNav() {
//   document.getElementById("myNav").style.height = "100%";
// }
//
// /* Close */
// function closeNav() {
//   document.getElementById("myNav").style.height = "0%";
// }

const jsOverlayArray = document.querySelectorAll('[js-overlay]');
const jsCloseArray = document.querySelectorAll('.js-close');

jsOverlayArray.forEach((el) => {
    if (el.classList.contains('t-active')) {
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

// document.querySelector('.js-close').addEventListener('click', function(){ jsClose(this)}, false);

function jsClose(e) {
    console.log(e);
    e.parentElement.classList.remove('t-active');
    let eventAtt = e.parentElement.getAttribute('data-event-att');
    if (eventAtt) {
        document.querySelector('[' + eventAtt + ']').setAttribute('aria-expanded', 'false')
    }
}

function jsOverlay(e) {
    let overlayName = e.getAttribute('js-overlay');
    let overlayNames = document.getElementsByClassName(overlayName);
    if (overlayNames.length > 0) {
        overlayNames[0].classList.add('t-active');
        overlayNames[0].setAttribute('data-event-att', 'js-overlay=' + overlayName)
        e.setAttribute('aria-expanded', 'true');
    }
    else {
        console.log('error: no overlay');
    }
    //overlayNames[0].style.height = "100%";
}
