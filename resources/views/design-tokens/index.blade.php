@extends('layouts.app')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Design Tokens</h1>
            <h2 class="subtitle">Design tokens are the visual design atoms of the design system — specifically, they are named entities that store visual design attributes. We use them in place of hard-coded values (such as hex values for color or pixel values for spacing) in order to maintain a scalable and consistent visual system for UI development.</h2>
        </div>
    </div>
</header>
<section class="section">

<pre><code language="scss">// Import Bulma's core
@import '~bulma/sass/utilities/_all';

// 1. Import the initial variables
// @import "../sass/utilities/initial-variables"

// 2. Set your own initial variables
@import './utilities/variables/palettes';
$black                  : hsl(0, 0%, 4%);
$black-bis              : hsl(0, 0%, 7%);
$black-ter              : hsl(0, 0%, 14%);

$grey-darker            : hsl(0, 0%, 21%);
$grey-dark              : hsl(0, 0%, 29%);
$grey                   : hsl(0, 0%, 48%);
$grey-light             : hsl(0, 0%, 71%);
$grey-lighter           : hsl(0, 0%, 86%);

$white-ter              : hsl(0, 0%, 96%);
$white-bis              : hsl(0, 0%, 98%);
$white                  : hsl(0, 0%, 100%);

$red                    : #c5203e;
$yellow                 : #ffdd57; // Bulma
$yellow                 : #fff03f; // Salesforce
$orange                 : #f4831f;
$green                  : #04864b;
$blue                   : #4295b3;
$purple                 : #692565;

// Videa Brand Colors
$fun-blue               : #1d4f90;
$st-tropaz              : #276092;
$boston-blue            : #4296b4;
$fountain-blue          : #64b1bc;
$monte-carlo            : #83c8bc;
$porcelain              : #e0e4e5;
$trout                  : #52545d;
$cardinal               : #c5203e;
$plum                   : #692565;
$ecstasy                : #f4831f;
$beeswax                : #fdecbb;

// Other
$gorse                  : #fff03f;
$tabasco                : #a61a14;
$valencia               : #d4504c;
$tangerine              : #ff9a3c;
$emerald                : #4bca81;
$flush-mahogany         : #c23934;
$science-blue           : #0070d2;
$salem                  : #04844b;
$koromiko               : #ffb75d;
$azure                  : #1589ee;
$snowy-mint             : #d9ffdf;
$biscay                 : #16325c;
$midnight-blue          : #00396b;
$endeavor               : #005fb2;
$cerulean               : #00a1df;
$patten-blue            : #d8edff;
$maroon                 : #870500;
$malibu                 : #5eb4ff;
$deep-cove              : #061c3f;
$pippin                 : #ffdde1;
$lemon-chiffon          : #faffbd;
$deep-blush             : #ea8288;

// Some Brand Colors
$css3                   : #1572B6;
$facebook               : #4267B2;
$git                    : #F14E32;
$html5                  : #E34F26;
$javascript             : #F7DF1E;
$react                  : #00D8FF;
$twitter                : #4099ff;
$vue                    : #4FC08D;
$salesforce             : #00A1E0;
$bootstrap              : #563D7C;
$rss                    : #FFA500;
$atlassian              : #0747A6;
$linkedin               : #0077B5;
// 3. Set the derived variables

$light                  : $white-ter;
$dark                   : $grey-darker;

$primary                : $dark;
$primary-invert         : findColorInvert($primary);

$secondary              : $dark;
$secondary-invert       : findColorInvert($secondary);

$tertiary               : $fun-blue;
$tertiary-invert        : findColorInvert($tertiary);

$danger                 : $dark;
$danger-invert          : findColorInvert($danger);

$warning                : $dark;
$warning-invert         : findColorInvert($warning);

$lit                    : $yellow;
$lit-invert             : findColorInvert($lit);

$success                : $dark;
$success-invert         : findColorInvert($success);

$info                   : $dark;
$info-invert            : findColorInvert($info);

