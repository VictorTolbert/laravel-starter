@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">UI Prototypes</h1>
        <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, atque porro perspiciatis numquam. Eaque cupiditate minima et, aperiam sunt. Dolor, illo eum! Cupiditate nobis ipsa ab, tempora illo ipsum dolorem.</h1>
    </div>
</div>
@endsection

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
        </div>
    </div>
</section>
@endsection
