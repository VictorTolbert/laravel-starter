{{-- <b-collapse :open="false">
    <button class="button is-light is-small is-marginless" slot="trigger">Customize</button>
    <div class="box is-light">
        <div class="field is-grouped">
            <div class="field">
                <label class="label">Program Search</label>
                <p class="control">
                    <input type="text" class="input">
                </p>
            </div>

            <div class="field">
                <label class="label">Daypart</label>
                <p class="control">
                    <input class="input" type="text">
                </p>
            </div>

            <div class="field">
                <label class="label">Start Time</label>
                <p class="control">
                    <input class="input" type="text">
                </p>
            </div>

            <div class="field">
                <label class="label">End Time</label>
                <p class="control">
                    <input class="input" type="text">
                </p>
            </div>

            <div class="field">
                <label class="label">Start Date</label>
                <p class="control">
                    <input class="input" type="text">
                </p>
            </div>

            <div class="field">
                <label class="label">End Date</label>
                <p class="control">
                    <input class="input" type="text">
                </p>
            </div>

            <div class="field">
                <label class="label">Days</label>
                <p class="control">
                    <input class="input">
                </p>
            </div>

            <div class="field">
                <label class="label">&nbsp;</label>
                <p class="control">
                    <button class="button" v-model="price" v-bind="money">Search</button>
                </p>
            </div>

            <div class="field">
                <label class="label">&nbsp;</label>
                <p class="control">
                    <button class="button">Clear</button>
                </p>
            </div>
        </div>
    </div>
</b-collapse> --}}

<nav class="navbar is-light is-hidden-touch" role="navigation" aria-label="navigation">
    {{-- <div class="container is-fluid"> --}}
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
{{--                 <span class="navbar-burger is-block" data-show="quickview" data-target="page-info">
                    <span></span>
                    <span></span>
                    <span></span>
                </span> --}}
            </div>
            <div class="navbar-start">
                {{-- @include('partials.navbar-items.search') --}}
                {{-- @include('partials.navbar-items.filter-list') --}}
                <div class="navbar-item">
                </div>

            </div>
            <div class="navbar-end">
                {{-- @include('partials.navbar-items.format-size') --}}
                {{-- @include('partials.navbar-items.print') --}}
                {{-- @include('partials.navbar-items.export') --}}
                {{-- @include('partials.navbar-items.trash') --}}
                {{-- @include('partials.navbar-items.notes') --}}
                @include('partials.navbar-items.preferences')
                @include('partials.navbar-items.settings')
                @include('partials.navbar-items.page-info')
                {{-- @include('partials.navbar-items.help') --}}
                {{-- @include('partials.navbar-items.more') --}}
            </div>
        </div>
    {{-- </div> --}}
</nav>
