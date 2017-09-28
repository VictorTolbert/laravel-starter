<nav class="navbar is-facebook" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
            </div>
            <div class="navbar-start">
                @include('partials.navbar-items.preferences')
                @include('partials.navbar-items.format-size')
                @include('partials.navbar-items.help')
                @include('partials.navbar-items.notes')
                @include('partials.navbar-items.dashboard')

                <span class="navbar-item">
                    <span class="icon">
                        @svg('atomic-design/atom')
                    </span>
                </span>

                <span class="navbar-item">
                    <span class="icon">
                        @svg('atomic-design/molecule')
                    </span>
                </span>

                <span class="navbar-item">
                    <span class="icon">
                        @svg('atomic-design/organism')
                    </span>
                </span>

                <span class="navbar-item">
                    <span class="icon">
                        @svg('atomic-design/page')
                    </span>
                </span>

                <span class="navbar-item">
                    <span class="icon">
                        @svg('atomic-design/template')
                    </span>
                </span>


                <span class="navbar-item">
                    <span class="icon">
                        @svg('more-horizontal')
                    </span>
                </span>

                <span class="navbar-item is-tab is-active">
                    <span class="icon-btn">
                        @svg('plus')
                    </span>
                </span>

                <span class="navbar-item is-tab is-active">
                    <span class="icon-btn">
                        @svg('plus')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn">
                        @svg('search')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn">
                        @svg('print')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn">
                        @svg('filter-list')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn">
                        @svg('file-download')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn thin">
                        @svg('lock')
                    </span>
                </span>

                <span class="navbar-item is-tab">
                    <span class="icon-btn">
                        @svg('trash')
                    </span>
                </span>

                <div class="navbar-item is-tab">
                    <strong>2 items selected</strong>
                </div>

            </div>
            <div class="navbar-end">

                 <span class="navbar-item">
                    <span class="icon">
                        @svg('peach')
                    </span>
                </span>
                @include('partials.navbar-items.help')
            </div>
        </div>
    </div>
</nav>

