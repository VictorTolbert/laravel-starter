@extends('layouts.app')

@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Atoms</h1>
            <h2 class="subtitle"><a href="http://bradfrost.com/blog/post/atomic-web-design/#atoms" target="bradfrost">Atoms</a> are the smallest <em>functional</em> unit</h2>
        </div>
    </div>
</header>

<section class="section">
    <div class="container is-fluide">
        <div class="content">
            <p>Atoms are the basic building blocks of matter. Applied to web interfaces,
            atoms are our HTML tags, such as a form label, an input or a button.</p>

            <p>Atoms can also include more abstract elements like color palettes, fonts
            and even more invisible aspects of an interface like animations.</p>

            <p>Like atoms in nature they’re fairly abstract and often not terribly
            useful on their own. However, they’re good as a reference in the
            context of a pattern library as you can see all your global
            styles laid out at a glance.</p>
        </div>
    </div>
</section>
@endsection
