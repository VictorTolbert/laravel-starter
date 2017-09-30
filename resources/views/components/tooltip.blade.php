@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="block">
            <button class="button is-medium is-primary"
                @click="isOpen = !isOpen">
                Toggle
            </button>
        </div>
    </div>

    <button class="button is-primary"
        @click="active = !active">
        Toggle
    </button>
    <hr>

    <b-tooltip label="I'm never closing"
        :active="active"
        always>
        <button class="button">
            Always
        </button>
    </b-tooltip>

    <b-tooltip label="Tooltip right"
        position="is-right"
        :active="active">
        <button class="button is-dark">
            Right
        </button>
    </b-tooltip>

</section>
@endsection