$css3-invert            : findColorInvert($css3);
$facebook-invert        : findColorInvert($facebook);
$git-invert             : findColorInvert($git);
$html5-invert           : findColorInvert($html5);
$javascript-invert      : findColorInvert($javascript);
$react-invert           : findColorInvert($react);
$twitter-invert         : findColorInvert($twitter);
$vue-invert             : findColorInvert($vue);

// Setup $colors to use as bulma classes (e.g. 'is-twitter')
$colors                 : (
'white'                 : ($white, $black),
'black'                 : ($black, $white),
'light'                 : ($light, $light-invert),
'dark'                  : ($dark, $dark-invert),
'primary'               : ($primary, $primary-invert),
'secondary'             : ($secondary, $secondary-invert),
'tertiary'              : ($tertiary, $tertiary-invert),
'info'                  : ($info, $info-invert),
'success'               : ($success, $success-invert),
'warning'               : ($warning, $warning-invert),
'danger'                : ($danger, $danger-invert),
'css3'                  : ($css3, $css3-invert),
'html5'                 : ($html5, $html5-invert),
'javascript'            : ($javascript, $javascript-invert),
'git'                   : ($git, $git-invert),
'react'                 : ($react, $react-invert),
'facebook'              : ($facebook, $facebook-invert),
'twitter'               : ($twitter, $twitter-invert),
'vue'                   : ($vue, $vue-invert),
'lit'                   : ($lit, $lit-invert),
);

// Typography
$family-serif           : "Merriweather", "Georgia", serif;
$family-obscured        : 'Flow Circular', monospace;
$family-sans-serif      : 'Roboto', sans-serif;
$family-monospace       : "Operator Mono", "Roboto Mono", "Consolas", monospace;
$family-primary         : $family-sans-serif;

// Font Sizing
$size-1                 : 3rem;
$size-2                 : 2.5rem;
$size-3                 : 2rem;
$size-4                 : 1.5rem;
$size-5                 : 1.25rem;
$size-6                 : 1rem;
$size-7                 : 0.75rem;

// Font Weight
$weight-light           : 300;
$weight-normal          : 400;
$weight-semibold        : 500;
$weight-bold            : 700;

// Body
$body-size              : 15px;
$body-background        : $porcelain;

// Code colors
$code                   : $red;
$code                   : $dark;
$code-background        : $background;
$pre                    : $text;
$pre-background         : $background;

// Links
$link                   : $primary;
$link-invert            : $primary-invert;
$link-focus-border      : $primary;

// Box
$box-color              : $text;
$box-background-color   : $white;
$box-radius             : none;
$box-shadow             : 0 1px 1px rgba($black, 0.1), 0 0 0 1px rgba($black, 0.1);
$box-padding            : 1.25rem;
$box-link-hover-shadow  : 0 2px 3px rgba($black, 0.1), 0 0 0 1px $link;
$box-link-active-shadow : inset 0 1px 2px rgba($black, 0.2), 0 0 0 1px $link;

// Responsiveness
// 960, 1152, and 1344 have been chosen because they are divisible by both 12 and 16
$tablet                 : 769px;
// 960px container + 40px
$desktop                : 1000px;
// 1152px container + 40
$widescreen             : 1192px;
// 1344px container + 40
$fullhd                 : 1384px;

// Miscellaneous
$easing                 : ease-out;
$radius-small           : 2px;
$radius                 : 3px;
$radius-large           : 5px;
$speed                  : 86ms;

//// Table
// $table-color                                   : $grey-darker;
// $table-background-color                        : $white;
// $table-cell-border                             : 1px solid $grey-lighter;
// $table-cell-border-width                       : 0 0 1px;
// $table-cell-padding                            : 0.5em 0.75em;
// $table-cell-heading-color                      : $text-strong;

// $table-head-color                              : red;
// $table-head-cell-border-width                  : 0 0 2px;
// $table-head-cell-color                         : $white;
// $table-foot-cell-border-width                  : 2px 0 0;
// $table-foot-cell-color                         : $text-strong;
// $table-row-hover-background-color              : $white-bis;
// $table-row-active-background-color             : $primary;
// $table-row-active-color                        : $primary-invert;
// $table-striped-row-even-background-color       : $white-bis;
// $table-striped-row-even-hover-background-color : $white-ter;
</code></pre>
</section>
@endsection
