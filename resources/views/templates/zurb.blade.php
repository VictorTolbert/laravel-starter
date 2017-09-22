@extends('layouts.zurb')
@section('content')

<button class="button" type="button" data-filter="all">All</button>
<button class="button" type="button" data-filter=".category-a">Category A</button>
<button class="button" type="button" data-filter=".category-b">Category B</button>
<button class="button" type="button" data-filter=".category-c">Category C</button>

<div class="container">
    <div class="mix callout category-a" data-order="1">
        A
    </div>
    <div class="mix callout category-b" data-order="2">
        B
    </div>
    <div class="mix callout category-b category-c" data-order="3">
        B C
    </div>
    <div class="mix callout category-a category-d" data-order="4">
        A D
    </div>
</div>
@endsection
