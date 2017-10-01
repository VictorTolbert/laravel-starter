@extends('layouts.app')

@section('title', 'SLDS')

@section('content')
<header class="hero is-tertiary has-logo-bg" style="height: 90px">
    {{-- <div class="hero-body"> --}}
        <div class="container is-fluid">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <span class="image" style="width: 90px; height: 64px">
                            @svg('salesforce-logo')
                        </span>
                        <h1 class="title m-l-sm">Lightning Design System</h1>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</header>
<section class="section">
    <codepen slug-hash="aLwqrY"></codepen>
</section>
@endsection
