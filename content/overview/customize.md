# Customizing with Sass

Create your **own theme** with a simple set of **variables**

---

If you're familiar with [Sass](http://sass-lang.com/) and want to **customize** Bulma with your own colors and variables, just install Bulma via **npm**:

### 1. Download the source files:


```sh
npm install bulma
```

or clone the repository: <https://github.com/jgthms/bulma>

---

### 2. Set your variables

Add your own colors, set new fonts, override Bulma's default styles...

```sass
// 1. Import the initial variables
@import "../sass/utilities/initial-variables"

// 2. Set your own initial variables
// Update blue
$blue: #72d0eb
// Add pink and its invert
$pink: #ffb3b3
$pink-invert: #fff
// Add a serif family
$family-serif: "Merriweather", "Georgia", serif

// 3. Set the derived variables
// Use the new pink as the primary color
$primary: $pink
$primary-invert: $pink-invert
// Use the existing orange as the danger color
$danger: $orange
// Use the new serif family
$family-primary: $family-serif

// 4. Import the rest of Bulma
@import "../bulma"
```

### 3. See the result: before and after

As `$blue` has been updated, and since `$blue-invert` is automatically calculated with the function `$blue-invert: findColorInvert($blue)`, the `$blue-invert` is now black instead of white

<!-- TODO Add Codepen Example Embed or screenshot examples -->
