@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns is-multiline">
            <div class="column is-3">
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

            <div class="column is-offset-1">
                {{-- <a>Request an invite</a> --}}
                {{-- <window url="https://www.youtube.com/embed/1DWn7Mb0TKI"> --}}
                    {{-- @include('partials.videos.sample') --}}
                    {{-- Easter Egg --}}
{{--                     <figure class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/1DWn7Mb0TKI" frameborder="0" allowfullscreen></iframe>
                    </figure> --}}
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
