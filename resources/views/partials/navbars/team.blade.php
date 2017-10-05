<nav class="navbar">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <span class="navbar-burger" data-target="navbarTeam" @click="isActive = !isActive">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div class="navbar-menu" id="navbarTeam">
            <div class="navbar-start" style="flex-grow: 1; width: 100%">
                <div class="navbar-item" style="flex-grow: 1; width: 100%">
                    {{-- <form @submit="handleSearchSubmit"> --}}
                        <div class="field has-addons" style="flex-grow: 1; width: 100%">
                            <div class="control is-expanded">
                                <input
                                    class="input"
                                    type="text"
                                    placeholder="Search..."
                                    value=""
                                    @change="" />
                            </div>
                            <div class="control">
                                <button class="button" type="submit">
                                    <span class="icon is-small">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            <div class="navbar-end">
                <a class="navbar-item">Bill</a>
                <a class="navbar-item">Jerome</a>
                <a class="navbar-item">Ruth</a>
                <a class="navbar-item">Phil</a>
                <a class="navbar-item">Tom</a>
                <a class="navbar-item">Victor</a>
            </div>
        </div>
    </div>
</nav>
