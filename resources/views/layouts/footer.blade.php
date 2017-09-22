<footer class="foot" style="background: #000">
    <section class="section">
        <div class="container is-fluid">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                         {{-- &copy; {{ date('Y') }}
                        Version 2.1.4<br>
                        Last updated 9/15/2017, 11:09:45 AM --}}
                    </div>
                </div>
                <div class="level-right">
                    @if (Auth::guest())
                    @else
                    <a class="navbar-item">
                        <span class="icon is-git">
                            @include('partials.svg.git-logo2')
                        </span>
                    </a>

                    <a class="navbar-item">
                        <span class="icon is-html5">
                            @include('partials.svg.html5-logo')
                        </span>
                    </a>

                    <a class="navbar-item">
                        <span class="icon is-css3">
                            @include('partials.svg.css3-logo')
                        </span>
                    </a>

                    <a class="navbar-item">
                        <span class="icon is-javascript">
                            @include('partials.svg.javascript-logo')
                        </span>
                    </a>

                    <a class="navbar-item">
                        <span class="icon is-react">
                            @include('partials.svg.react-logo')
                        </span>
                    </a>

                    <a class="navbar-item">
                        <span class="icon is-vue">
                            @include('partials.svg.vue-logo')
                        </span>
                    </a>
                    {{-- <div class="level-item">
                        <button class="button is-primary is-inverted" data-show="quickview" data-target="quickviewDefault">
                            <span class="icon">
                                <i class="fa fa-github"></i>
                            </span>
                            <span>Show Page Info</span>
                        </button>
                    </div> --}}
                    @endif
                </div>
            </div>



        </div>
    </section>
</footer>
<div class="pageloader"></div>
<div id="quickviewDefault" class="quickview">
    <div class="container is-fluid">
        <nav class="navbar is-transparent" style="height: 4rem">
            <div class="navbar-brand">
                <span class="navbar-item is-size-5"><b>User Preferences and Settings</b></span>
            </div>
            <div class="navbar-menu is-active">
                <div class="navbar-start">
                </div>
                <div class="navbar-end">
                    <a class="navbar-item" data-dismiss="quickview">
                          <b-icon icon="close">
                          </b-icon>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <header class="hero is-light">
        <div class="hero-body">
            <div class="container is-fluid">
                <div class="field is-grouped">
                    <p class="control">
                        <button
                            id="showPageloader"
                            class="button is-primary is-inverted">
                            Show Page-loader (3 sec only)
                        </button>
                    </p>

                    <p class="control">
                        <button
                            class="button is-primary is-inverted"
                            @click="openLoading">
                            Launch loading
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <div class="hero-foot">
            <div class="container">
                <nav class="tabs">
                    <ul>
                        <li class="is-active">
                            <a>Display</a>
                        </li>
                        <li class="">
                            <a>General</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="section quickview-body">
        <div class="quickview-block">
                <b-tabs  position="is-centered" class="block">
                    <b-tab-item label="Display">
                        Lorem <br>
                        ipsum <br>
                        dolor <br>
                        sit <br>
                        amet.
                    </b-tab-item>
                    <b-tab-item label="Reps">
                        Lorem <br>
                        ipsum <br>
                        dolor <br>
                        sit <br>
                        amet.
                    </b-tab-item>
                    <b-tab-item label="User">
                        <b-field grouped group-multiline>
                            <div class="control">
                                <b-switch v-model="isCheckable">Checkable</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="isBordered">Bordered</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="isStriped">Striped</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="isNarrowed">Narrowed</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="isLoading">Loading state</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="isEmpty">Empty</b-switch>
                            </div>
                            <div class="control">
                                <b-switch v-model="hasMobileCards">Mobile cards
                                    <small>(collapsed rows)</small>
                                </b-switch>
                            </div>
                        </b-field>

                        <button class="button field is-danger" @click="selected = {}" :disabled="!Object.keys(selected).length">
                            <b-icon icon="clear"></b-icon>
                            <span>Clear selected</span>
                        </button>

                        <button class="button field is-danger" @click="checkedRows = []" :disabled="!checkedRows.length">
                            <b-icon icon="clear"></b-icon>
                            <span>Clear checked</span>
                        </button>

                        <div class="">
                            <div class="content">
                                <h2 class="subtitle">Edit Columns</h2>
                                <p>Show or hide columns. Prioritze columns by using up and down arrows. Customize column widths and ability to lock first column.</p>
                            </div>
                            <table class="b-table--custom table is-bordered is-narrow is-striped">
                                <thead>
                                    <tr>
                                        <th>Show/Hide</th>
                                        <th>Column</th>
                                        <th>Width</th>
                                        <th>Lock Column</th>
                                    </tr>
                                </thead>

                                <tr v-for="(column, index) in clientsColumns">
                                    <td class="has-text-centered">
                                        <b-checkbox v-model="column.isVisible"></b-checkbox>
                                    </td>
                                    <td>
                                        @{{ column.title }}
                                    </td>
                                    <td>
                                        <b-select v-model="column.width">
                                            <option value="">Auto Fit</option>
                                            <option value="80">XX Small (80)</option>
                                            <option value="160">X Small (160)</option>
                                            <option value="240">Small (240)</option>
                                            <option value="320">Medium (320)</option>
                                            <option value="480">Large (480)</option>
                                            <option value="640">X Large (640)</option>
                                            <option value="720">XX Large (720)</option>
                                        </b-select>
                                    </td>
                                    <td class="has-text-centered">
                                        <a class="is-large" v-if="index == 2">
                                            <span class="icon is-large">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="content">
                                <table class="table is-border is-narrow is-striped">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Description</th>
                                        </tr>
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <td class="has-text-right">
                                                <span class="tag is-medium is-lit">
                                                    <b>1</b>
                                                </span>
                                            </td>
                                            <td class="media-content">
                                                <div class="content">
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="has-text-right">
                                                <span class="tag is-medium is-lit">
                                                    <b>1</b>
                                                </span>
                                            </td>
                                            <td class="media-content">
                                                <div class="content">
                                                    <p>Lorem ipsum dolor sit amet..</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <blockquote>Ut venenatis, nisl scelerisque sollicitudin.</blockquote>
                            </div>
                    </b-tab-item>
                </b-tabs>
            </div>
        </div>
    </section>
    <footer class="foot">
        <section class="section">
            <div class="container is-fluid">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                        </div>
                    </div>
                    <div class="level-right">
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
