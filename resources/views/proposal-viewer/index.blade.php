@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container is-fluid">
    {{ Form::open( ['route' => 'proposal-viewer.show', 'files' => true]) }}
        <div class="field">
            {{ Form::file('file', ['id' => 'uploadme', 'style' => 'display:none']) }}
            {{ Form::button('Select an XML File', ['id' => 'clickme', 'class' => 'button is-secondary']) }}
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

