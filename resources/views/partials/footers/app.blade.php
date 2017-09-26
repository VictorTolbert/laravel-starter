{{-- <footer class="footer">
    <nav class="navbar">
        <div class="navbar-menu is-active">
            <div class="navbar-start">
                <div class="navbar-item">
                     &copy; {{ date('Y') }}, Version 2.1.4, Last updated 9/15/2017, 11:09:45 AM
                </div>
                <a class="navbar-item" href="{{ route('privacy') }}">Privacy Policy</a>
                <a class="navbar-item" href="{{ route('terms') }}">Terms and Conditions</a>
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else

                    @include('partials.tech')

                    <span class="navbar-item">
                        @include('partials.buttons.page-info')
                    </span>

                @endif
            </div>
        </div>
    </nav>
</footer> --}}

<!-- Page Loader -->
<div class="pageloader"></div>

<!-- Quick View -->
{{-- @include('partials.quickviews.export') --}}
{{-- @include('partials.quickviews.format-size') --}}
@include('partials.quickviews.help')
@include('partials.quickviews.notes')
@include('partials.quickviews.page-info')
@include('partials.quickviews.preferences')
