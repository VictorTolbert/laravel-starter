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

                        <div class="field">
                            <label for="email" class="label">E-Mail Address</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                                <span class="icon is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
{{--                                 <span class="icon is-small is-right">
                                    <i class="fa fa-check"></i>
                                </span> --}}
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password">
                                <span class="icon is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
{{--                                 <span class="icon is-small is-right">
                                    <i class="fa fa-check"></i>
                                </span> --}}
                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>


                        <div class="field">
                            <b-checkbox name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</b-checkbox>
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
