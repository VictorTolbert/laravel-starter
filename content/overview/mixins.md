|                           |                                                                                                                   |    
|---------------------------|-------------------------------------------------------------------------------------------------------------------|
| `=arrow($color)`          | Creates a CSS-only down arrow. Used for the dropdown select.                                                      |
| `=block`                  | Defines a margin-bottom of 1.5rem, except when the element is the last child. Used for almost all block elements. |
| `=clearfix`               | Adds a clearfix at the end of the element. Used for the "is-clearfix" helper.                                     |
| `=center($size)`          | Positions an element in the exact center of its parent. Used for the spinner in a loading button.                 |
| `=delete`                 | Creates a CSS-only cross. Used for the delete element in modals, messages, tags...                                |
| `=fa($size, $dimensions)` | Sets the style of a Font Awesome icon container.                                                                  |
| `=hamburger($dimensions)` | Creates a CSS-only hamburger menu with 3 bars. Used for the "nav-toggle".                                         |
| `=loader`                 | Creates a CSS-only loading spinner. Used for the ".loader" element, and for input and button spinners.            |
| `=overflow-touch`         | Sets the style of a container so that it keeps momentum when scrolling on iOS devices.                            |
| `=overlay($offset: 0)`    | Makes the element overlay its parent container, like the transparent modal background.                            |
| `=placeholder`            | Sets the styles of an input placeholder.                                                                          |
| `=unselectable`           |Turns the element unselectable. Used for buttons to prevent selection when clicking.                               |

These mixins are already used throughout Bulma, but you can use them as well to extend your own styles.
