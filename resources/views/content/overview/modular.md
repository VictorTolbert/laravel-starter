# Modular

Just import what you **need**

---

Bulma consists of **29** `.sass` files that you can import **individually**.

For example, let's say you only want the Bulma **columns**. 
The file is located in the `bulma/sass/grid` folder. 
Simply **import** the utilities dependencies, and then the files you need directly:

```
@import "bulma/sass/utilities/_all"
@import "bulma/sass/grid/columns"
```

Now you can use the classes `.columns` (for the container) and `.column` directly:

```html
<div class="columns">
    <div class="column">1</div>
    <div class="column">2</div>
    <div class="column">3</div>
    <div class="column">4</div>
    <div class="column">5</div>
</div>
```

What if you only want the **button** styles instead?

```sass
@import "bulma/sass/utilities/_all"
@import "bulma/sass/elements/button.sass"
```

You can now use the `.button` class, and all its modifiers:

- `.is-active`
- `.is-primary`, `.is-info`, `.is-success`...
- `.is-small`, `.is-medium`, `.is-large`
- `.is-outlined`, `.is-inverted`, `.is-link`
- `.is-loading`, `[disabled]`

```html
<a class="button">
    Button
</a>

<a class="button is-primary">
    Primary button
</a>

<a class="button is-large">
    Large button
</a>

<a class="button is-loading">
    Loading button
</a>
```
