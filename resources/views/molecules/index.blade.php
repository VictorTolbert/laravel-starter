@extends('layouts.app')

@section('content')
<header class="hero is-light">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Molecules</h1>
            <h2 class="subtitle"><a href="http://bradfrost.com/blog/post/atomic-web-design/#molecules" target="bradfrost">Molecules</a> are groups of two or more atoms held together</h2>
        </div>
    </div>
</header>
@include('partials.navbars.atomic-design')
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            <p>
                Things start getting more interesting and tangible when we start combining atoms
                together. Molecules are groups of atoms bonded together and are the smallest
                fundamental units of a compound. These molecules take on their own
                properties and serve as the backbone of our design systems.
            </p>

            <p>
                For example, a form label, input or button aren’t too useful by themselves,
                but combine them together as a form and now they can actually do something together.
            </p>

            <p>
                Building up to molecules from atoms encourages a “do one thing and do it well”
                mentality. While molecules can be complex, as a rule of thumb they are relatively
                simple combinations of atoms built for reuse.
            </p>
        </div>
    </div>
</section>
@endsection
