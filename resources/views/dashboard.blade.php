@extends('layouts.app')

@section('content')
<header class="hero is-dark">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('dashboard') }}
        </div>
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Dashboard</h1>
            <h2 class="subtitle">Lorem ipsum <abbr>dolor</abbr> sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">
        <h1 class="title">Mixins</h1>
        <h2 class="subtitle">Utility mixins for custom elements and responsive helpers</h2>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>=arrow($color)</code></td>
                    <td>Creates a CSS-only down arrow. Used for the dropdown select.</td>
                </tr>
                <tr>
                    <td><code>=block</code></td>
                    <td>Defines a margin-bottom of 1.5rem, except when the element is the last child. Used for almost all block elements.</td>
                </tr>
                <tr>
                    <td><code>=clearfix</code></td>
                    <td>Adds a clearfix at the end of the element. Used for the “is-clearfix” helper.</td>
                </tr>
                <tr>
                    <td><code>=center($size)</code></td>
                    <td>Positions an element in the exact center of its parent. Used for the spinner in a loading button.</td>
                </tr>
                <tr>
                    <td><code>=delete</code></td>
                    <td>Creates a CSS-only cross. Used for the delete element in modals, messages, tags…</td>
                </tr>
                <tr>
                    <td><code>=fa($size, $dimensions)</code></td>
                    <td>Sets the style of a Font Awesome icon container.</td>
                </tr>
                <tr>
                    <td><code>=hamburger($dimensions)</code></td>
                    <td>Creates a CSS-only hamburger menu with 3 bars. Used for the “nav-toggle”.</td>
                </tr>
                <tr>
                    <td><code>=loader</code></td>
                    <td>Creates a CSS-only loading spinner. Used for the “.loader” element, and for input and button spinners.</td>
                </tr>
                <tr>
                    <td><code>=overflow-touch</code></td>
                    <td>Sets the style of a container so that it keeps momentum when scrolling on iOS devices.</td>
                </tr>
                <tr>
                    <td><code>=overlay($offset: 0)</code></td>
                    <td>Makes the element overlay its parent container, like the transparent modal background.</td>
                </tr>
                <tr>
                    <td><code>=placeholder</code></td>
                    <td>Sets the styles of an input placeholder.</td>
                </tr>
                <tr>
                    <td><code>=unselectable</code></td>
                    <td>Turns the element unselectable. Used for buttons to prevent selection when clicking.</td>
                </tr>
            </tbody>
        </table>

    </div>
</section>



<section class="section">
    <div class="container is-fluid">
        <div class="tile is-ancestor">
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Overview and Guidelines</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/overview/start">Start</a>
                        <a class="tag is-medium" href="/overview/customize">Customize</a>
                        <a class="tag is-medium" href="/overview/classes">Classes</a>
                        <a class="tag is-medium" href="/overview/modular">Modular</a>
                        <a class="tag is-medium" href="/overview/responsiveness">Responsiveness</a>
                        {{-- <a class="tag is-medium" href="/columns/icons">Icons</a> --}}
                        {{-- <a class="tag is-medium" href="/columns/spacing">Spacing</a> --}}
                        <a class="tag is-medium" href="/overview/variables">Variables</a>
                        <a class="tag is-medium" href="/overview/colors">Colors</a>
                        <a class="tag is-medium" href="/overview/functions">Functions</a>
                        <a class="tag is-medium" href="/overview/mixins">Mixins</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Modifiers</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/modifiers/syntax">Syntax</a>
                        <a class="tag is-medium" href="/modifiers/helpers">Helpers</a>
                        <a class="tag is-medium" href="/modifiers/responsive-helpers">Responsive Helpers</a>
                        <a class="tag is-medium" href="/modifiers/typography-helpers">Typography Helpers</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">

                <div class="tile is-child box">
                    <p class="title">Columns</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/columns/basics">Basics</a>
                        <a class="tag is-medium" href="/columns/sizing">Sizing</a>
                        <a class="tag is-medium" href="/columns/responsiveness">Responsiveness</a>
                        <a class="tag is-medium" href="/columns/nesting">Nesting</a>
                        <a class="tag is-medium" href="/columns/gap">Gap</a>
                        <a class="tag is-medium" href="/columns/options">Options</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Layout</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/layout/container">Container</a>
                        <a class="tag is-medium" href="/layout/level">Level</a>
                        <a class="tag is-medium" href="/layout/media">Media Object</a>
                        <a class="tag is-medium" href="/layout/hero">Hero</a>
                        <a class="tag is-medium" href="/layout/section">Section</a>
                        <a class="tag is-medium" href="/layout/footer">Footer</a>
                        <a class="tag is-medium" href="/layout/tiles">Tiles</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Form</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/form/input">Field</a>
                        <a class="tag is-medium" href="/form/input">Input</a>
                        <a class="tag is-medium" href="/form/textarea">Textarea</a>
                        <a class="tag is-medium" href="/form/select">Select</a>
                        <a class="tag is-medium" href="/form/autocomplete">Autocomplete</a>
                        <a class="tag is-medium" href="/form/checkbox">Checkbox</a>
                        <a class="tag is-medium" href="/form/radio">Radio</a>
                        <a class="tag is-medium" href="/form/switch">Switch</a>
                        <a class="tag is-medium" href="/form/file">File</a>
                        <a class="tag is-medium" href="/form/upload">Upload</a>
                        <a class="tag is-medium" href="/form/datepicker">Datepicker</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Elements</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/elements/box">Box</a>
                        <a class="tag is-medium" href="/elements/button">Button</a>
                        <a class="tag is-medium" href="/elements/content">Content</a>
                        <a class="tag is-medium" href="/elements/delete">Delete</a>
                        <a class="tag is-medium" href="/elements/icon">Icon</a>
                        <a class="tag is-medium" href="/elements/image">Image</a>
                        <a class="tag is-medium" href="/elements/notification">Notification</a>
                        <a class="tag is-medium" href="/elements/progress">Progress</a>
                        <a class="tag is-medium" href="/elements/table">Table</a>
                        <a class="tag is-medium" href="/elements/tag">Tag</a>
                        <a class="tag is-medium" href="/elements/title">Title</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Components</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/components/datepicker">Datepicker</a>
                        <a class="tag is-medium" href="/components/popover">Popover</a>
                        <a class="tag is-medium" href="/components/breadcrumb">Breadcrumb</a>
                        <a class="tag is-medium" href="/components/card">Card</a>i
                        <a class="tag is-medium" href="/components/dropdown">Dropdown</a>
                        <a class="tag is-medium is-dark" href="/data-table">Data Table</a>
                        <a class="tag is-medium" href="/components/menu">Menu</a>
                        <a class="tag is-medium" href="/components/message">Message</a>
                        <a class="tag is-medium" href="/components/modal">Modal</a>
                        <a class="tag is-medium" href="/components/navbar">Navbar</a>
                        <a class="tag is-medium" href="/components/pagination">Pagination</a>
                        <a class="tag is-medium" href="/components/panel">Panel</a>
                        <a class="tag is-medium" href="/components/tabs">Tabs</a>
                        <a class="tag is-medium" href="/components/tooltip">Collapse</a>
                        <a class="tag is-medium" href="/components/tooltip">Tooltip</a>
                        <a class="tag is-medium" href="/components/dialog">Dialog</a>
                        <a class="tag is-medium" href="/components/toast">Toast</a>
                        <a class="tag is-medium" href="/components/snackbar">Snackbar</a>
                        <a class="tag is-medium" href="/components/notification">Notification</a>
                        <a class="tag is-medium" href="/components/message">Loading</a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
