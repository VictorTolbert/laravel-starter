@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<header class="hero is-primary">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('dashboard') }}
        </div>
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            {{-- <h1 class="title">Design Coding Dashboard</h1> --}}
            <h1 class="title">UI Toolkit</h1>
            {{-- <span class="icon" style="color: rgb(191, 28, 56)">
                @svg('material.opacity')
            </span> --}}
            <h2 class="subtitle">HTML and CSS for Prototyping in the Browser</h2>
        </div>
    </div>
</header>
<section class="m-t-md m-b-none is-clearfix">
    <div class="container is-fluid">
        <span class="is-pulled-right">
            <a class="button is-neutral is-small" href="{{route('atomic-design')}}">Atomic Design View</a>
        </span>
        {{-- <img src="/bop-wit-it.gif"> --}}
    </div>
</section>
<section class="section p-t-md">
    <div class="">
        <div class="tile is-ancestor">
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Overview and Guidelines</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/start">Getting Started</a>
                        <a class="tag is-medium" href="/customize">Customizing with Sass</a>
                        <a class="tag is-medium" href="/classes">Classes</a>
                        <a class="tag is-medium" href="/design-tokens">Design Tokens</a>
                        <a class="tag is-medium" href="/modular">Modular</a>
                        <a class="tag is-medium" href="/responsiveness">Responsiveness</a>
                        {{-- <a class="tag is-medium" href="/columns/icons">Icons</a> --}}
                        {{-- <a class="tag is-medium" href="/columns/spacing">Spacing</a> --}}
                        <a class="tag is-medium" href="/variables">Variables</a>
                        <a class="tag is-medium" href="/colors">Colors</a>
                        <a class="tag is-medium" href="/functions">Functions</a>
                        <a class="tag is-medium" href="/mixins">Mixins</a>
                        <a class="tag is-medium" href="/typography">Typography</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Modifiers and Utilities</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/syntax">Syntax</a>
                        <a class="tag is-medium" href="/spacing">Spacing</a>
                        <a class="tag is-medium" href="/spacing">Z-Index</a>
                        <a class="tag is-medium" href="/helpers">Helpers</a>
                        <a class="tag is-medium" href="/responsive-helpers">Responsive Helpers</a>
                        <a class="tag is-medium" href="/typography-helpers">Typography Helpers</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Columns</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/basics">Basics</a>
                        <a class="tag is-medium" href="/sizes">Sizes</a>
                        <a class="tag is-medium" href="/responsiveness">Responsiveness</a>
                        <a class="tag is-medium" href="/nesting">Nesting</a>
                        <a class="tag is-medium" href="/gap">Gap</a>
                        <a class="tag is-medium" href="/options">Options</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Layout</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/container">Container</a>
                        <a class="tag is-medium" href="/level">Level</a>
                        <a class="tag is-medium" href="/media-object">Media Object</a>
                        <a class="tag is-medium" href="/hero">Hero</a>
                        <a class="tag is-medium" href="/section">Section</a>
                        <a class="tag is-medium" href="/footer">Footer</a>
                        <a class="tag is-medium" href="/tiles">Tiles</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Elements</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/box">Box</a>
                        <a class="tag is-medium" href="/button">Button</a>
                        <a class="tag is-medium" href="/content">Content</a>
                        <a class="tag is-medium" href="/delete">Delete</a>
                        <a class="tag is-medium" href="/icon">Icon</a>
                        <a class="tag is-medium" href="/image">Image</a>
                        <a class="tag is-medium" href="/notification">Notification</a>
                        <a class="tag is-medium" href="/progress">Progress</a>
                        <a class="tag is-medium" href="/table">Table</a>
                        <a class="tag is-medium" href="/tag">Tag</a>
                        <a class="tag is-medium" href="/title">Title</a>
                    </p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Form</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/field">Field</a>
                        <a class="tag is-medium" href="/input">Input</a>
                        <a class="tag is-medium" href="/textarea">Textarea</a>
                        <a class="tag is-medium" href="/select">Select</a>
                        <a class="tag is-medium" href="/autocomplete">Autocomplete</a>
                        <a class="tag is-medium" href="/checkbox">Checkbox</a>
                        <a class="tag is-medium" href="/radio">Radio</a>
                        <a class="tag is-medium" href="/switch">Switch</a>
                        <a class="tag is-medium" href="/file">File</a>
                        <a class="tag is-medium" href="/upload">Upload</a>
                        <a class="tag is-medium" href="/datepicker">Datepicker</a>
                    </p>
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">Components</p>
                    <p class="tags">
                        <a class="tag is-medium" href="/breadcrumb">Breadcrumb</a>
                        <a class="tag is-medium" href="/calendar">Calendar</a>
                        <a class="tag is-medium" href="/card">Card</a>
                        <a class="tag is-medium" href="/data-table">Data Table</a>
                        <a class="tag is-medium" href="/dropdown">Dropdown</a>
                        <a class="tag is-medium" href="/icon">Icon</a>
                        <a class="tag is-medium" href="/menu">Menu</a>
                        <a class="tag is-medium" href="/message">Message</a>
                        <a class="tag is-medium" href="/modal">Modal</a>
                        <a class="tag is-medium" href="/navbar">Navbar</a>
                        <a class="tag is-medium" href="/pagination">Pagination</a>
                        <a class="tag is-medium" href="/panel">Panel</a>
                        <a class="tag is-medium" href="/tabs">Tabs</a>
                        <a class="tag is-medium" href="/table">Table</a>
                        <a class="tag is-medium" href="/tooltip">Tooltip</a>
                        <a class="tag is-medium" href="/collapse">Collapse</a>
                        <a class="tag is-medium" href="/dialog">Dialog</a>
                        <a class="tag is-medium" href="/loading">Loading</a>
                        <a class="tag is-medium" href="/popover">Popover</a>
                        <a class="tag is-medium" href="/toast">Toast</a>
                        <a class="tag is-medium" href="/snackbar">Snackbar</a>
                        <a class="tag is-medium" href="/notification">Notification</a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
