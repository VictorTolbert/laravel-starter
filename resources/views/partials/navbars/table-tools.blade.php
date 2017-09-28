<nav class="navbar is-facebook" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
            </div>
            <div class="navbar-start">

                <span class="navbar-item is-tab">
                    <span class="m-r-sm">
                        @svg('search')
                    </span>
                    <span>Search</span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="m-r-sm">
                        @svg('filter-list')
                    </span>
                    <span>Filter List</span>
                </span>

                @include('partials.navbar-items.dashboard')
                @include('partials.navbar-items.preferences')
                @include('partials.navbar-items.format-size')
                @include('partials.navbar-items.notes')

                <span class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('more-horizontal')
                    </span>
                    <span>More</span>
                </span>

                <span class="navbar-item is-tab is-active">
                    <span class="m-r-sm">
                        @svg('plus')
                    </span>
                    <span>Plus</span>
                </span>

                <span class="navbar-item is-tab is-active">
                    <span class="m-r-sm">
                        @svg('plus')
                    </span>
                    <span>Add</span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="m-r-sm">
                        @svg('print')
                    </span>
                    <span>Print</span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="m-r-sm">
                        @svg('file-download')
                    </span>
                    <span>Export</span>
                </span>

{{--                 <span class="navbar-item is-tab">
                    <span class="thin">
                        @svg('lock')
                    </span>
                </span>
 --}}
                <span class="navbar-item is-tab">
                    <span class="m-r-sm">
                        @svg('trash')
                    </span>
                    <span>Trash</span>
                </span>

{{--                 <div class="navbar-item is-tab">
                    <strong>2 items selected</strong>
                </div> --}}

            </div>
            <div class="navbar-end">
                @include('partials.navbar-items.help')
            </div>
        </div>
    </div>
</nav>

