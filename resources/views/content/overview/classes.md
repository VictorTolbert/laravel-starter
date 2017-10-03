# Classes

Bulma is simply a collection of CSS classes. Write the HTML code you want.

---

Bulma is a **CSS** framework, meaning that the end result is simply a **single** `.css` file: 
<https://github.com/jgthms/bulma/blob/master/css/bulma.css>

Because Bulma solely comprises CSS classes, the HTML code you write has **no impact** on the styling of your page. That's why `.input` exists as a class, so you can choose _which_ `<input type="text">` elements you want to style.

Bulma only styles **generic** tags directly **twice**:

- `generic.sass` to define a basic style for your page
- the `.content` class to use for any textual content, like WYSIWYG
