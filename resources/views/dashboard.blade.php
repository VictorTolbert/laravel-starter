@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Dashboard</h1>
        <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure doloribus, quidem optio, numquam commodi unde nihil nesciunt sapiente obcaecati corporis maiores ipsam cumque magni magnam provident sed sequi, praesentium, veniam.</h1>
    </div>
</div>
@endsection

@section('content')

<section class="section">
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent is-vertical">

                    <article class="tile is-child box">
                        <p class="title">Political</p>
                        {{-- <p class="subtitle">Top box</p> --}}
                        @include('partials.svg.us')
                        {{-- @include('partials.svg.usa') --}}
                    </article>

                    <article class="tile is-child box">
                        <p class="title">Experiments</p>
                        {{-- <p class="subtitle">Bottom box</p> --}}
                        <hr>
                        <register></register>
                    </article>
                </div>

                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <h1 class="title">The Best Interface is No Interface</h1>
                        <p class="subtitle">by Golden Krishna</p>
                        <figure class="image is-4by3">
                            <img src="/images/placeholder-640x480.png">
                        </figure>
                        <div class="content">
                            <blockquote>
                                <p>When you specifically hire someone to generate UI, you won't get new, innovative solutions.  You'll get more UI, not better UX</p>
                            </blockquote>
                            <h3>This is UI</h3>
                            <p><a href="{{route('tables')}}">Data Tables</a>, Navigation, subnavigation, menus, dropdowns, buttons, links, windows, rounded corners, shadowing, error messages, alerts, updates, checkboxes, password fields, search fields, text inputs, radio buttons, textareas, hover states, selection states, pressed states, tolltips, banner ads, embedded videos, swipe animations, scrolling, clicking, iconography, colors, lists, slideshows, alt text, badges, notifications, gradients, pop-ups, carousels, OK/Cancel, etc., etc. etc.</p>
                            <h3>This is UX</h3>
                            <p>People, happiness, solving problems, understanding needs, love, efficiency, entertainment, pleasure, delight, smiles, soul, warmth, personality, joy, satisfaction, gratification, elation, exhilaration, bliss, euphoria, convience, enchantment, magic, productivity, effectiveness, etc. etc. etc.</p>
                            <hr>
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    {{-- <p class="title">Team</p> --}}
                    <p class="subtitle">No I in Team</p>
                    <div class="content is-medium">
                        Brian,
                        Bill,
                        Charlane,
                        Jerome,
                        Kahil,
                        Kurt,
                        Lynn,
                        Mark,
                        Mark,
                        Matt,
                        Osen,
                        Phil,
                        Renee,
                        Ro,
                        Ruth,
                        Tom,
                        Shereta,
                        Victor
                    </div>
                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box">
                <div class="content">
                    Book Quote
                    <h1 class="is-marginless">The Best Interface is No Interface</h1>
                    <p>by Golden Krishna</p>
                    <div>
                        <h1 class="title"></h1>
                        <p>When you specifically hire someone to generate UI, you won't get new, innovative solutions.  You'll get more UI, not better UX</p>
                        <p class="subtitle">This is UI</p>
                        <p><a href="{{route('tables')}}">Data Tables</a>, Navigation, subnavigation, menus, dropdowns, buttons, links, windows, rounded corners, shadowing, error messages, alerts, updates, checkboxes, password fields, search fields, text inputs, radio buttons, textareas, hover states, selection states, pressed states, tolltips, banner ads, embedded videos, swipe animations, scrolling, clicking, iconography, colors, lists, slideshows, alt text, badges, notifications, gradients, pop-ups, carousels, OK/Cancel, etc., etc. etc.</p>
                        <p class="subtitle">This is UX</p>
                        <p>People, happiness, solving problems, understanding needs, love, efficiency, entertainment, pleasure, delight, smiles, soul, warmth, personality, joy, satisfaction, gratification, elation, exhilaration, bliss, euphoria, convience, enchantment, magic, productivity, effectiveness, etc. etc. etc.</p>
                        <hr>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
