# Colors

The **colors** that **style** most Bulma elements and components

---

Most elements and components have color variations thanks to **modifiers** with syntax `.is-$color`, like `is-primary` or `is-dark`.

This is thanks to the `$colors` **Sass map**, through which Bulma cycles to grab all the colors and their inverts.

| Color   | Variable      | Value          | Actual value          | Invert variable   | Actual invert value   |
|---------|---------------|----------------|-----------------------|-------------------|-----------------------|
| White   | `$white`      | `$white`       | `hsl(0, 0%, 100%)`    | `$black`          | `rgba(0, 0, 0, 0.7)`  |
| Black   | `$black`      | `$black`       | `hsl(0, 0%, 4%)`      | `$white`          | `#fff`                |
| Light   | `$light`      | `$white-ter`   | `hsl(0, 0%, 96%)`     | `$light-invert`   | `rgba(0, 0, 0, 0.7)`  |
| Dark    | `$dark`       | `$grey-darker` | `hsl(0, 0%, 21%)`     | `$dark-invert`    | `#fff`                |
| Primary | `$primary`    | `$turquoise`   | `hsl(171, 100%, 41%)` | `$primary-invert` | `#fff`                |
| Info    | `$info`       | `$blue`        | `hsl(217, 71%, 53%)`  | `$info-invert`    | `#fff`                |
| Success | `$success`    | `$green`       | `hsl(141, 71%, 48%)`  | `$success-invert` | `#fff`                |
| Warning | `$warning`    | `$yellow`      | `hsl(48, 100%, 67%)`  | `$warning-invert` | `rgba(0, 0, 0, 0.7)`  |
| Danger  | `$danger`     | `$red`         | `hsl(348, 100%, 61%)` | `$danger-invert`  | `#fff`                |
