@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
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
                                <button type="submit" class="button is-primary">
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
                <window>
                    {{-- @include('partials.videos.sample') --}}
                </window>
                <img src="/images/screengrabs/website-wireframe.gif">
            </div>
        </div>
    </div>
</section>
@endsection
