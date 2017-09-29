@extends('layouts.app')

@section('content')
<header class="hero is-light">
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
    <div class="container is-fluid">
        <div class="tile is-ancestor">
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Overview</p>
                    <p class="tags">
                        <a class="tag is-large" href="/overview/start">Start</a>
                        <a class="tag is-large" href="/overview/customize">Customize</a>
                        <a class="tag is-large" href="/overview/classes">Classes</a>
                        <a class="tag is-large" href="/overview/modular">Modular</a>
                        <a class="tag is-large" href="/overview/responsiveness">Responsiveness</a>
                        <a class="tag is-large" href="/overview/variables">Variables</a>
                        <a class="tag is-large" href="/overview/colors">Colors</a>
                        <a class="tag is-large" href="/overview/functions">Functions</a>
                        <a class="tag is-large" href="/overview/mixins">Mixins</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Modifiers</p>
                    <p class="tags">
                        <a class="tag is-large" href="/modifiers/syntax">Syntax</a>
                        <a class="tag is-large" href="/modifiers/helpers">Helpers</a>
                        <a class="tag is-large" href="/modifiers/responsive-helpers">Responsive Helpers</a>
                        <a class="tag is-large" href="/modifiers/typography-helpers">Typography Helpers</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">

                <div class="tile is-child box">
                    <p class="title">Columns</p>
                    <p class="tags">
                        <a class="tag is-large" href="/columns/basics">Basics</a>
                        <a class="tag is-large" href="/columns/sizes">Sizes</a>
                        <a class="tag is-large" href="/columns/responsiveness">Responsiveness</a>
                        <a class="tag is-large" href="/columns/nesting">Nesting</a>
                        <a class="tag is-large" href="/columns/gap">Gap</a>
                        <a class="tag is-large" href="/columns/options">Options</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Layout</p>
                    <p class="tags">
                        <a class="tag is-large" href="/layout/container">Container</a>
                        <a class="tag is-large" href="/layout/level">Level</a>
                        <a class="tag is-large" href="/layout/media">Media Object</a>
                        <a class="tag is-large" href="/layout/hero">Hero</a>
                        <a class="tag is-large" href="/layout/section">Section</a>
                        <a class="tag is-large" href="/layout/footer">Footer</a>
                        <a class="tag is-large" href="/layout/tiles">Tiles</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Form Controls</p>
                    <p class="tags">
                        <a class="tag is-large" href="/form/input">Input</a>
                        <a class="tag is-large" href="/form/textarea">Textarea</a>
                        <a class="tag is-large" href="/form/select">Select</a>
                        <a class="tag is-large" href="/form/checkbox">Checkbox</a>
                        <a class="tag is-large" href="/form/radio">Radio</a>
                        <a class="tag is-large" href="/form/file">File</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Elements</p>
                    <p class="tags">
                        <a class="tag is-large" href="/elements/box">Box</a>
                        <a class="tag is-large" href="/elements/button">Button</a>
                        <a class="tag is-large" href="/elements/content">Content</a>
                        <a class="tag is-large" href="/elements/delete">Delete</a>
                        <a class="tag is-large" href="/elements/icon">Icon</a>
                        <a class="tag is-large" href="/elements/image">Image</a>
                        <a class="tag is-large" href="/elements/notification">Notification</a>
                        <a class="tag is-large" href="/elements/progress">Progress</a>
                        <a class="tag is-large" href="/elements/table">Table</a>
                        <a class="tag is-large" href="/elements/tag">Tag</a>
                        <a class="tag is-large" href="/elements/title">Title</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Components</p>
                    <p class="tags">
                        <a class="tag is-large" href="/components/datepicker">Datepicker</a>
                        <a class="tag is-large" href="/components/popover">Popover</a>
                        <a class="tag is-large" href="/components/breadcrumb">Breadcrumb</a>
                        <a class="tag is-large" href="/components/card">Card</a>
                        <a class="tag is-large" href="/components/dropdown">Dropdown</a>
                        <a class="tag is-large" href="/components/menu">Menu</a>
                        <a class="tag is-large" href="/components/message">Message</a>
                        <a class="tag is-large" href="/components/modal">Modal</a>
                        <a class="tag is-large" href="/components/navbar">Navbar</a>
                        <a class="tag is-large" href="/components/pagination">Pagination</a>
                        <a class="tag is-large" href="/components/panel">Panel</a>
                        <a class="tag is-large" href="/components/tabs">Tabs</a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
