<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.favicons')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
        <title>{{ $title }} | SPS Guidelines</title>
    @else
        <title>SPS Guidelines</title>
    @endif

    <link href="{{ mix('css/docs.css') }}" rel="stylesheet">
    <script src="{{ mix('js/docs.js') }}" defer></script>
</head>
<body @if($background ?? false) class="waves" @endif>
    {{ $slot }}
</body>
</html>
