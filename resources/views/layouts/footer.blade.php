<footer class="foot" style="background: #000">
    <section class="section">
        <div class="container is-fluid">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                         &copy; {{ date('Y') }}
                        Version 2.1.4<br>
                        Last updated 9/15/2017, 11:09:45 AM
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <button id="showPageloader" class="button is-primary is-inverted">
                            Show Page-loader (3 sec only)
                        </button>
                    </div>

                    <div class="level-item">
                        <button class="button is-primary is-inverted"
                            @click="openLoading">
                            Launch loading
                        </button>
                    </div>
                    <div class="level-item">
                        <button class="button is-primary is-inverted" data-show="quickview" data-target="quickviewDefault">
                            <span class="icon">
                                <i class="fa fa-github"></i>
                            </span>
                            <span>Show Page Info</span>
                        </button>
                    </div>
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
            </div>
            <div class="navbar-menu is-active">
                <div class="navbar-start">
                    <div class="navbar-item">
                        <a class="button is-large is-white">
                            <b-icon icon="settings">
                            </b-icon>
                            <span>Settings</span>
                        </a>
                    </div>
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
    <header class="hero is-info">
        <div class="hero-body">
            <div class="container is-fluid">
                <h1 class="title">Display Settings</h1>
                <h1 class="subtitle">Lorem ipsum dolor sit amet.</h1>
            </div>
        </div>
    </header>
    <section class="section quickview-body">
        <div class="quickview-block">

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
                    {{-- <h2 class="subtitle">Edit Columns</h2> --}}
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
