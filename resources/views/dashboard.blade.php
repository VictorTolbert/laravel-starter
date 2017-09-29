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

{{-- <a class="avatar" href="/andrew652" oldtitle="Andrew Gaken" title="" aria-describedby="ui-tooltip-4">
    <span>
        <em class="avatar-letter" style="color:#D0D0D3;">AG</em>
    </span>
    <span>Andrew Gaken</span>
</a>
 --}}
{{-- <span class="avatar">
    <span>
        <img src="https://static.sched.com/a13/4483842/avatar.jpg.320x320px.jpg?659" alt="avatar for Victor Tolbert" id="myavatar" onerror="this.onerror=null;this.src='//cdn.schd.ws/common/img/avatar-empty.png';">
    </span>
</span> --}}

<section class="section">
    <div class="container is-fluid">
        <div class="tile is-ancestor">
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Overview</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/overview/start">Start</a>
                        <a class="tag is-medium" href="/overview/customize">Customize</a>
                        <a class="tag is-medium" href="/overview/classes">Classes</a>
                        <a class="tag is-medium" href="/overview/modular">Modular</a>
                        <a class="tag is-medium" href="/overview/responsiveness">Responsiveness</a>
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
                    <div class="paging">
                        <a>M</a>
                        <a>T</a>
                        <a>W</a>
                        <a>T</a>
                        <a>F</a>
                        <a>S</a>
                        <a>S</a>
                    </div>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">

                <div class="tile is-child box">
                    <p class="title">Columns</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/columns/basics">Basics</a>
                        <a class="tag is-medium" href="/columns/sizes">Sizes</a>
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
                    <p class="title">Form Controls</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/form/input">Input</a>
                        <a class="tag is-medium" href="/form/textarea">Textarea</a>
                        <a class="tag is-medium" href="/form/select">Select</a>
                        <a class="tag is-medium" href="/form/checkbox">Checkbox</a>
                        <a class="tag is-medium" href="/form/radio">Radio</a>
                        <a class="tag is-medium" href="/form/file">File</a>
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
                        <a class="tag is-medium" href="/components/card">Card</a>
                        <a class="tag is-medium" href="/components/dropdown">Dropdown</a>
                        <a class="tag is-medium is-dark" href="/data-table">Data Table</a>
                        <a class="tag is-medium" href="/components/menu">Menu</a>
                        <a class="tag is-medium" href="/components/message">Message</a>
                        <a class="tag is-medium" href="/components/modal">Modal</a>
                        <a class="tag is-medium" href="/components/navbar">Navbar</a>
                        <a class="tag is-medium" href="/components/pagination">Pagination</a>
                        <a class="tag is-medium" href="/components/panel">Panel</a>
                        <a class="tag is-medium" href="/components/tabs">Tabs</a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
