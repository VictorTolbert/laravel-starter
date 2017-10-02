@extends('layouts.app')

@section('content')
<section class="hero is-dark has-rainbow-bg">
    <div class="hero-head">
    </div>
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">🔥</h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="container is-fluid">
        <div class="columns is-multiline">
            <div class="column is-4">
                <div class="content">
                    <h1>Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <b-field label="Username / Email Address">
                            <b-input id="email" name="email" type="email" icon="person" value="demo@videa.tv" autofocus></b-input>
                        </b-field>

                        <b-field
                            label="Password">
                            <b-input id="password" icon="lock" type="password" name="password" value="password1" password-reveal></b-input>
                        </b-field>

                        <div class="field">
                            <b-checkbox name="remember" v-model="remember">Remember Me</b-checkbox>
                        </div>

                        <div class="field is-grouped">
                            <p class="control">
                                <button type="submit" class="button is-dark">
                                    Login
                                </button>
                            </p>
                            <p class="control">
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="column is-8">
                {{-- @include('partials.videos.sample') --}}
{{--                 <b-collapse :open="false">
                    <button class="button is-primary" slot="trigger">Click me!</button>
                    <div class="notification">
                        <div class="content">
                            <h3>
                                Subtitle
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
                                Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. <br />
                                Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
                            </p>
                        </div>
                    </div>
                </b-collapse> --}}

{{--                 <h2 class="title">UI ≠ UX</h2>
                <hr>
                <h3 class="subtitle">This is UI</h3>
                <p><a href="{{route('data-table')}}">Data Tables</a>, <a href="{{route('data-table')}}">Navigation</a>, <a href="{{route('data-table')}}">subnavigation</a>, <a href="{{route('data-table')}}">menus</a>, <a href="{{route('data-table')}}">dropdowns</a>, <a href="{{route('data-table')}}">buttons</a>, <a href="{{route('data-table')}}">links</a>, <a href="{{route('data-table')}}">windows</a>, <a href="{{route('data-table')}}">rounded corners</a>, <a href="{{route('data-table')}}">shadowing</a>, <a href="{{route('data-table')}}">error messages</a>, <a href="{{route('data-table')}}">alerts</a>, <a href="{{route('data-table')}}">updates</a>, <a href="{{route('data-table')}}">checkboxes</a>, <a href="{{route('data-table')}}">password fields</a>, <a href="{{route('data-table')}}">search fields</a>, <a href="{{route('data-table')}}">text inputs</a>, <a href="{{route('data-table')}}">radio buttons</a>, <a href="{{route('data-table')}}">textareas</a>, <a href="{{route('data-table')}}">hover states</a>, <a href="{{route('data-table')}}">selection states</a>, <a href="{{route('data-table')}}">pressed states</a>, <a href="{{route('data-table')}}">tooltips</a>, <a href="{{route('data-table')}}">banner ads</a>, <a href="{{route('data-table')}}">embedded videos</a>, <a href="{{route('data-table')}}">swipe animations</a>, <a href="{{route('data-table')}}">scrolling</a>, <a href="{{route('data-table')}}">clicking</a>, <a href="{{route('data-table')}}">iconography</a>, <a href="{{route('data-table')}}">colors</a>, <a href="{{route('data-table')}}">lists</a>, <a href="{{route('data-table')}}">slideshows</a>, <a href="{{route('data-table')}}">alt text</a>, <a href="{{route('data-table')}}">badges</a>, <a href="{{route('data-table')}}">notifications</a>, <a href="{{route('data-table')}}">gradients</a>, <a href="{{route('data-table')}}">pop-ups</a>, <a href="{{route('data-table')}}">carousels</a>, <a href="{{route('data-table')}}">OK/Cancel</a>, etc., etc. etc.</p>
                <hr>
                <h3 class="subtitle">This is UX</h3>
                <p>People, happiness, solving problems, understanding needs, love, efficiency, entertainment, pleasure, delight, smiles, soul, warmth, personality, joy, satisfaction, gratification, elation, exhilaration, bliss, euphoria, convience, enchantment, magic, productivity, effectiveness, etc. etc. etc.</p>

                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child box">                        </div>
                    </div>
                </div> --}}

                {{-- @include('partials.articles.ui-ux') --}}
                {{-- <a>Request an invite</a> --}}
{{--                 <window url="https://www.youtube.com/embed/1DWn7Mb0TKI">
                    <pre><code lang="scss">.foo {
    background: red;
    color: green;
}</code></pre>
                </window> --}}

                {{-- <window url="https://www.youtube.com/embed/1DWn7Mb0TKI"> --}}
                    {{-- @include('partials.videos.sample') --}}
                    {{-- Easter Egg --}}
                    {{-- <figure class="video-wrapper"> --}}
                        {{-- <iframe src="https://www.youtube.com/embed/1DWn7Mb0TKI" frameborder="0" allowfullscreen></iframe> --}}
                    {{-- </figure> --}}
                {{-- </window> --}}

                {{-- <div class="columns">
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/animation-short.gif">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/flexport-website.gif">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/icons.png">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/invoice-reminder-flow.gif">
                        </figure>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/private.png">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/style-guide.jpg">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/table.gif">
                        </figure>
                    </div>
                    <div class="column is-2">
                        <figure class="image is-4x3 box">
                            <img src="/images/screengrabs/website-wireframe.gif">
                        </figure>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
