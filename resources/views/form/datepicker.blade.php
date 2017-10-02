@extends('layouts.app')
@section('title', 'Form &mdash; Datepicker')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('datepicker') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Datepicker</h1>
            <h2 class="subtitle">An input with a simple dropdown/modal for selecting a date, uses native datepicker for mobile</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-3">
                <b-field label="Inline Calendar">
                    <b-datepicker v-model="date" inline></b-datepicker>
                </b-field>
            </div>
            <div class="column is-3">
                <b-field label="Select a date">
                       <b-datepicker
                           placeholder="Click to select..."
                           icon="today">
                       </b-datepicker>
                   </b-field>
            </div>
        </div>
    </div>
</section>
@endsection
