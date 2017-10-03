<div id="page-info" class="quickview">
    <nav class="navbar is-light">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <span class="navbar-item">
                    <p class="is-size-4">Page Info</p>
                </span>
            </div>

            <div class="navbar-menu is-active">
                <div class="navbar-start">
                </div>
                <div class="navbar-end">
                    <a class="navbar-item is-hidden-touch" data-dismiss="quickview">
                        <b-icon icon="close"></b-icon>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- <header class="hero is-light has-grid-bg">
        <div class="hero-body">
            <div class="container is-fluid">

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
    </header> --}}

    <section class="section quickview-body">
        <div class="quickview-block">
            <b-tabs class="block">
                <b-tab-item label="Configure">
                    <section class="section">
                        <b-tabs type="is-boxed" class="Block">
                            <b-tab-item label="Columns">
                                <article class="m-t-lg">
                                    <div class="content">
                                        <h2 class="is-size-4">Columns</h2>
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
                                        <tr v-for="(column, index) in db.demo.columns">
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
                                                    <span class="icon">
                                                        @svg('material.lock')
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                    <hr>
                                </article>
                            </b-tab-item>
                            <b-tab-item label="Table">
                                <article class="m-t-lg">
                                    <div class="content">
                                        <h2 class="is-size-4">Table Settings</h2>
                                    </div>
                                    <div class="field is-grouped">
                                        <p class="control">
                                            <button
                                                id="showPageloader"
                                                class="button is-primary is-outlined">
                                                Show Page-loader (3 sec only)
                                            </button>
                                        </p>

                                        <p class="control">
                                            <button
                                                class="button is-primary is-outlined"
                                                @click="openLoading">
                                                Launch loading
                                            </button>
                                        </p>

                                    </div>

                                    <b-field grouped group-multiline>
                                        <div class="field">
                                            <input
                                                v-model="isCheckable"
                                                id="switch-checkable"
                                                type="checkbox"
                                                name="switch-checkable"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-checkable">
                                                Checkable
                                            </label>
                                        </div>

                                        <div class="field">
                                            <input
                                                v-model="isBordered"
                                                id="switch-bordered"
                                                type="checkbox"
                                                name="switch-bordered"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-bordered">
                                                Bordered
                                            </label>
                                        </div>
                                        <div class="field">
                                            <input
                                                v-model="isStriped"
                                                id="switch-striped"
                                                type="checkbox"
                                                name="switch-striped"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-striped">
                                                Striped
                                            </label>
                                        </div>
                                        <div class="field">
                                            <input
                                                v-model="isNarrowed"
                                                id="switch-narrowed"
                                                type="checkbox"
                                                name="switch-narrowed"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-narrowed">
                                                Narrowed
                                            </label>
                                        </div>
                                        <div class="field">
                                            <input
                                                v-model="isLoading"
                                                id="switch-loading"
                                                type="checkbox"
                                                name="switch-loading"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-loading">
                                                Loading state
                                            </label>
                                        </div>
                                        <div class="field">
                                            <input
                                                v-model="isEmpty"
                                                id="switch-empty"
                                                type="checkbox"
                                                name="switch-empty"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-empty">
                                                Empty
                                            </label>
                                        </div>
                                        <div class="field">
                                            <input
                                                v-model="hasMobileCards"
                                                id="switch-mobile-cards"
                                                type="checkbox"
                                                name="switch-mobile-cards"
                                                checked="checked"
                                                class="switch is-success">
                                            <label for="switch-mobile-cards">
                                                Mobile cards <small>(collapsed rows)</small>
                                            </label>
                                        </div>
                                    </b-field>

                                    <button class="button field is-danger" @click="selected = {}" :disabled="!Object.keys(selected).length">
                                        <b-icon icon="clear" size="is-small"></b-icon>
                                        <span>Clear selected</span>
                                    </button>

                                    <button class="button field is-danger" @click="checkedRows = []" :disabled="!checkedRows.length">
                                        <b-icon icon="clear" size="is-small"></b-icon>
                                        <span>Clear checked</span>
                                    </button>
                                </article>
                            </b-tab-item>
                        </b-tabs>
                    </section>
                </b-tab-item>
                <b-tab-item label="Page">
                    <section class="section">
                        <b-tabs type="is-boxed" class="block">
                            <b-tab-item label="States">
                                <article class="m-t-lg">
                                    <div class="content">
                                        <h2 class="is-size-4">Page States</h2>
                                        <ul class="page-states">
                                            <li>
                                                <a @click="isEmpty = !isEmpty">Empty</a>
                                            </li>
                                            <li>
                                                <a @click="isError = !isError">Error</a>
                                            </li>
                                            <li>
                                                <a @click="isLoading = !isLoading">Loading</a>
                                            </li>
                                            <li>
                                                <a @click="">Notification</a>
                                            </li>
                                            <li>
                                                <a @click="">Help</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </b-tab-item>
                            <b-tab-item label="Notes">
                                <h2 class="is-size-4">Page Notes</h2>
                                <article class="m-t-lg">
                                    <div class="content">
                                        <table class="table is-border is-narrow is-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="tag is-medium is-lit">
                                                            <b>1</b>
                                                        </span>
                                                    </td>
                                                    <td class="media-content">
                                                        <div class="content">
                                                            <p>Ruth hates it!</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="tag is-medium is-lit">
                                                            <b>2</b>
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
                                </article>
                            </b-tab-item>
                            <b-tab-item label="Discuss">
                            </b-tab-item>
                            <b-tab-item label="Changelog">
                            </b-tab-item>
                        </b-tabs>
                    </section>
                </b-tab-item>
            </b-tabs>
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
