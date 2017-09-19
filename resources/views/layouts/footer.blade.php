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
                        <button class="button is-primary"
                            @click="openLoading">
                            Launch loading
                        </button>
                    </div>
                    <div class="level-item">
                        <button class="button is-primary" data-show="quickview" data-target="quickviewDefault">
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
<b-loading :active.sync="isLoading" :canCancel="true"></b-loading>
<div id="quickviewDefault" class="quickview">
    <header class="quickview-header">
        <p class="title">Quickview title</p>
        <span class="delete" data-dismiss="quickview"></span>
    </header>
    <div class="quickview-body">
        <div class="quickview-block">
            ...
        </div>
    </div>
    <footer class="quickview-footer">
    </footer>
</div>
