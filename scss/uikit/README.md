# Správa komponent UIkitu
### Popis struktury uikit/_import.scss
```scss
// 1. zjednodušená náhrada za uikit/src/scss/components/inverse
@import "inverse";
```
- inverse.scss je zjednodušená náhrada za UIkit komponentu **uikit/src/scss/components/inverse.scss** v node_modules
- obsahuje triedu .uk-light, ktorá sa používa v ďalších komponentách v tvare `{ @extend .uk-light !optional;}`(ovplyvnené komponenty: card, navbar, offcanvas, overlay, section, tile)
- tento spôsob použitia inverse.scss je zvolený kvôli optimalizaci veľkosti css (porovnanie veľkosti výsledku" 400KB -> 300KB)
- v prípade potreby je potrebné rozšíriť utilitu `.uk-light`

```scss
// 2. výber UIkit komponent
@import "uikit-theme";
```
- súbor obsahuje všetky UIkit komponenty načítané z node_modules
- zakomentované komponenty sa nepoužívajú a zoznam je aktualizovaný pre seed.cpilot.site s  **UIkit v3.9.4** & **cpilot.site.core v14.0.0**


### Použitie v index.scss
```scss
// 4. Import UIkit.
@import "uikit/import";
//@import "../vendor/pilotcz/cpilot.site.core/node_modules/uikit/src/scss/uikit-theme";
```
- zakompentovaný import je plná verze UIkit scss
