@extends('layouts.app')
@section('hero-body')

@endsection

@section('content')
<header class="hero is-dark">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">XML Proposal Viewer</h1>
            <h2 class="subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure doloribus, quidem optio, numquam commodi unde nihil nesciunt sapiente obcaecati corporis maiores ipsam cumque magni magnam provident sed sequi, praesentium, veniam.
            </h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
    {{ Form::open( ['route' => 'proposal-viewer.show', 'files' => true]) }}
        <div class="field">
            {{ Form::file('file', ['id' => 'uploadme', 'style' => 'display:none']) }}
            {{ Form::button('Select an XML File', ['id' => 'clickme', 'class' => 'button is-primary']) }}
            <span id="filename"></span>
        </div>

        <div id="uploadbutton" style="display: none">
        {{ Form::submit('View It', ['class' => 'button is-primary']) }}
        {{ Form::reset('Reset', ['id' => 'reset', 'class' => 'button is-link']) }}
        </div>
    {{ Form::close() }}
    </div>
</section>
@endsection

