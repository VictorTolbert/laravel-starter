@if (Auth::guest())
@else
{{--     <footer class="footer is-dark">
        <nav class="navbar">
            <div class="navbar-menu is-active">
                <div class="navbar-start">
                    <div class="navbar-item">
                        <p class="has-text-white">Made with
                            <span style="color: red">
                                @svg('favorite')
                            </span> by

                            <a style="color: white; text-decoration: underline;" href="https://twitter.com/VictorTolbert" target="_blank">
                                Victor Tolbert
                            </a>.
                        </p>
                    </div>
                </div>

                <div class="navbar-end">
                    @if (Auth::guest())
                    @else

                        @include('partials.galleries.tech')

                        <div class="navbar-item">
                            <p>
                                &copy; {{ date('Y') }}, Version 2.1.4, Last updated 9/15/2017, 11:09:45 AM
                                <b-tooltip label="HTML5, CSS3, JS">
                                    Colophon
                                </b-tooltip>
                             </p>
                        </div>

                        <a class="navbar-item" href="{{ route('privacy') }}">Privacy Policy</a>

                        <a class="navbar-item" href="{{ route('terms') }}">Terms and Conditions</a>

                        <span class="navbar-item">
                            @include('partials.buttons.page-info')
                        </span>
                    @endif
                </div>
            </div>
        </nav>
    </footer> --}}
@endif

<!-- Page Loader -->
<div class="pageloader"></div>

<!-- Quick View -->
{{-- @include('partials.quickviews.export') --}}
{{-- @include('partials.quickviews.format-size') --}}
@include('partials.quickviews.help')
@include('partials.quickviews.notes')
@include('partials.quickviews.page-info')
@include('partials.quickviews.preferences')
