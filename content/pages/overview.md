# Overview
- Elegant
- Clean
- Semantic
- Declarative
- Legible
- Easy to maintain
- Reactive
## Features
- [#1][/link] Feature
- New ECMAScript Syntax
- Client Data Container (Vuex, Redux)
- Opinionated but Configurable (CSS, Sass, Less, Stylus, HTML, Pug, JavaScript, Typescript, JSX)

## Topics

CSS Properties, CSS Grid, Flexbox, React, Vue, ES6

## Examples (Blog,)

Photography, Origami, Writing, Music, Movies, Football, Soccer, Podcasts, Apple, Windows, Android, Google, Surface Pro, Macbook Pro, iPhone, Samsung Galaxy, Vaping, Marching Band, Data


## Design Tokens (Variables)

```scss
// 1. Import Bulma's core
@import "~bulma/sass/utilities/_all";

// 2. Add and Override some initial variables
$red: #c5203e;
$yellow: #f4831f;
$green: #04864b;
$blue: #4295b3;

// Videa Brand Colors
$fun-blue: #1D4F90;
$st-tropaz: #276092;
$boston-blue: #4296B4;
$fountain-blue: #64B1BC;
$monte-carlo: #83C8BC;
$porcelain: #E0E4E5;
$trout: #52545D;
$cardinal: #C5203E;
$plum: #692565;
$ecstasy: #f4831f;
$beeswax: #FDECBB;

// 3. Set the derived variables
$primary: $plum;
$primary-invert: findColorInvert($primary);

$secondary: $ecstasy;
$secondary-invert: findColorInvert($secondary);

$danger: $red;
$danger-invert: findColorInvert($danger);

$warning: $yellow;
$warning-invert: findColorInvert($warning);

$success: $green;
$success-invert: findColorInvert($success);

$info: $blue;
$info-invert: findColorInvert($info);

$twitter: #4099ff;
$twitter-invert: findColorInvert($twitter);

// Setup $colors to use as bulma classes (e.g. 'is-twitter')
$colors: (
    "white": ($white, $black),
    "black": ($black, $white),
    "light": ($light, $light-invert),
    "dark": ($dark, $dark-invert),
    "primary": ($primary, $primary-invert),
    "secondary": ($secondary, $secondary-invert),
    "info": ($info, $info-invert),
    "success": ($success, $success-invert),
    "warning": ($warning, $warning-invert),
    "danger": ($danger, $danger-invert),
    "twitter": ($twitter, $twitter-invert)
);

// Body
$body-size: 14px;  // Overriding the default base font size
$body-background: $porcelain;

// Typography     // FIXME: when v5.2 is released
// $family-serif: "Merriweather", "Georgia", serif;
$family-sans-serif: "Roboto", sans-serif;
// $family-monospace: "Operator Mono", "Roboto Mono", "Consolas", monospace;
// $family-code: $family-monospace;
// $family-primary: $family-monospace;
// $family-primary: $family-serif;
// $family-primary: $family-sans-serif;
// Use the new serif family
// $family-sans-serif: $family-primary;

// Font Sizing
$size-1: 3rem;
$size-2: 2.5rem;
$size-3: 2rem;
$size-4: 1.5rem;
$size-5: 1.25rem;
$size-6: 1rem;
$size-7: 0.75rem;

// Font Weight
$weight-light: 300;
$weight-normal: 400;
$weight-semibold: 500;
$weight-bold: 700;

// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// // 2. Primary colors

// $primary: $turquoise;

// $info: $blue;
// $success: $green;
// $warning: $yellow;
// $danger: $red;

// $light: $white-ter;
// $dark: $grey-darker;

// Links
$link: $primary;
$link-invert: $primary-invert;
$link-focus-border: $primary;

// Box
$box-color:	$text;
$box-background-color:	$white;
$box-radius: $radius-large;
$box-shadow: 0 2px 3px rgba($black, 0.1), 0 0 0 1px rgba($black, 0.1);
$box-padding: 1.25rem;
$box-link-hover-shadow:	0 2px 3px rgba($black, 0.1), 0 0 0 1px $link;
$box-link-active-shadow: inset 0 1px 2px rgba($black, 0.2), 0 0 0 1px $link;

//// Table
// $table-color: $grey-darker;
// $table-background-color: $white;
// $table-cell-border: 1px solid $grey-lighter;
// $table-cell-border-width: 0 0 1px;
// $table-cell-padding: 0.5em 0.75em;
// $table-cell-heading-color: $text-strong;

// $table-head-color: red;
// $table-head-cell-border-width:	0 0 2px;
// $table-head-cell-color:	$white;
// $table-foot-cell-border-width: 2px 0 0;
// $table-foot-cell-color:	$text-strong;
// $table-row-hover-background-color: $white-bis;
// $table-row-active-background-color: $primary;
// $table-row-active-color: $primary-invert;
// $table-striped-row-even-background-color: $white-bis;
// $table-striped-row-even-hover-background-color:	$white-ter;
```

## Directives


```html
<div id="app">
    <a class="button">Button</a>
</div>
```

```css
@font-face {
    font-family: Roboto;
    src: url(/assets/fonts/Roboto.woff2) format('woff2'),
         url(/assets/fonts/Roboto.woff) format('woff');
    font-display: optional;
}
@font-face {
    font-family: Roboto;
    src: url(/assets/fonts/Roboto-LightItalic.woff2) format('woff2'),
         url(/assets/fonts/Roboto-LightItalic.woff) format('woff');
    font-display: optional;
    font-weight: 200;
    font-style: italic;
}
```