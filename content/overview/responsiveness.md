## Vertical by default

Every element in Bulma is **mobile-first** and optimizes for **vertical reading**, so by default on mobile:

- `columns` are stacked vertically
- the `level` component will show its children stacked vertically
- the `nav` menu will be hidden

For example, you can enforce the **horizontal** layout for both `columns` or `nav` by appending the `is-mobile` modifer.

## Breakpoints

Bulma has 5 breakpoints:

- mobile: up to 768px
- tablet: from 769px
- desktop: from 1008px
- widescreen: from 1200px
- fullhd: from 1392px

Bulma uses 9 responsive mixins:

```sass
=mobile
until 768px
=tablet
from 769px
=tablet-only
from 769px and until 1007px
=touch
until 1007px
=desktop
from 1008px
=desktop-only
from 1008px and until 1199px
=widescreen
from 1200px
=widescreen-only
from 1200px and until 1391px
New! =fullhd
from 1392px
```
